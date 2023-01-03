@extends('layouts.body')
@section('content')
    {{-- <div class="container">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                trimitem comenzi in toata romania
            </div>
        </div>
    </div> --}}
    <div class="cart_area section_padding_b" @if (!Auth::Check()) style="height: 50vh" @endif>
        <div class="container">
            @empty(!session('cart'))
                @if (Auth::Check())
                    <!-- payment methods -->
                    <form action="/AddDelivery" method="POST">
                        @csrf
                        <div class="row">
                            @if (!empty(auth()->user()->name) &&
                                !empty(auth()->user()->Phone) &&
                                !empty(auth()->user()->County) &&
                                !empty(auth()->user()->Local) &&
                                !empty(auth()->user()->adress))
                                <div class="col-lg-12">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title">
                                            <h4>Adresa de transport</h4>
                                            <a href="{{ route('ManageAdress') }}">Edit</a>
                                        </div>
                                        <div class="prfo_info_cont">
                                            <p class="text-semibold">{{ auth()->user()->name }}</p>
                                            <p>{{ auth()->user()->County }},{{ auth()->user()->Local }}</p>
                                            <p>{{ auth()->user()->adress }}</p>
                                            <p>{{ auth()->user()->Phone }}</p>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" class="d-none" name="LastNameAndFirstName" id="LastNameAndFirstName"
                                    value="{{ auth()->user()->name }}">
                                <input type="text" class="d-none" name="PhoneNumber" id="PhoneNumber"
                                    value="{{ auth()->user()->Phone }}">
                                <input type="text" class="d-none" name="County" id="County"
                                    value="{{ auth()->user()->County }}">
                                <input type="text" class="d-none" name="local" id="local"
                                    value="{{ auth()->user()->Local }}">
                                <input type="text" class="d-none" name="Adress" id="Adress"
                                    value="{{ auth()->user()->adress }}">
                            @else
                                <div class="col-lg-12 mb-4">
                                    {{-- <h4 class="shop_cart_title ps-4">Select payment method</h4>

                    <div class="payment_method_options">
                        <div class="single_payment_method active" data-target=".credit_card">
                            <div class="sp_img">
                                <img loading="lazy" src="assets/images/credit-card.png" alt="credit card">
                            </div>
                            <p class="sp_text">Credit Card</p>
                        </div>
                        <div class="single_payment_method" data-target=".pay_pal">
                            <div class="sp_img">
                                <img loading="lazy" src="assets/images/paypal.png" alt="paypal">
                            </div>
                            <p class="sp_text">Paypal</p>
                        </div>
                        <div class="single_payment_method" data-target=".cash_on">
                            <div class="sp_img">
                                <img loading="lazy" src="assets/images/cash-on.png" alt="cash on delivery">
                            </div>
                            <p class="sp_text">Cash on Delivery</p>
                        </div>
                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="payment_methods credit_card active">
                                                {{-- <div class="payment_method_title">
                                    <h4>Credit Card</h4>
                                    <div class="payment_method_img">
                                        <div class="d-flex credit_crd">
                                            <img loading="lazy" src="assets/images/payment-visa.png" alt="Visa card">
                                            <img loading="lazy" src="assets/images/payment-master.png" alt="Master card">
                                            <img loading="lazy" src="assets/images/payment-express.png"
                                                alt="American express">
                                        </div>
                                    </div>
                                </div> --}}

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
                                                            <input type="text" class="@error('County') is-invalid @enderror"
                                                                name="County" id="County">
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
                                                            <input type="text" class="@error('Adress') is-invalid @enderror"
                                                                name="Adress" id="Adress">
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
                                            <p class="checkorder_qnty">x1</p>
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
                                    <p class="checkorder_price">{{ $OrderData['DeliveryCost'] }} RON</p>
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
                        href="{{ route('login') }}">logheazate aici</a>
                </div>
            @endif
        @endempty
        @empty(session('cart'))
            <div class="alert alert-danger" role="alert">
                Pentru a plasa o comanda va rugam sa adaugati un produs in cosul dvs de cumparaturi <a href="/">adauga un produs in cosul de cumparaturi</a>
            </div>
        @endempty
    </div>
</div>
@endsection
