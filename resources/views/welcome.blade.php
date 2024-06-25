<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/frontend/img//apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/frontend/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Kit by Creative Tim
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
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ route('frontend.landing') }}" rel="tooltip"
                    title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                    موقع لعرض الفيديوهات
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('login') }}"
                            target="_blank">
                            <p>تسجيل الدخول</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('logout') }}"
                            target="_blank">
                            <p>تسجيل خروج</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('login') }}"
                            target="_blank">
                            <p>إنشاء حساب جديد</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header section-dark" style="background-image: url('./assets/frontend/img/antoine-barres.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title">مقاطع الفيديو</h1>
                    <div class="fog-low">
                        <img src="./assets/frontend/img/fog-low.png" alt="">
                    </div>
                    <div class="fog-low right">
                        <img src="./assets/frontend/img/fog-low.png" alt="">
                    </div>
                </div>
                <h2 class="presentation-subtitle text-center">مدونة لعرض مقاطع الفيديو</h2>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('./assets/frontend/img/clouds.png'); "></div>
    </div>
    <div class="main">
        <div class="section pt-o" id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="card page-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="./assets/frontend/img/soroush-karimi.jpg"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Somewhere</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                            src="./assets/frontend/img/federico-beccari.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Somewhere else</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="./assets/frontend/img/joshua-stannard.jpg"
                                            alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Here it is</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control carousel-control-prev"
                                    href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control carousel-control-next"
                                    href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </span>
                    </div>
                </div>
            </div>
        </footer>
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
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
