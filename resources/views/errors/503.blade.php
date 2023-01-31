@section('message', __('Sorry, the page you are looking for could not be found.'))
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<!-- 404 page -->
<div class="section_padding_b d-flex justify-content-center align-items-center d-flex h-100">
    <div class="container" style="height: 50vh;">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-12">
                <div class="page_nfwrap">
                    <div class="page_nfimg">
                        <img loading="lazy" src="{{asset('assets/images/errors/maintenance.gif')}}" class="w-100" alt="page not found">
                    </div>
                    <div class="page_nfcont text-center mt-5">
                        <h4 class="mb-4">Site-ul nostru se actualizeaza pentru o experienta mai buna</h4>
                        <p>Ne cerem scuze pentru orice inconvenient, dar lucram la imbunatatirea site-ului nostru
                            pentru
                            a va oferi o experienta mai buna. Va rugam sa reveniti mai tarziu. Vă mulțumim pentru
                            înțelegere.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
