@extends('layouts.body')
@section('content')
    <div class="cart_area section_padding_b" @if (!Auth::Check() or empty(session('cart'))) style="height: 50vh" @endif>
        <div class="container">
            @empty(!session('cart'))
                @if (Auth::Check())
                    <!-- payment methods -->
                    <form action="/AddDelivery" method="POST">
                        @csrf
                        <style>
                            .payment_method_options .custom_check.radio .check_inp:checked+label:after {
                                background-image: url(../images/radio.png);
                            }

                            .payment_method_options .custom_check.radio .check_inp:checked+label:after {
                                border: none;
                                background-image: url(../images/check.png);
                            }

                            .payment_method_options .custom_check.radio label:after {
                                border: none;
                                background-image: url(../images/radio-empty.png);
                            }
                        </style>
                        <div class="payment_method_options">
                            @if (in_array('credit_card', explode(',', $website_config->payment_methods)))
                                <div class="custom_check radio mb-4" style="margin-left: 15px;">
                                    <input type="radio" class="check_inp" name="payment" checked value="credit_card" hidden=""
                                        id="credit_card">
                                    <label class="text_md" for="credit_card">

                                        <div class="single_payment_method active" data-target=".credit_card">
                                            <div class="sp_img">
                                                <img loading="lazy" src="{{ asset('assets/images/payments/credit-card.png') }}"
                                                    alt="credit card">
                                            </div>
                                            <p class="sp_text">Credit Card</p>

                                        </div>
                                    </label>
                                </div>
                            @endif
                            @if (in_array('paypal', explode(',', $website_config->payment_methods)))
                                <div class="custom_check radio mb-4" style="margin-left: 15px;">
                                    <input type="radio" class="check_inp" name="payment" value="paypal" hidden=""
                                        id="paypal">
                                    <label class="text_md" for="paypal">

                                        <div class="single_payment_method" data-target=".pay_pal">
                                            <div class="sp_img">
                                                <img loading="lazy" src="{{ asset('assets/images/payments/paypal.png') }}"
                                                    alt="credit card">
                                            </div>
                                            <p class="sp_text">paypal</p>

                                        </div>
                                    </label>
                                </div>
                            @endif
                            @if (in_array('cash_on_delivery', explode(',', $website_config->payment_methods)))
                                <div class="custom_check radio mb-4">
                                    <input type="radio" class="check_inp" name="payment" value="cash_on_delivery" hidden=""
                                        id="CashOnDelivery">
                                    <label class="text_md" for="CashOnDelivery">

                                        <div class="single_payment_method">
                                            <div class="sp_img">
                                                <img loading="lazy" src="{{ asset('assets/images/payments/cash-on.png') }}"
                                                    alt="credit card">
                                            </div>
                                            <p class="sp_text">Cash on Delivery</p>

                                        </div>
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            @if (!empty($addresses))
                                <div class="col-lg-12">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title">
                                            <h4>Adresa de transport</h4>
                                        </div>
                                        <style>
                                            .prfo_info_cont ul li {
                                                display: flex;
                                                align-items: center;
                                                gap: 20px;
                                                border-bottom: 1px dotted gray;
                                                padding: 10px;
                                            }

                                            .prfo_info_cont ul li .info {
                                                display: flex;
                                                flex-direction: column;
                                            }


                                            .prfo_info_cont ul li .action {
                                                display: flex;
                                                align-items: center;
                                            }
                                        </style>
                                        <div class="prfo_info_cont">
                                            <ul>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($addresses as $adress)
                                                    @php $i++; @endphp
                                                    <li>
                                                        <div class="action">
                                                            <div class="custom_check radio mb-4" style="margin-left: 15px;">
                                                                <input type="radio" class="check_inp" name="adress_id"
                                                                    value="{{ $adress->id }}" hidden=""
                                                                    id="{{ $adress->id }}">
                                                                <label class="text_md" for="{{ $adress->id }}"></label>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <span>{{ $adress->full_name }} - {{ $adress->phone_number }}</span>
                                                            <span>{{ $adress->address_line_1 }} - {{ $adress->city }},
                                                                {{ $adress->county }}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                @if ($i == 0)
                                                    <span>Contul tau nu are salvata o adresa de livrare. Te rugam adauga o
                                                        adresa noua.</span>
                                                @endif
                                            </ul>
                                            <br>
                                            <span id="addAdress" class="default_btn">adauga</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    @if (in_array('credit_card', explode(',', $website_config->payment_methods)))
                                        <div class="payment_methods credit_card active">
                                            <div class="payment_method_title">
                                                <h4>Credit Card</h4>
                                                <div class="payment_method_img">
                                                    <div class="d-flex credit_crd">
                                                        <img loading="lazy"
                                                            src="{{ asset('assets/images/payments/payment-visa.png') }}"
                                                            alt="Visa card">
                                                        <img loading="lazy"
                                                            src="{{ asset('assets/images/payments/payment-master.png') }}"
                                                            alt="Master card">
                                                        <img loading="lazy"
                                                            src="{{ asset('assets/images/payments/payment-express.png') }}"
                                                            alt="American express">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single_billing_inp">
                                                        <label for="company_name">Card Number <span>*</span></label>
                                                        <input type="text" id="company_name">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single_billing_inp">
                                                        <label for="county_region">Name on Card <span>*</span></label>
                                                        <input type="text" id="county_region">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single_billing_inp">
                                                        <label for="first_name">Expiration Date <span>*</span></label>
                                                        <input type="text" class="" id="first_name"
                                                            placeholder="MM/YY">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single_billing_inp">
                                                        <label for="last_name">CVV <span>*</span></label>
                                                        <input type="text" class="" id="last_name">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <button class="default_btn rounded">Pay Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (in_array('paypal', explode(',', $website_config->payment_methods)))
                                        <div class="payment_methods pay_pal">
                                            <div class="payment_method_title">
                                                <h4>Paypal</h4>
                                                <div class="payment_method_img">
                                                    <div class="d-flex">
                                                        <img loading="lazy"
                                                            src="{{ asset('assets/images/payments/paypal.png') }}"
                                                            alt="paypal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <p>Payment using your paypal</p>
                                                <button class="default_btn rounded">Pay Now</button>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="col-lg-12 mb-4">

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="payment_methods credit_card active">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="single_billing_inp">
                                                            <label for="LastNameAndFirstName">Nume Si Prenume
                                                                <span>*</span></label>
                                                            <input type="text"
                                                                class="@error('LastNameAndFirstName') is-invalid @enderror"
                                                                name="LastNameAndFirstName" id="LastNameAndFirstName">
                                                            @error('LastNameAndFirstName')
                                                                <span class="invalid-feedback">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="single_billing_inp">
                                                            <label for="PhoneNumber">Telefon <span>*</span></label>
                                                            <input type="text"
                                                                class="@error('PhoneNumber') is-invalid @enderror"
                                                                name="PhoneNumber" id="PhoneNumber">
                                                            @error('PhoneNumber')
                                                                <span class="invalid-feedback">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single_billing_inp">
                                                            <label for="County">Judet <span>*</span></label>
                                                            <input type="text"
                                                                class="@error('County') is-invalid @enderror" name="County"
                                                                id="County">
                                                            @error('County')
                                                                <span class="invalid-feedback">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single_billing_inp">
                                                            <label for="local">Localitate <span>*</span></label>
                                                            <input type="text" class="@error('local') is-invalid @enderror"
                                                                name="local" id="local">
                                                            @error('local')
                                                                <span class="invalid-feedback">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="single_billing_inp">
                                                            <label for="last_name">Adresa <span>*</span></label>
                                                            <input type="text"
                                                                class="@error('Adress') is-invalid @enderror" name="Adress"
                                                                id="Adress">
                                                            @error('Adress')
                                                                <span class="invalid-feedback">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-12">
                                {{-- <h4 class="shop_cart_title ps-4">Your order</h4> --}}
                                <div class="checkout_order">
                                    <h4>Produse</h4>
                                @empty(!$CartProducts)
                                    @foreach ($CartProducts as $Product)
                                        <div class="single_check_order">
                                            <div class="checkorder_cont">
                                                <h5>{{ $Product->Title }}</h5>
                                                {{-- <p>Size: M</p> --}}
                                            </div>
                                            <p class="checkorder_qnty">x
                                                @php
                                                    foreach (session('cart') as $item) {
                                                        if ($item['id'] == $Product->id) {
                                                            echo $item['quantity'];
                                                        }
                                                    }
                                                @endphp</p>
                                            <p class="checkorder_price">{{ $Product->price }} RON</p>
                                        </div>
                                    @endforeach
                                @endempty
                            </div>
                        </div>
                        <div class="col-lg-12">
                            {{-- <h4 class="shop_cart_title ps-4">Your order</h4> --}}
                            <div class="checkout_order">
                                <h4>Comanda</h4>
                                <div class="single_check_order subs">
                                    <div class="checkorder_cont subtotal-h">
                                        <h5>Livrare</h5>
                                    </div>
                                    <p class="checkorder_price">
                                        @if ($OrderData['ProductCost'] >= 200)
                                            Gratuita
                                        @else
                                            {{ $OrderData['DeliveryCost'] }} RON
                                        @endif
                                    </p>
                                </div>
                                <div class="single_check_order subs">
                                    <div class="checkorder_cont subtotal-h">
                                        <h5>Subtotal</h5>
                                    </div>
                                    <p class="checkorder_price">{{ $OrderData['ProductCost'] }} RON</p>
                                </div>
                                <div class="single_check_order total">
                                    <div class="checkorder_cont">
                                        <h5>Total</h5>
                                    </div>
                                    <p class="checkorder_price">{{ $OrderData['Total'] }} RON</p>
                                </div>
                                @if (empty(auth()->user()->name) &&
                                        empty(auth()->user()->Phone) &&
                                        empty(auth()->user()->County) &&
                                        empty(auth()->user()->Local) &&
                                        empty(auth()->user()->adress))
                                    <div class="col-lg-12">
                                        <div class="d-flex">
                                            <label for="RemberData">Retine Datele</label>
                                            <input type="checkbox" style="margin-left: 10px;" name="RemberData"
                                                id="RemberData">
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <button type="submit" class="default_btn rounded">Trimite Comanda</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <div class="alert alert-danger" role="alert">
                    Te Rugam Sa Te Conectezi La Un Cont Existent Pentru a Plasa Comanda <a
                        href="{{ route('login') }}">logheazate
                        aici</a>
                </div>
            @endif
        @endempty
        @empty(session('cart'))
            <div class="alert alert-info" role="alert">
                Cosul tau de cumparaturi nu contine produse. Pentru a adauga produse in cos te rugam <a href="/">sa
                    te intorci in magazin.</a>
            </div>
        @endempty
    </div>
</div>
<div class="popup_wrap">
    <div class="popup_container">
        <div class="popup_content" style="max-width: initial; text-align: initial;">
            <div class="close_popup">
                <i class="las la-times"></i>
            </div>
            <h4 class="text-uppercase" style="border-bottom: 1px dotted gray;">Adauga o noua adresa de livrare</h4>
            <p class="mb-3">Persoana de contact</p>
            <form action="{{ route('addAdress') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="single_billing_inp">
                            <label for="full_name">Nume Si Prenume
                                <span>*</span></label>
                            <input type="text" class="@error('full_name') is-invalid @enderror" name="full_name"
                                id="full_name">
                            @error('full_name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single_billing_inp">
                            <label for="PhoneNumber">Telefon <span>*</span></label>
                            <input type="text" class="@error('PhoneNumber') is-invalid @enderror"
                                name="PhoneNumber" id="PhoneNumber">
                            @error('PhoneNumber')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_billing_inp">
                            <label for="County">Judet <span>*</span></label>
                            <input type="text" class="@error('County') is-invalid @enderror" name="County"
                                id="County">
                            @error('County')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_billing_inp">
                            <label for="city">Localitate <span>*</span></label>
                            <input type="text" class="@error('city') is-invalid @enderror" name="city"
                                id="city">
                            @error('city')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single_billing_inp">
                            <label for="last_name">Adresa <span>*</span></label>
                            <input type="text" class="@error('Adress') is-invalid @enderror" name="Adress"
                                id="Adress">
                            @error('Adress')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-center">
                        <button type="submit" id="SaveAdress" class="default_btn rounded">Salveaza</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#addAdress').click(function() {
        $('.popup_wrap').addClass('active');
    });

    $('.close_popup').click(function() {
        $('.popup_wrap').removeClass('active');
    })
</script>
@endsection
