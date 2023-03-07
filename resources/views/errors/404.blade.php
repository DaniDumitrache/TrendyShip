@extends('layouts.body')

@section('content')
    <!-- 404 page -->
    <div class="section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="page_nfwrap">
                        <div class="page_nfimg">
                            <img loading="lazy" src="{{ asset('assets/images/errors/404.svg') }}" class="w-100"
                                alt="page not found">
                        </div>
                        <div class="page_nfcont text-center mt-5">
                            <h4 class="mb-4">(404) Page Not Found</h4>
                            <a href="{{ route('home') }}" class="default_btn small rounded">back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
