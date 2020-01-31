<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Ecommerce Project')</title>

    <!-- CSS -->
    @include('frontend.partials.styles')
    <!-- End CSS -->
</head>
<body>
    <div class="wrapper">
        <!-- Start Navigation -->
        @include('frontend.partials.nav')
        <!-- End Navigation -->
        @include('frontend.partials.messages')
        <!-- Content -->

        @yield('content')

        <!-- End Content -->

        <!-- Footer -->
        @include('frontend.partials.footer')
        <!-- End Footer -->
    </div>

    <!-- JS-->
    @include('frontend.partials.scripts')
    <!-- End Js -->
    @yield('scripts')
</body>
</html>