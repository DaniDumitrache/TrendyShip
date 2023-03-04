@extends('layouts.body')
@section('content')
    <!-- account -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include('layouts.headerAccount')
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="account_cont_wrap shadow_sm">
                        <div class="profile_info_wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title" style="border-bottom: 1px solid gray;">
                                            <h4>Abonările mele</h4>
                                        </div>
                                        {{-- <pre>
                                            @php
                                                print_r(json_decode($UserSettings->config, true)['FeedbackNotifications']['WriteReview'])
                                            @endphp
                                        </pre> --}}
                                        <div class="prfo_info_cont">
                                            <form action="{{ route('NotificationSettings') }}" method="POST">
                                                @csrf
                                                <div class="accord_wrap ">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    Newsletter {{ $website_config->site_name }}
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text_md">
                                                                    <div class="retagreement mt-4 mb-4"
                                                                        bis_skin_checked="1">
                                                                        <div class="custom_check check_2 d-flex align-items-center"
                                                                            bis_skin_checked="1">
                                                                            <input type="checkbox"
                                                                                @if (json_decode($UserSettings->config)->Newsletter == true) checked @endif
                                                                                class="check_inp" hidden=""
                                                                                id="Newsletter" name="Newsletter">
                                                                            <label for="Newsletter"
                                                                                class="text_md">Newsletter
                                                                                {{ $website_config->site_name }}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accord_wrap ">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFeedbackNotifications">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFeedbackNotifications"
                                                                aria-expanded="false"
                                                                aria-controls="collapseFeedbackNotifications">
                                                                Notificari de feedback
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFeedbackNotifications"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="headingFeedbackNotifications"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body text_md">
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" @if (json_decode($UserSettings->config, true)['FeedbackNotifications']['WriteReview'] == true) checked @endif class="check_inp"
                                                                            hidden="" id="WriteAReview"
                                                                            name="WriteAReview">
                                                                        <label for="WriteAReview" class="text_md">Scrie un
                                                                            review</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" @if (json_decode($UserSettings->config, true)['FeedbackNotifications']['SatisfactionQuestionnaire'] == true) checked @endif class="check_inp"
                                                                            hidden="" id="SatisfactionQuestionnaire"
                                                                            name="SatisfactionQuestionnaire">
                                                                        <label for="SatisfactionQuestionnaire"
                                                                            class="text_md">Chestionar de
                                                                            satisfactie</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="accord_wrap ">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingDedicatedPromotions">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseDedicatedPromotions"
                                                                aria-expanded="false"
                                                                aria-controls="collapseDedicatedPromotions">
                                                                Promotii dedicate
                                                            </button>
                                                        </h2>
                                                        <div id="collapseDedicatedPromotions"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingDedicatedPromotions"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body text_md">
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Petshop" name="Petshop">
                                                                        <label for="Petshop"
                                                                            class="text_md">Petshop</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Baby&Toys"
                                                                            name="Baby&Toys">
                                                                        <label for="Baby&Toys"
                                                                            class="text_md">Baby&Toys</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Beauty" name="Beauty">
                                                                        <label for="Beauty"
                                                                            class="text_md">Beauty</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Sport" name="Sport">
                                                                        <label for="Sport"
                                                                            class="text_md">Sport</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Auto" name="Auto">
                                                                        <label for="Auto" class="text_md">Auto</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Bricolaj"
                                                                            name="Bricolaj">
                                                                        <label for="Bricolaj"
                                                                            class="text_md">Bricolaj</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Fashion" name="Fashion">
                                                                        <label for="Fashion"
                                                                            class="text_md">Fashion</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="HomeDeco"
                                                                            name="HomeDeco">
                                                                        <label for="HomeDeco" class="text_md">Home &
                                                                            Deco</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Books" name="Books">
                                                                        <label for="Books"
                                                                            class="text_md">Books</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Supermarket"
                                                                            name="Supermarket">
                                                                        <label for="Supermarket"
                                                                            class="text_md">Supermarket</label>
                                                                    </div>
                                                                </div>
                                                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                                    <div class="custom_check check_2 d-flex align-items-center"
                                                                        bis_skin_checked="1">
                                                                        <input type="checkbox" class="check_inp"
                                                                            hidden="" id="Corporate"
                                                                            name="Corporate">
                                                                        <label for="Corporate"
                                                                            class="text_md">Corporate</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  --}}
                                        <div class="accord_wrap ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingShoppingCartAlerts">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseShoppingCartAlerts" aria-expanded="false"
                                                        aria-controls="collapseShoppingCartAlerts">
                                                        Alerte cos de cumparaturi
                                                    </button>
                                                </h2>
                                                <div id="collapseShoppingCartAlerts" class="accordion-collapse collapse"
                                                    aria-labelledby="headingShoppingCartAlerts"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body text_md">
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['ShoppingCartAlerts']['CartProductsNotification'] == true) checked @endif
                                                                    class="check_inp" hidden="" id="CartNotification"
                                                                    name="CartNotification">
                                                                <label for="CartNotification" class="text_md">Te
                                                                    tinem la curent cu produsele din
                                                                    cosul tau</label>
                                                            </div>
                                                        </div>
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['ShoppingCartAlerts']['DiscountPriceProductsNotification'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="DiscountNotification" name="DiscountNotification">
                                                                <label for="DiscountNotification" class="text_md">Te anuntam
                                                                    cand ai un pret mai
                                                                    bun
                                                                    la produsul din cos</label>
                                                            </div>
                                                        </div>
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['ShoppingCartAlerts']['CartProductsStock'] == true) checked @endif
                                                                    class="check_inp" hidden="" id="LimitCartProducts"
                                                                    name="LimitCartProducts">
                                                                <label for="LimitCartProducts" class="text_md">Te
                                                                    anuntam cand produsul din cos
                                                                    are stoc limitat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accord_wrap ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFavoriteProductAlerts">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFavoriteProductAlerts"
                                                        aria-expanded="false" aria-controls="collapseFavoriteProductAlerts">
                                                        Alerte produse favorite
                                                    </button>
                                                </h2>
                                                <div id="collapseFavoriteProductAlerts" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFavoriteProductAlerts"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body text_md">
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['FavoriteAlerts']['StockFavoriteProductsNotification'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="StockProductsNotification"
                                                                    name="StockProductsNotification">
                                                                <label for="StockProductsNotification" class="text_md">Te
                                                                    anuntam despre modificarile
                                                                    de
                                                                    stoc pentru produsul favorit</label>
                                                            </div>
                                                        </div>
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['FavoriteAlerts']['RecomandedSealProductsNotification'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="recommendedSealedProducts"
                                                                    name="recommendedSealedProducts">
                                                                <label for="recommendedSealedProducts" class="text_md">Iti
                                                                    recomandam varianta
                                                                    resigilata
                                                                    a produsului favorit</label>
                                                            </div>
                                                        </div>
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['FavoriteAlerts']['DiscountPriceProductsNotification'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="FavoritProductsPriceNotification"
                                                                    name="FavoritProductsPriceNotification">
                                                                <label for="FavoritProductsPriceNotification"
                                                                    class="text_md">Te anuntam cand produsul
                                                                    favorit
                                                                    are un pret mai bun</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accord_wrap ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingPersonalizedRecommendations">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapsePersonalizedRecommendations"
                                                        aria-expanded="false"
                                                        aria-controls="collapsePersonalizedRecommendations">
                                                        Recomandari personalizate
                                                    </button>
                                                </h2>
                                                <div id="collapsePersonalizedRecommendations"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="headingPersonalizedRecommendations"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body text_md">
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['PersonalizedRecommendations']['promotionsRecomandedNotification'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="RecomandedMatchOrdersNotification"
                                                                    name="RecomandedMatchOrdersNotification">
                                                                <label for="RecomandedMatchOrdersNotification"
                                                                    class="text_md">Iti recomandam promotii
                                                                    potrivite
                                                                    ultimei tale comenzi</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accord_wrap ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingYourOffersOfInterest">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseYourOffersOfInterest"
                                                        aria-expanded="false"
                                                        aria-controls="collapseYourOffersOfInterest">
                                                        Ofertele tale de interes
                                                    </button>
                                                </h2>
                                                <div id="collapseYourOffersOfInterest" class="accordion-collapse collapse"
                                                    aria-labelledby="headingYourOffersOfInterest"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body text_md">
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['YourOffersOfInterest']['recommendProductsAfterVisit'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="RecomandedLastVisitNotification"
                                                                    name="RecomandedLastVisitNotification">
                                                                <label for="RecomandedLastVisitNotification"
                                                                    class="text_md">Iti recomandam produsele
                                                                    potrivite
                                                                    in urma vizitei tale</label>
                                                            </div>
                                                        </div>
                                                        <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                                            <div class="custom_check check_2 d-flex align-items-center"
                                                                bis_skin_checked="1">
                                                                <input type="checkbox"
                                                                    @if (json_decode($UserSettings->config, true)['YourOffersOfInterest']['LowerPriceProductsNotify'] == true) checked @endif
                                                                    class="check_inp" hidden=""
                                                                    id="RecomandedDiscountPriceNotification"
                                                                    name="RecomandedDiscountPriceNotification">
                                                                <label for="RecomandedDiscountPriceNotification"
                                                                    class="text_md">Te anuntam cand scade pretul
                                                                    produsului care te intereseaza</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="default_btn">Salveaza</button>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
