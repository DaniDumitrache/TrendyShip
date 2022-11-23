@extends('layouts.body')

@section("content")
<!-- track order -->
<div class="track_orders section_padding_b">
    <div class="container">
        <div class="padding_default shadow_sm">
            <h2 class="title_2 mb-4">Order Tracking</h2>
            <form action="">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="single_billing_inp">
                            <label for="first_name">Order ID <span>*</span></label>
                            <input type="text" id="first_name">
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <button type="submit" class="default_btn xs_btn rounded px-4">track order</button>
                    </div>
                </div>
            </form>

            <div class="mt-4 pt-2 track_status">
                <h4 class="title_3 text-uppercase">delivered</h4>
                <div class="track_path">
                    <div class="single_track">
                        <h5 class="text_lg">01. Order Placement</h5>
                        <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                    </div>
                    <div class="single_track">
                        <h5 class="text_lg">02. Processing</h5>
                        <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                    </div>
                    <div class="single_track">
                        <h5 class="text_lg">03. Shipping</h5>
                        <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                    </div>
                    <div class="single_track pending">
                        <h5 class="text_lg">04. delivery</h5>
                        <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection