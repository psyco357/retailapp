<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
    <title>Document</title>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layout.header')
            @include('admin.layout.sidebar')
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>
    {{-- </div>
    </div> --}}

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/admin/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/admin/modules/sticky-kit.js') }}"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

</body>

</html>
