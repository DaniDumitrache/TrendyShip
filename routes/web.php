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

Route::group(
    ['middleware' => [App\Http\Middleware\WebsiteConfigMiddleware::class]],
    function () {
        Auth::routes();

        Route::post('/upload/image/', [
            App\Http\controllers\image::class,
            'imageup',
        ]);

        Route::get('/products/{filename}', function ($filename) {
            $path = storage_path('/app/public/products/' . $filename . '.jpg');

            $file = File::get($path);
            $type = File::mimeType($path);

            $response = Response::make($file, 200);
            $response->header('Content-Type', $type);

            return $response;
        })->name('ProductImage');
        Route::group(
            ['middleware' => [App\Http\Middleware\AdminAuth::class]],
            function () {
                Route::group(
                    [
                        'middleware' => [
                            App\Http\Middleware\SiteMaintenance::class,
                        ],
                    ],
                    function () {
                        /* AUTH (START) */

                        Route::post('/admin/settings/ManageSite', [
                            App\Http\Controllers\adminController::class,
                            'EditSiteSettings',
                        ])->name('WebsiteSettings');
                        Route::post('/admin/settings/Login', [
                            App\Http\Controllers\adminController::class,
                            'EditLoginSettings',
                        ])->name('LoginSettings');
                        Route::post('/admin/settings/Smtp', [
                            App\Http\Controllers\adminController::class,
                            'EditSmtpSettings',
                        ])->name('SmtpSettings');
                        Route::post('/admin/settings/Seo', [
                            App\Http\Controllers\adminController::class,
                            'EditSeoSettings',
                        ])->name('SeoSettings');
                        Route::post('/admin/settings/Stripe', [
                            App\Http\Controllers\adminController::class,
                            'EditStripeSettings',
                        ])->name('StripeSettings');
                        Route::post('/admin/settings/GoogleAdWords', [
                            App\Http\Controllers\adminController::class,
                            'EditGoogleAdWordsSettings',
                        ])->name('GoogleAdWordsSettings');
                        Route::post('/admin/settings/GoogleLogin', [
                            App\Http\Controllers\adminController::class,
                            'EditGoogleLoginSettings',
                        ])->name('GoogleLoginSettings');

                        Route::post('/admin/group/create', [
                            App\Http\Controllers\adminController::class,
                            'AddGroup',
                        ])->name('CreateGroup');
                        Route::post('/admin/Category/create', [
                            App\Http\Controllers\adminController::class,
                            'AddCategory',
                        ])->name('CreateCategory');
                        Route::post('/admin/products/create', [
                            App\Http\Controllers\adminController::class,
                            'AddProduct',
                        ])->name('CreateProduct');
                        Route::post('/admin/customers/create', [
                            App\Http\Controllers\adminController::class,
                            'AddCustomer',
                        ])->name('CreateCustomer');

                        // users
                        Route::post('/admin/users/create', [
                            App\Http\Controllers\adminController::class,
                            'AddUsers',
                        ])->name('CreateUsers');
                        Route::post('/admin/users/{email}/edit', [
                            App\Http\Controllers\adminController::class,
                            'EditUsers',
                        ])->name('EditUsers');

                        // Forgot Password
                        Route::get('/ForgotPassword', [
                            App\Http\Controllers\ForgotPasswordController::class,
                            'index',
                        ])->name('ForgotPassword');
                        Route::post('/ForgotPassword', [
                            App\Http\Controllers\ForgotPasswordController::class,
                            'ValidateForgotPassword',
                        ])->name('ForgotPassword');

                        // Reset Password
                        Route::get('/ResetPassword/{email}/{token}', [
                            App\Http\Controllers\ResetPasswordController::class,
                            'index',
                        ])->name('ResetPassword');
                        Route::post('/ResetPassword', [
                            App\Http\Controllers\ResetPasswordController::class,
                            'ValidateResetPassword',
                        ])->name('ResetPassword');
                        Route::post('/ValidatePassword', [
                            App\Http\Controllers\auth\ValidatePassword::class,
                            'ValidatePassword',
                        ])->name('ValidatePassword');

                        /* AUTH (END) */

                        /* HOME (START) */

                        // Home
                        Route::get('/', [
                            App\Http\Controllers\productsController::class,
                            'GetProduct',
                        ]);

                        Route::get('/faq', function () {
                            return view('faq');
                        })->name('faq');

                        // Search SearchMenu
                        Route::get('/search/{categoryes}/{productName}', [
                            App\Http\Controllers\SearchProductController::class,
                            'Search',
                        ])->name('search');
                        Route::post('/search/', [
                            App\Http\Controllers\SearchProductController::class,
                            'SearchMenu',
                        ])->name('SearchMenu');

                        /* HOME (END) */

                        // Products
                        Route::get('/ProduseNoi', [
                            App\Http\Controllers\productsController::class,
                            'NewProducts',
                        ])->name('NewProducts');

                        // Cart
                        Route::get('/cart', [
                            App\Http\Controllers\CartController::class,
                            'cart',
                        ])->name('cart');

                        Route::get('/cart/AddToCart/{id}', [
                            App\Http\Controllers\CartController::class,
                            'AddToCart',
                        ])->name('AddToCart');

                        Route::get('/cart/RemoveToCart/{id}', [
                            App\Http\Controllers\CartController::class,
                            'RemoveFromCart',
                        ])->name('RemoveFromCart');

                        Route::get('/cart/remove-quantity/{id}', [
                            App\Http\Controllers\CartController::class,
                            'RemoveQuantity',
                        ])->name('RemoveQuantity');

                        Route::get('/cart/add-quantity/{id}', [
                            App\Http\Controllers\CartController::class,
                            'AddQuantity',
                        ])->name('AddQuantity');

                        // Favorite
                        Route::get('/AddToFavorite/{id}', [
                            App\Http\Controllers\FavoriteController::class,
                            'AddToFavorite',
                        ])->name('AddToFavorite');

                        Route::get('/RemoveToFavorite/{id}', [
                            App\Http\Controllers\FavoriteController::class,
                            'RemoveFromFavorite',
                        ])->name('RemoveFromFavorite');

                        Route::get('/favorites', [
                            App\Http\Controllers\productsController::class,
                            'GetFavoriteData',
                        ])->name('favorite');

                        Route::get('/MoveToFavorite/{id}', [
                            App\Http\Controllers\productsController::class,
                            'MoveToFavorite',
                        ]);

                        // CheckOut
                        Route::get('/AddDelivery', function () {
                            return redirect('/');
                        });
                        Route::post('/AddDelivery', [
                            App\Http\Controllers\Checkout::class,
                            'store',
                        ])->name('AddDelivery');
                        Route::get('/payment', [
                            App\Http\Controllers\CheckOut::class,
                            'CheckOut',
                        ])->name('Checkout');
                        Route::post('/PaymentCupon', [
                            App\Http\Controllers\Coupons::class,
                            'ValidateCupon',
                        ]);
                        Route::get('/PaymentCuponClose', [
                            App\Http\Controllers\Coupons::class,
                            'UnSetCupon',
                        ]);

                        Route::post('/ChangeEmail', [
                            App\Http\Controllers\CustomerController::class,
                            'ChangeEmail',
                        ])->name('ChangeEmail');

                        Route::group(
                            [
                                'middleware' => [
                                    App\Http\Middleware\AuthMiddleware::class,
                                ],
                            ],
                            function () {
                                // account
                                Route::get('/account', [
                                    App\Http\Controllers\CustomerController::class,
                                    'account',
                                ])->name('account');
                                // Route::get('/ManageAdress', function () {
                                //     return view('account-manage-address');
                                // });
                                Route::get('/account/ManageAdress', [
                                    App\Http\Controllers\ManageAdressController::class,
                                    'index',
                                ])->name('ManageAdress');
                                Route::post('/account/ManageAdress', [
                                    App\Http\Controllers\ManageAdressController::class,
                                    'ValidateEditAdress',
                                ])->name('ManageAdress');
                                Route::get('/account/ManageProfile', [
                                    App\Http\Controllers\ManagePersonalProfileController::class,
                                    'index',
                                ])->name('ManageProfile');
                                Route::post('/account/ManageProfile', [
                                    App\Http\Controllers\ManagePersonalProfileController::class,
                                    'ValidateEditProfile',
                                ])->name('ManageProfileValidate');

                                Route::post('/account/ChangePassword', [
                                    App\Http\Controllers\CustomerController::class,
                                    'ChangePassword',
                                ])->name('ChangePassword');

                                Route::post('SendVerificationCode2fa', [
                                    App\Http\Controllers\CustomerController::class,
                                    'SendVerificationCode2fa',
                                ])->name('SendVerificationCode2fa');

                                Route::post('Activate2fa', [
                                    App\Http\Controllers\CustomerController::class,
                                    'Activate2fa',
                                ])->name('Activate2fa');

                                // order
                                Route::get('/account/history/shopping', [
                                    App\Http\Controllers\CustomerController::class,
                                    'order',
                                ])->name('order');
                                Route::get('/account/order/tracking/{id}', [
                                    App\Http\Controllers\CustomerController::class,
                                    'orderDetalis',
                                ])->name('OrderDetalis');

                                /* Address (Start) */

                                Route::get('/DeleteAdress/{address_id}', [
                                    App\Http\Controllers\DeliveryAddressesController::class,
                                    'DeleteAddress',
                                ])->name('DeleteAddress');

                                Route::get('/AddAddress', function () {
                                    return view('account.address.AddAdress');
                                })->name('AddAdress');

                                Route::get('/EditAddress/{id}', [
                                    App\Http\Controllers\DeliveryAddressesController::class,
                                    'AddressData',
                                ])->name('EditAdress');

                                Route::post('/EditAddress}', [
                                    App\Http\Controllers\DeliveryAddressesController::class,
                                    'EditAddress',
                                ])->name('EditAddress');

                                /* Address (End) */

                                Route::get('/ValidatePassword', function () {
                                    return view('auth.ValidatePassword');
                                })->name('ValidatePassword');

                                Route::get('/SecuritySettings', function () {
                                    return view(
                                        'account.settings.SecuritySettings'
                                    );
                                })->name('SecuritySettings');

                                Route::get('/DeliveryAddresses', [
                                    App\Http\Controllers\DeliveryAddressesController::class,
                                    'index',
                                ])->name('DeliveryAddresses');
                                Route::post('/DeliveryAddresses', [
                                    App\Http\Controllers\DeliveryAddressesController::class,
                                    'addAdresses',
                                ])->name('addAdress');
                                Route::post('/ActionSafeSetings', [
                                    App\Http\Controllers\CustomerController::class,
                                    'ActionSafeSetings',
                                ])->name('ActionSafeSetings');

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

                                Route::get('/Subscriptions', [App\Http\Controllers\UserNotificationController::class,'index'])->name('Subscriptions');

                                Route::post('/NotificationSettings', [App\Http\Controllers\UserNotificationController::class,'EditNotificationSettings'])->name('NotificationSettings');
                            }
                        );
                        // Contact
                        Route::get('/contact', function () {
                            return view('/contact-us');
                        })->name('contact');
                        Route::post('/ContactSent', [
                            App\Http\Controllers\ConatctController::class,
                            'store',
                        ]);

                        // Products
                        Route::get('/Produse/{ProductName}/{id}', [
                            App\Http\Controllers\productsController::class,
                            'ProductPreview',
                        ])->name('ViewProduct');

                        // Info
                        Route::get('aboutUs', function () {
                            return view('about-us');
                        });
                        Route::group(
                            [
                                'middleware' => [
                                    App\Http\Middleware\AdminAuthenticationMiddleware::class,
                                ],
                            ],
                            function () {
                                /* (Settings)(Start) */
                                Route::get(
                                    'admin/settings/Advertising',
                                    function () {
                                        return view(
                                            'admin.settings.AdvertisingConfiguration'
                                        );
                                    }
                                )->name('settings/Advertising');

                                Route::get(
                                    'admin/settings/GoogleLogin',
                                    function () {
                                        return view(
                                            'admin.settings.configGoogleLogin'
                                        );
                                    }
                                )->name('settings/GoogleLogin');

                                Route::get(
                                    'admin/settings/Social',
                                    function () {
                                        return view(
                                            'admin.settings.configSocialLink'
                                        );
                                    }
                                )->name('settings/Social');

                                Route::get(
                                    'admin/settings/EditSettings',
                                    function () {
                                        return view(
                                            'admin.settings.EditSettings'
                                        );
                                    }
                                )->name('EditSettings');

                                Route::get(
                                    'admin/settings/EmailServer',
                                    function () {
                                        return view(
                                            'admin.settings.EmailServerConfiguration'
                                        );
                                    }
                                )->name('settings/EmailServer');

                                Route::get('admin/settings/Login', function () {
                                    return view('admin.settings.Login');
                                })->name('settings/Login');

                                Route::get(
                                    'admin/settings/ManageSite',
                                    function () {
                                        return view(
                                            'admin.settings.ManageSite'
                                        );
                                    }
                                )->name('settings/ManageSite');

                                Route::get('admin/settings/Seo', function () {
                                    return view('admin.settings.Seo');
                                })->name('settings/Seo');

                                Route::get(
                                    'admin/settings/Stripe',
                                    function () {
                                        return view(
                                            'admin.settings.StripeConfig'
                                        );
                                    }
                                )->name('settings/Stripe');

                                /* (Settings)(End) */
                                /* (Products)(Start) */
                                Route::get('admin/products/', function () {
                                    return view('admin.products.index');
                                })->name('admin/products');

                                Route::get(
                                    'admin/products/create',
                                    function () {
                                        return view('admin.products.add');
                                    }
                                )->name('admin/products/create');

                                Route::get(
                                    'admin/products/{id}/edit',
                                    function () {
                                        return view('admin.products.edit');
                                    }
                                )->name('admin/products/edit');
                                /* (Products)(End) */

                                /* (customers)(Start) */
                                Route::get('admin/customers/', function () {
                                    return view('admin.customers.index');
                                })->name('admin/customers');

                                Route::get(
                                    'admin/customers/create',
                                    function () {
                                        return view('admin.customers.add');
                                    }
                                )->name('admin/customers/create');

                                Route::get(
                                    'admin/customers/{id}/edit',
                                    function () {
                                        return view('admin.customers.edit');
                                    }
                                )->name('admin/customers/edit');
                                /* (customers)(End) */

                                /* (users)(Start) */
                                Route::get('admin/users/', [
                                    App\Http\Controllers\adminController::class,
                                    'UsersIndex',
                                ])->name('admin/users');

                                Route::get('admin/users/create', [
                                    App\Http\Controllers\adminController::class,
                                    'AddUsersIndex',
                                ])->name('admin/users/create');

                                Route::get('admin/users/{id}/edit', [
                                    App\Http\Controllers\adminController::class,
                                    'EditUsersData',
                                ])->name('admin/users/edit');
                                /* (users)(End) */

                                /* (orders)(Start) */
                                Route::get('admin/orders/', function () {
                                    return view('admin.orders.index');
                                })->name('admin/orders');

                                Route::get('admin/orders/create', function () {
                                    return view('admin.orders.add');
                                })->name('admin/orders/create');

                                Route::get(
                                    'admin/orders/{id}/edit',
                                    function () {
                                        return view('admin.orders.edit');
                                    }
                                )->name('admin/orders/edit');
                                /* (orders)(End) */

                                /* (group)(Start) */
                                Route::get('admin/group/', [
                                    App\Http\Controllers\GroupController::class,
                                    'index',
                                ])->name('admin/group');

                                Route::get('admin/group/create', function () {
                                    return view('admin.group.add');
                                })->name('admin/group/create');

                                Route::get(
                                    'admin/group/{id}/edit',
                                    function () {
                                        return view('admin.group.edit');
                                    }
                                )->name('admin/group/edit');
                                /* (group)(End) */

                                /* (categories)(Start) */
                                Route::get('admin/categories/', [
                                    App\Http\Controllers\categories::class,
                                    'index',
                                ])->name('admin/categories');

                                Route::get(
                                    'admin/categories/create',
                                    function () {
                                        return view('admin.categories.add');
                                    }
                                )->name('admin/categories/create');

                                Route::get(
                                    'admin/categories/{id}/edit',
                                    function () {
                                        return view('admin.categories.edit');
                                    }
                                )->name('admin/categories/edit');
                                /* (categories)(End) */
                            }
                        );

                        // Footer
                        Route::post('NewsLetter', [
                            App\Http\Controllers\NewsLetter::class,
                            'ValidateNewsLetter',
                        ])->name('NewsLetter');
                    }
                );
            }
        );
    }
);
