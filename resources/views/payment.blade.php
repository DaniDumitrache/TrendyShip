@extends('layouts.body')
@section('content')
    <!-- payment methods -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <h4 class="shop_cart_title ps-4">Select payment method</h4>

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
                    </div>
                    <div class="row">
                        <div class="col-xl-10">

                            <div class="payment_methods credit_card active">
                                <div class="payment_method_title">
                                    <h4>Credit Card</h4>
                                    <div class="payment_method_img">
                                        <div class="d-flex credit_crd">
                                            <img loading="lazy" src="assets/images/payment-visa.png" alt="Visa card">
                                            <img loading="lazy" src="assets/images/payment-master.png" alt="Master card">
                                            <img loading="lazy" src="assets/images/payment-express.png"
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
                                            <input type="text" class="" id="first_name" placeholder="MM/YY">
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

                            <div class="payment_methods pay_pal">
                                <div class="payment_method_title">
                                    <h4>Paypal</h4>
                                    <div class="payment_method_img">
                                        <div class="d-flex">
                                            <img loading="lazy" src="assets/images/paypal.png" alt="paypal">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <p>Payment using your paypal</p>
                                    <button class="default_btn rounded">Pay Now</button>
                                </div>
                            </div>

                            <div class="payment_methods cash_on">
                                <div class="payment_method_title">
                                    <h4>Cash On delivery</h4>
                                    <div class="payment_method_img">
                                        <div class="d-flex">
                                            <img loading="lazy" src="assets/images/cash-on.png" alt="cash on delivery">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4 cash_on_text">
                                    <p>you can pay in cash to our courier
                                        when you receive the goods at your doorstep.</p>
                                    <button class="default_btn rounded">Confirm order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="shop_cart_title ps-4">Your order</h4>
                    <div class="checkout_order">
                        <h4>Order summary</h4>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Size: M</p>
                            </div>
                            <p class="checkorder_qnty">x1</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Color: Red</p>
                            </div>
                            <p class="checkorder_qnty">x2</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order">
                            <div class="checkorder_cont">
                                <h5>Beigh Knitted Shoes</h5>
                                <p>Size: M</p>
                            </div>
                            <p class="checkorder_qnty">x1</p>
                            <p class="checkorder_price">$84.00</p>
                        </div>
                        <div class="single_check_order subs">
                            <div class="checkorder_cont subtotal-h">
                                <h5>Subtotal</h5>
                            </div>
                            <p class="checkorder_price">$140.00</p>
                        </div>
                        <div class="single_check_order subs">
                            <div class="checkorder_cont subtotal-h">
                                <h5>Shipping</h5>
                            </div>
                            <p class="checkorder_price">Free</p>
                        </div>
                        <div class="single_check_order total">
                            <div class="checkorder_cont">
                                <h5>Total</h5>
                            </div>
                            <p class="checkorder_price">$140.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
