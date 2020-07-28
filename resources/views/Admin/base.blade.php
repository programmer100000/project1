<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Plugins css -->
        <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/css/bootstrap-modern-dark.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app-modern-dark-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('/fonts/css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- icons -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        @yield('head')
    </head>
    @yield('body')
</html>
