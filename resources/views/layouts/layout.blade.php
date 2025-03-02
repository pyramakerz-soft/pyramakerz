<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<style>
    [dir="rtl"] body {
        text-align: right !important;
        direction: rtl !important;
    }

    [dir="rtl"] h1,
    [dir="rtl"] h2,
    [dir="rtl"] h3,
    [dir="rtl"] h4,
    [dir="rtl"] p,
    [dir="rtl"] label,
    [dir="rtl"] input,
    [dir="rtl"] textarea,
    [dir="rtl"] button {
        text-align: right !important;
    }

    [dir="rtl"] .container,
    [dir="rtl"] .row,
    [dir="rtl"] .col-md-6,
    [dir="rtl"] .col-lg-6 {
        direction: rtl !important;
    }
</style>


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pyramakerz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.header')
    @yield('page_css')

</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')
    @yield('page_js')

</body>

</html>