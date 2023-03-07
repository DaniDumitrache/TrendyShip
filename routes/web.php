<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products/{filename}', function ($filename) {
    $path = storage_path('/app/public/products/' . $filename . '.jpg');

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header('Content-Type', $type);

    return $response;
})->name('ProductImage');

// return website_config data
Route::middleware(App\Http\Middleware\WebsiteConfigMiddleware::class)->group(
    function () {
        Auth::routes();

        // return admin data : logged on account admin : etc
        Route::middleware(App\Http\Middleware\AdminAuth::class)->group(
            function () {
                /* 
                check if in website_config is maintanance_mode is true. if is true then redirect user to maintenance page 
                if he is admin it will not redirect him
                */
                Route::middleware(App\Http\Middleware\SiteMaintenance::class)->group(function () {

                    Route::controller(App\Http\Controllers\productsController::class)->group(function () {
                        Route::get('/', 'GetProduct')->name('home');

                        Route::get('/ProduseNoi', 'NewProducts')->name(
                            'NewProducts'
                        );

                        Route::get('/favorites', 'GetFavoriteData')->name(
                            'favorite'
                        );

                        Route::get('/MoveToFavorite/{id}', 'MoveToFavorite');

                        Route::get(
                            '/Produse/{ProductName}/{id}',
                            'ProductPreview'
                        )->name('ViewProduct');
                    });

                    Route::controller(App\Http\Controllers\SearchProductController::class)->group(function () {
                        Route::get('/search/{productName}', 'Search')->name(
                            'search'
                        );
                        Route::post('/search/', 'SearchMenu')->name(
                            'SearchMenu'
                        );
                    });

                    Route::controller(App\Http\Controllers\CartController::class)->group(function () {
                        Route::get('/cart', 'cart')->name('cart');

                        Route::get('/cart/AddToCart/{id}', 'AddToCart')->name(
                            'AddToCart'
                        );

                        Route::get(
                            '/cart/RemoveToCart/{id}',
                            'RemoveFromCart'
                        )->name('RemoveFromCart');

                        Route::get(
                            '/cart/remove-quantity/{id}',
                            'RemoveQuantity'
                        )->name('RemoveQuantity');

                        Route::get(
                            '/cart/add-quantity/{id}',
                            'AddQuantity'
                        )->name('AddQuantity');
                    });

                    Route::controller(App\Http\Controllers\FavoriteController::class)->group(function () {
                        Route::get(
                            '/AddToFavorite/{id}',
                            'AddToFavorite'
                        )->name('AddToFavorite');

                        Route::get(
                            '/RemoveToFavorite/{id}',
                            'RemoveFromFavorite'
                        )->name('RemoveFromFavorite');
                    });

                    // if user is not logged as account redirect to home
                    Route::middleware(App\Http\Middleware\AuthMiddleware::class)->group(function () {
                        // if user is not admin redirect to home                 
                        Route::middleware(App\Http\Middleware\AdminAuthenticationMiddleware::class)->group(function () {

                            Route::controller(App\Http\controllers\image::class)->group(function () {
                                Route::post('/upload/image/', 'imageup');
                            });
                            // adminController
                            Route::controller(App\Http\Controllers\admin\adminController::class)->group(function () {
                                Route::post(
                                    '/admin/settings/ManageSite',
                                    'EditSiteSettings'
                                )->name('WebsiteSettings');
                                Route::post(
                                    '/admin/settings/Login',
                                    'EditLoginSettings'
                                )->name('LoginSettings');
                                Route::post(
                                    '/admin/settings/Smtp',
                                    'EditSmtpSettings'
                                )->name('SmtpSettings');
                                Route::post(
                                    '/admin/settings/Seo',
                                    'EditSeoSettings'
                                )->name('SeoSettings');
                                Route::post(
                                    '/admin/settings/Stripe',
                                    'EditStripeSettings'
                                )->name('StripeSettings');
                                Route::post(
                                    '/admin/settings/GoogleAdWords',
                                    'EditGoogleAdWordsSettings'
                                )->name('GoogleAdWordsSettings');
                                Route::post(
                                    '/admin/settings/GoogleLogin',
                                    'EditGoogleLoginSettings'
                                )->name('GoogleLoginSettings');

                                Route::post(
                                    '/admin/group/create',
                                    'AddGroup'
                                )->name('CreateGroup');
                                Route::post(
                                    '/admin/Category/create',
                                    'AddCategory'
                                )->name('CreateCategory');
                                Route::post(
                                    '/admin/products/create',
                                    'AddProduct'
                                )->name('CreateProduct');
                                Route::post(
                                    '/admin/customers/create',
                                    'AddCustomer'
                                )->name('CreateCustomer');

                                // users
                                Route::post(
                                    '/admin/users/create',
                                    'AddUsers'
                                )->name('CreateUsers');
                                Route::post(
                                    '/admin/users/{email}/edit',
                                    'EditUsers'
                                )->name('EditUsers');

                                Route::get(
                                    'admin/products/create',
                                    'ProductIndex'
                                )->name('admin/products/create');

                                Route::get('admin/users/', 'UsersIndex')->name(
                                    'admin/users'
                                );

                                Route::get(
                                    'admin/users/create',
                                    'AddUsersIndex'
                                )->name('admin/users/create');

                                Route::get(
                                    'admin/users/{id}/edit',
                                    'EditUsersData'
                                )->name('admin/users/edit');

                                Route::controller(App\Http\Controllers\GroupController::class)->group(function () {
                                    Route::get('admin/group/', 'index')->name(
                                        'admin/group'
                                    );
                                });

                                Route::controller(App\Http\Controllers\categories::class)->group(function () {
                                    Route::get(
                                        'admin/categories/',
                                        'index'
                                    )->name('admin/categories');
                                });
                            });

                            Route::get('admin/orders/', function () {
                                return view('admin.orders.index');
                            })->name('admin/orders');

                            Route::get('admin/orders/create', function () {
                                return view('admin.orders.add');
                            })->name('admin/orders/create');

                            Route::get('admin/orders/{id}/edit', function () {
                                return view('admin.orders.edit');
                            })->name('admin/orders/edit');

                            Route::get('admin/group/create', function () {
                                return view('admin.group.add');
                            })->name('admin/group/create');

                            Route::get('admin/group/{id}/edit', function () {
                                return view('admin.group.edit');
                            })->name('admin/group/edit');

                            Route::get('admin/categories/create', function () {
                                return view('admin.categories.add');
                            })->name('admin/categories/create');

                            Route::get(
                                'admin/categories/{id}/edit',
                                function () {
                                    return view('admin.categories.edit');
                                }
                            )->name('admin/categories/edit');

                            Route::get(
                                'admin/customers/{id}/edit',
                                function () {
                                    return view('admin.customers.edit');
                                }
                            )->name('admin/customers/edit');

                            Route::get('admin/customers/', function () {
                                return view('admin.customers.index');
                            })->name('admin/customers');

                            Route::get('admin/customers/create', function () {
                                return view('admin.customers.add');
                            })->name('admin/customers/create');

                            Route::get('admin/products/{id}/edit', function () {
                                return view('admin.products.edit');
                            })->name('admin/products/edit');

                            Route::get('admin/products/', function () {
                                return view('admin.products.index');
                            })->name('admin/products');

                            Route::view(
                                'admin/settings/ManageSite',
                                'admin.settings.ManageSite'
                            )->name('settings/ManageSite');

                            Route::view(
                                'admin/settings/Seo',
                                'admin.settings.Seo'
                            )->name('settings/Seo');

                            Route::view(
                                'admin/settings/Stripe',
                                'admin.settings.StripeConfig'
                            )->name('settings/Stripe');

                            Route::view(
                                'admin/settings/Advertising',
                                'admin.settings.AdvertisingConfiguration'
                            )->name('settings/Advertising');

                            Route::view(
                                'admin/settings/GoogleLogin',
                                'admin.settings.configGoogleLogin'
                            )->name('settings/GoogleLogin');

                            Route::view(
                                'admin/settings/Social',
                                'admin.settings.configSocialLink'
                            )->name('settings/Social');

                            Route::view(
                                'admin/settings/EditSettings',
                                'admin.settings.EditSettings'
                            )->name('EditSettings');

                            Route::view(
                                'admin/settings/EmailServer',
                                'admin.settings.EmailServerConfiguration'
                            )->name('settings/EmailServer');

                            Route::view(
                                'admin/settings/Login',
                                'admin.settings.Login'
                            )->name('settings/Login');
                        });
                        /* (adminController) */

                        //  (CustomerController)
                        Route::controller(App\Http\Controllers\CustomerController::class)->group(function () {
                            Route::post('/ChangeEmail', 'ChangeEmail')->name(
                                'ChangeEmail'
                            );

                            Route::get('/account', 'account')->name('account');

                            Route::post(
                                '/account/ChangePassword',
                                'ChangePassword'
                            )->name('ChangePassword');

                            Route::post(
                                'SendVerificationCode2fa',
                                'SendVerificationCode2fa'
                            )->name('SendVerificationCode2fa');

                            Route::post('Activate2fa', 'Activate2fa')->name(
                                'Activate2fa'
                            );

                            Route::get(
                                '/account/history/shopping',
                                'order'
                            )->name('order');
                            Route::get(
                                '/account/order/tracking/{id}',
                                'orderDetalis'
                            )->name('OrderDetalis');

                            Route::post(
                                '/ActionSafeSetings',
                                'ActionSafeSetings'
                            )->name('ActionSafeSetings');
                        });
                        //  (CustomerController)

                        //  (DeliveryAddressesController)
                        Route::controller(App\Http\Controllers\DeliveryAddressesController::class)->group(function () {
                            Route::get(
                                '/DeleteAdress/{address_id}',
                                'DeleteAddress'
                            )->name('DeleteAddress');

                            Route::get(
                                '/EditAddress/{id}',
                                'AddressData'
                            )->name('EditAdress');

                            Route::post('/EditAddress}', 'EditAddress')->name(
                                'EditAddress'
                            );

                            Route::get('/DeliveryAddresses', 'index')->name(
                                'DeliveryAddresses'
                            );
                            Route::post(
                                '/DeliveryAddresses',
                                'addAdresses'
                            )->name('addAdress');
                        });
                        //  (DeliveryAddressesController)

                        //  (Coupons)
                        Route::controller(App\Http\Controllers\Coupons::class)->group(function () {
                            Route::post('/PaymentCupon', 'ValidateCupon');
                            Route::get('/PaymentCuponClose', 'UnSetCupon');
                        });
                        //  (Coupons)

                        //  (Checkout)
                        Route::controller(App\Http\Controllers\Checkout::class)->group(function () {
                            Route::post('/AddDelivery', 'store')->name(
                                'AddDelivery'
                            );
                            Route::get('/payment', 'CheckOut')->name(
                                'Checkout'
                            );

                            Route::get('/AddDelivery', function () {
                                return redirect('/');
                            });
                        });
                        //  (Checkout)

                        //  (NewsLetter)
                        Route::controller(App\Http\Controllers\NewsLetter::class)->group(function () {
                            Route::post(
                                'NewsLetter',
                                'ValidateNewsLetter'
                            )->name('NewsLetter');
                        });

                        //  (UserNotificationController)
                        Route::controller(App\Http\Controllers\UserNotificationController::class)->group(function () {
                            Route::get('/Subscriptions', 'index')->name(
                                'Subscriptions'
                            );

                            Route::post(
                                '/NotificationSettings',
                                'EditNotificationSettings'
                            )->name('NotificationSettings');
                        });
                        //  (UserNotificationController)

                        Route::get('/AddAddress', function () {
                            return view('account.address.AddAdress');
                        })->name('AddAdress');

                        Route::get('/SecuritySettings', function () {
                            return view('account.settings.SecuritySettings');
                        })->name('SecuritySettings');

                        Route::get('/Returns', function () {
                            return view('account.Returns');
                        })->name('Returns');

                        Route::get('/Reviews', function () {
                            return view('account.Reviews');
                        })->name('Reviews');

                        Route::get('/Guarantees', function () {
                            return view('account.Guarantees');
                        })->name('Guarantees');

                        Route::get('/PremiumMembership', function () {
                            return view('account.PremiumMembership');
                        })->name('PremiumMembership');

                        Route::get('/VouchersGiftCards', function () {
                            return view('account.VouchersGiftCards');
                        })->name('VouchersGiftCards');

                        Route::get('/Cards', function () {
                            return view('account.Cards');
                        })->name('Cards');

                        Route::get('/Service', function () {
                            return view('account.Service');
                        })->name('Service');
                    });
                    
                    //  (ConatctController)
                    Route::controller(App\Http\Controllers\ConatctController::class)->group(function () {
                        Route::post('/ContactSent', 'store');
                        Route::view('/contact', 'contact-us')->name('contact');
                    });
                    //  (ConatctController)

                    Route::view('/faq', 'faq')->name('faq');
                    Route::view('aboutUs', 'about-us');
                });
            }
        );
    }
);
