<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Digital Market Place HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('build/assets/frontend/assets/images/logo/favicon-two.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/fontawesome-all.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/slick.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/magnific-popup.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/line-awesome.min.css') }}">
    <!-- Tabler Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.21.0/tabler-icons.min.css"
        integrity="sha512-XrgoTBs7P5YtpkeKqKOKkruURsawIaRrhe8QrcWeMnFeyRZiOcRNjBAX+AQeXOvx9/9fSY32dVct1PccRoCICQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('build/assets/frontend/assets/css/main.css') }}">

</head>
<body>

    {{-- @include('auth.frontend.layout.header') --}}

    @include('auth.frontend.home.section.header')

    <main class="change-gradient">
        <!-- ============================ Sale Offer Start =========================== -->
        @yield('content')
        <!-- ==================== Footer Start Here ==================== -->
        @include('auth.frontend.layout.footer')
        <!-- ==================== Footer End Here ==================== -->

    </main>

    <!-- Jquery js -->
    <script src="{{ asset('build/assets/frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('build/assets/frontend/assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- CountDown -->
    <script src="{{ asset('build/assets/frontend/assets/js/countdown.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('build/assets/frontend/assets/js/counterup.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('build/assets/frontend/assets/js/slick.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('build/assets/frontend/assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- apex chart -->
    <script src="{{ asset('build/assets/frontend/assets/js/apexchart.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('build/assets/frontend/assets/js/marquee.min.js') }}"></script>
    <!-- infinite slide  -->
    <script src="{{ asset('build/assets/frontend/assets/js/infiniteslidev2.js') }}"></script>
    <!-- select 2  -->
    <script src="{{ asset('build/assets/frontend/assets/js/select2.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('build/assets/frontend/assets/js/main.js') }}"></script>


</body>

</html>
