<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserNotification;

class UserNotificationController extends Controller
{
    public function index()
    {
        $UserSettings = UserNotification::where([
            'user_id' => Auth::user()->id,
        ])->first();

        return view('account.Subscriptions')->with([
            'UserSettings' => $UserSettings,
        ]);
    }
    public function EditNotificationSettings(Request $req)
    {
        $settings = [
            'Newsletter' => $req->has('Newsletter') ? true : false,
            'FeedbackNotifications' => [
                'WriteReview' => $req->has('WriteAReview') ? true : false,
                'SatisfactionQuestionnaire' => $req->has(
                    'SatisfactionQuestionnaire'
                )
                    ? true
                    : false,
            ],
            'ShoppingCartAlerts' => [
                'CartProductsNotification' => $req->has('CartNotification')
                    ? true
                    : false,
                'DiscountPriceProductsNotification' => $req->has(
                    'DiscountNotification'
                )
                    ? true
                    : false,
                'CartProductsStock' => $req->has('LimitCartProducts')
                    ? true
                    : false,
            ],
            'FavoriteAlerts' => [
                'StockFavoriteProductsNotification' => $req->has(
                    'StockProductsNotification'
                )
                    ? true
                    : false,
                'RecomandedSealProductsNotification' => $req->has(
                    'recommendedSealedProducts'
                )
                    ? true
                    : false,
                'DiscountPriceProductsNotification' => $req->has(
                    'FavoritProductsPriceNotification'
                )
                    ? true
                    : false,
            ],
            'PersonalizedRecommendations' => [
                'promotionsRecomandedNotification' => $req->has(
                    'RecomandedMatchOrdersNotification'
                )
                    ? true
                    : false,
            ],
            'YourOffersOfInterest' => [
                'recommendProductsAfterVisit' => $req->has(
                    'RecomandedLastVisitNotification'
                )
                    ? true
                    : false,
                'LowerPriceProductsNotify' => $req->has(
                    'RecomandedDiscountPriceNotification'
                )
                    ? true
                    : false,
            ],
        ];

        $UserSettings = UserNotification::where([
            'user_id' => Auth::user()->id,
        ])->first();
        if (empty($UserSettings)) {
            $UserSettings = new UserNotification();
        }
        $UserSettings->user_id = Auth::user()->id;
        $UserSettings->config = json_encode($settings);
        $UserSettings->timestamps = false;
        $UserSettings->save();

        return back();
    }
}
