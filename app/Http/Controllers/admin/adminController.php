<?php

namespace App\Http\Controllers\admin;

use App\Models\websiteConfig;
use App\Models\Group;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use App\Models\productsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function CheckIsAdmin()
    {
        $user = Auth::user();
        if (!empty($user->email)) {
            $admin = DB::table('admin')
                ->where(['email' => $user->email])
                ->whereNot(['group' => ''])
                ->get();

            foreach ($admin as $admin) {
            }

            if (!empty($admin->email)) {
                return true;
            }
        }
    }

    public function GetGroupPermission()
    {
        $user = Auth::user();
        $group = [];

        if (!empty($user->email)) {
            $admin = DB::table('admin')
                ->where(['email' => $user->email])
                ->whereNot(['group' => ''])
                ->get();

            foreach ($admin as $admin) {
            }

            if (!empty($admin->group)) {
                $group = DB::table('admin_group')
                    ->where(['group' => $admin->group])
                    ->get();

                foreach ($group as $group) {
                }

                $group = $group;
            }
        }
        return $this->GroupPermission = $group;
    }

    public function AdminAndUsersData()
    {
        $users = User::all();
        $groups = Group::all();
        $admins = Admin::all();

        return $this->CustomersAndAdminData = [
            'users' => $users,
            'groups' => $groups,
            'admins' => $admins,
        ];
    }

    public function AddUsersIndex()
    {
        $this->AdminAndUsersData();
        return view('admin.users.add')->with([
            'users' => $this->CustomersAndAdminData['users'],
            'groups' => $this->CustomersAndAdminData['groups'],
            'admins' => $this->CustomersAndAdminData['admins'],
        ]);
    }

    public function EditUsersData($id)
    {
        $this->AdminAndUsersData();
        $user = User::find($id);
        $admins = Admin::where(['email' => $user->email])->first();

        return view('admin.users.edit')->with([
            'user' => $user,
            'groups' => $this->CustomersAndAdminData['groups'],
            'admin' => $admins,
        ]);
    }

    public function EditUsers(Request $req, $email)
    {
        $validation = $req->validate(
            [
                'group' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        Admin::where('email', $email)->update([
            'group' => $req->input('group'),
        ]);

        return back();
    }

    public function UsersIndex()
    {
        $this->AdminAndUsersData();
        $users = [];
        foreach ($this->CustomersAndAdminData['admins'] as $admin) {
            $user = User::where(['email' => $admin->email])->first();

            if ($user) {
                $users[] = [
                    'user_id' => $user->id,
                    'email' => $admin->email,
                    'group' => $admin->group,
                ];
            }
        }

        return view('admin.users.index')->with([
            'users' => $users,
        ]);
    }

    public function ProductIndex()
    {
        $categoryes = Db::table('categoryes')->get();

        return view('admin.products.add')->with([
            'categoryes' => $categoryes,
        ]);
    }

    public function AddProduct(Request $req)
    {
        $validation = $req->validate(
            [
                'name' => ['required'],
                'category' => ['required'],
                'description' => ['required'],
                'price' => ['required'],
                'stock' => ['required', 'min:1'],
                // 'features' => ['required'],
                'MainImage' => ['required'],
            ],
            []
        );

        if (
            empty($req->image1) &&
            empty($req->image2) &&
            empty($req->image3) &&
            empty($req->image4) &&
            empty($req->image5) &&
            empty($req->image6) &&
            empty($req->image7) &&
            empty($req->image8)
        ) {
            return redirect()
                ->back()
                ->withInput($req->only('ProductGlaery', 'remember'))
                ->withErrors([
                    'ProductGlaery' =>
                        'Trebuie să adăugați cel puțin o imagine în galeria produsului.',
                ]);
        }

        if (!$validation) {
            return back();
        }

        $images = [
            $req->image1,
            $req->image2,
            $req->image3,
            $req->image4,
            $req->image5,
            $req->image6,
            $req->image7,
        ];

        foreach ($images as $key => $value) {
            if (is_null($value) || $value == '') {
                unset($images[$key]);
            }
        }

        $product = new productsTable();
        $product->Title = $req->name;
        $product->stock = $req->stock;
        $product->description = $req->description;
        $product->categoryes = $req->category;
        $product->price = $req->price;
        $product->images = json_encode($images);
        $product->MainImage = $req->MainImage;
        $product->timestamps = false;
        $product->save();

        return back();
    }

    public function AddUsers(Request $req)
    {
        $validation = $req->validate(
            [
                'Users' => ['required'],
                'group' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $Users = new Admin();
        $Users->email = $req->input('Users');
        $Users->group = $req->input('group');
        $Users->timestamps = false;
        $Users->save();

        return back();
    }

    public function AddCustomer(Request $req)
    {
        $validation = $req->validate(
            [
                'name' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $Category = new Category();
        $Category->name = $req->input('name');
        $Category->category = $req->input('name');
        $Category->description = $req->input('name');
        $Category->price = $req->input('name');
        $Category->stock = $req->input('name');
        $Category->features = $req->input('name');
        $Category->name = $req->input('name');
        $Category->save();

        return back();
    }

    public function AddGroup(Request $req)
    {
        $validation = $req->validate(
            [
                'name' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $permission = [
            'permission' => [
                'dashboard' => [$req->has('dashboard') ? true : false],
                'customers' => [$req->has('adminCustomers') ? true : false],
                'users' => [$req->has('adminUsers') ? true : false],
                'orders' => [$req->has('adminOrders') ? true : false],
                'group' => [$req->has('adminGroup') ? true : false],
                'Category' => [$req->has('adminCategory') ? true : false],
                'products' => [$req->has('adminProducts') ? true : false],
            ],
        ];

        $group = new Group();
        $group->group = $req->input('name');
        $group->permission = json_encode($permission);
        $group->save();

        return back();
    }

    public function AddAdmin(Request $req)
    {
    }

    public function AddCategory(Request $req)
    {
        $validation = $req->validate(
            [
                'name' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $Category = new Category();
        $Category->name = $req->input('name');
        $Category->save();

        return back();
    }

    // Edit Site Settingss
    public function EditSiteSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'SiteName' => 'required',
                'maintenance' => 'required',
                'PaymentsMethod' => 'required',
                'currency' => ['sometimes', 'required'],
                'languages' => ['sometimes', 'required'],
                'delivery_fee' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->site_name = $req->input('SiteName');
        $website_config->maintenance_mode =
            $req->input('maintenance') == 'on' ? 1 : 0;
        $website_config->payment_methods = implode(
            ',',
            $req->input('PaymentsMethod')
        );
        if (!empty($req->input('currency'))) {
            $website_config->currency = $req->input('currency');
        }

        if (!empty($req->input('languages'))) {
            $website_config->language = $req->input('languages');
        }

        $website_config->delivery_fee = $req->input('delivery_fee');
        $website_config->save();

        return back();
    }

    public function EditLoginSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'min_password_length' => ['required'],
                'password_expiration_days' => ['required'],
                'allowed_failed_login_attempts' => ['required'],
                'max_brute_force_attempts' => ['required'],
                'two_factor_authentication' => ['sometimes', 'required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->min_password_length = $req->input(
            'min_password_length'
        );
        $website_config->password_expire_days = $req->input(
            'password_expiration_days'
        );
        $website_config->max_failed_attempts = $req->input(
            'allowed_failed_login_attempts'
        );
        $website_config->max_brute_force_attempts = $req->input(
            'max_brute_force_attempts'
        );
        $website_config->two_factor_authentication = $req->has(
            'two_factor_authentication'
        )
            ? 1
            : 0;
        $website_config->save();

        return back();
    }

    public function EditSmtpSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'email_server' => ['required'],
                'sender_email' => ['required'],
                'sender_name' => ['required'],
                'email_authentication' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->email_server = $req->input('email_server');
        $website_config->email_sender = $req->input('sender_email');
        $website_config->sender_name = $req->input('sender_name');
        $website_config->email_authentication = $req->input(
            'email_authentication'
        );
        $website_config->save();

        return back();
    }

    public function EditSeoSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'meta_title' => ['required'],
                'meta_keywords' => ['required'],
                'meta_description' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->meta_title = $req->input('meta_title');
        $website_config->meta_keywords = $req->input('meta_keywords');
        $website_config->meta_description = $req->input('meta_description');
        $website_config->save();

        return back();
    }

    public function EditStripeSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'stripe_public_key' => ['required'],
                'stripe_secret_key' => ['required'],
                'stripe_account_id' => ['required'],
                'webhook_url' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->stripe_public_key = $req->input('stripe_public_key');
        $website_config->stripe_secret_key = $req->input('stripe_secret_key');
        $website_config->stripe_account_id = $req->input('stripe_account_id');
        $website_config->webhook_url = $req->input('webhook_url');
        $website_config->save();

        return back();
    }

    public function EditGoogleAdWordsSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'api_key' => ['required'],
                'product_category' => ['required'],
                'search_term' => ['required'],
                'campaign_duration' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->google_adwords_api_key = $req->input('api_key');
        $website_config->product_category = $req->input('product_category');
        $website_config->search_term = $req->input('search_term');
        $website_config->budget = $req->input('budget');
        $website_config->campaign_duration = $req->input('campaign_duration');
        $website_config->save();

        return back();
    }

    public function EditGoogleLoginSettings(Request $req)
    {
        $validation = $req->validate(
            [
                'google_client_id' => ['required'],
                'google_client_secret' => ['required'],
            ],
            []
        );

        if (!$validation) {
            return back();
        }

        $website_config = websiteConfig::find(1);
        $website_config->google_client_id = $req->input('google_client_id');
        $website_config->google_client_secret = $req->input(
            'google_client_secret'
        );
        $website_config->save();

        return back();
    }
}
