<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAFCART - Multipurpose eCommerce HTML Template">
    <meta name="author" content="Programming Kit">
    <title>NordPc</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
<!-- all js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/app.js"></script>

</html>
