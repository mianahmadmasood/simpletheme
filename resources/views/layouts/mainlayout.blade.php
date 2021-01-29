<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Admin QEP</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('layouts.css')

</head>

<body>

    <div class="offcanvas-overlay"></div>
    <div class="wrapper">
        @include('layouts.header')
        <div class="main-wrapper">
            @include('layouts.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.js')

</body>

</html>
