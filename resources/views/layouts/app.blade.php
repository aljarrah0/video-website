<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/frontend/img//apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/frontend/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="./assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/frontend/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/frontend/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    @include('layouts.nav')
    <!-- End Navbar -->

    <div class="main">
        @yield('content')
        @include('layouts.footer')

        <!--   Core JS Files   -->
        <script src="./assets/frontend/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/frontend/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="./assets/frontend/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="./assets/frontend/js/plugins/moment.min.js"></script>
        <script src="./assets/frontend/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/frontend/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
        <script>
            $(document).ready(function() {

                if ($("#datetimepicker").length != 0) {
                    $('#datetimepicker').datetimepicker({
                        icons: {
                            time: "fa fa-clock-o",
                            date: "fa fa-calendar",
                            up: "fa fa-chevron-up",
                            down: "fa fa-chevron-down",
                            previous: 'fa fa-chevron-left',
                            next: 'fa fa-chevron-right',
                            today: 'fa fa-screenshot',
                            clear: 'fa fa-trash',
                            close: 'fa fa-remove'
                        }
                    });
                }

                function scrollToDownload() {

                    if ($('.section-download').length != 0) {
                        $("html, body").animate({
                            scrollTop: $('.section-download').offset().top
                        }, 1000);
                    }
                }
            });
        </script>
</body>

</html>
