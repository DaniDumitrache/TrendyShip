@extends('layouts.body')
@section('content')
    <!-- contact form -->
    <div class="contact_form section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="billing_form padding_default shadow_sm">
                        <h4 class="title_2">Leave us a message</h4>
                        <p class="mb-4 text_md">Use the form below to get in touch with the sales team</p>
                        <div class="row">
                            <form action="/ContactSent" method="POST">
                                @csrf
                                <div class="col-lg-6">
                                    <div class="single_billing_inp">
                                        <label for="first_name">First Name <span>*</span></label>
                                        <input class="@error('FirstName') is-invalid @enderror" type="text"
                                            name="FirstName">
                                        @error('FirstName')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_billing_inp">
                                        <label for="last_name">Last Name <span>*</span></label>
                                        <input class="@error('LastName') is-invalid @enderror" type="text"
                                            name="LastName">
                                        @error('LastName')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label for="email_addr">Adresa De Email<span>*</span></label>
                                        <input class="@error('Email') is-invalid @enderror" type="text" name="Email">
                                        @error('Email')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label for="company_name">subiect</label>
                                        <input class="@error('Subject') is-invalid @enderror" type="text" name="Subject">
                                        @error('Subject')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label for="county_region">messajul tau <span>*</span></label>
                                        <textarea class="@error('message') is-invalid @enderror" type="text" name="message"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="default_btn xs_btn rounded px-4">send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-12 mt-4 mt-lg-0">
                    <div class="padding_default border-0 shadow_sm">
                        <h4 class="title_4">our store</h4>
                        <div class="footer_contact">
                            <p>
                                <span class="icn"><i class="las la-map-marker-alt"></i></span>
                                7895 Dr New Albuquerue, NM 19800, nited
                                States Of America
                            </p>
                            <p class="phn">
                                <span class="icn"><i class="las la-phone"></i></span>
                                +566 477 256, +566 254 575
                            </p>
                            <p class="eml">
                                <span class="icn"><i class="lar la-envelope"></i></span>
                                info@domain.com
                            </p>
                        </div>

                        <h4 class="title_4 mt-4">Hours of operation</h4>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Saturday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Sunday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Monday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Tuesday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Wednesday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="">Thursday</p>
                            <p class="">12:00 PM</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between mb-0">
                            <p class=" mb-0">Friday</p>
                            <p class=" mb-0">12:00 PM</p>
                        </div>

                        <h4 class="title_4 mt-4">Careers</h4>
                        <p class="text_md mb-0">If you are interesting in emplyment opportunities at RAFCARTs. Please
                            email us : <a href="#" class="text-color">contact@familiar.com</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
