<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@if (!empty($website_config->meta_description)) {{ $website_config->meta_description }} @endif">
    <meta name="keywords" content="@if (!empty($website_config->meta_keywords)) {{ $website_config->meta_keywords }} @endif">
    {{-- <meta name="url" content="https://danid.rf.gd"> --}}
    <meta property="ya:ovs:allow_embed" content="true">
    <meta name="author" content="Dani Dumitrache">
    <meta name="theme-color" content="#fff" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh">
    <meta name="robots" content="follow, index" />
    <title>
        @if (!empty($website_config->meta_title))
            {{ $website_config->meta_title }}
        @endif
    </title>
    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css"
        integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeLZU2KVMg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"
        integrity="sha512-N8cG1PEkjalKX3sQKjGBR0MvihqzB6UoKjkt4+IzWQEJQbze9AHuGjJroViI+AWPIAvKxNx/N+LlLJNv/OAWXA=="
        crossorigin="anonymous"></script>


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
<!-- all js -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/app.js') }}"></script>

</html>
