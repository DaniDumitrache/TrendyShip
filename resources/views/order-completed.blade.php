@extends('layouts.body')
@section("content")
<!-- order complete -->
<div class="cart_area section_padding_b">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="order_complete">
                            <div class="complete_icon">
                                <img loading="lazy" src="assets/images/complete.png" alt="success">
                            </div>
                            <div class="order_complete_content">
                                <h4>Your order is completed!</h4>
                                <p>Thank you for your order! Your order is being processed and will be completed within
                                    3-6 hours.
                                    You will receive an email confirmation when your order is completed.</p>
                                <div class="order_complete_btn">
                                    <a href="shop-grid.html" class="default_btn rounded">continue shopping</a>
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