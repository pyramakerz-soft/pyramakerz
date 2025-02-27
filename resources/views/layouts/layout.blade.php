<!DOCTYPE html>
<html lang="en">

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