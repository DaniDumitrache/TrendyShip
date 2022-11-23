@extends('layouts.body')
@section("content")
<!-- forgot password -->
<div class="section_padding mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
                <div class="padding_default shadow_sm">
                    <h2 class="title_2">reset password</h2>
                    <p class="text_md mb-4">Please enter your email address below to receive a link.</p>
                    <div class="single_billing_inp mb-0">
                        <label>Email Address <span>*</span></label>
                        <input type="email" placeholder="example@gmail.com">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="default_btn rounded small">reset my password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection