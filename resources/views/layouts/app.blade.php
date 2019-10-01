<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Book Digital LBK') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9e77ef6170.js" crossorigin="anonymous"></script>



    <!-- Fonts -->
    <!--web fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newguest.css') }}" rel="stylesheet">
</head>


<body class="fixed-nav top-nav header-fixed">
        <!--header start-->
        <header class="app-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
            <div class="branding-wrap text-white">
                <!--left nav toggler start-->
                <a class="nav-link mt-2 float-left js_left-nav-toggler pos-fixed" href="javaScript:;">
                    <i class="fab fa-elementor fa-1x"></i>
                </a>
                <!--left nav toggler end-->

                <!--brand start-->
                <div class="navbar-brand pos-fixed ">
                    <a class="" href="{{route('admin.index')}}">
                        <!--<img src="assets/img/logo.png" srcset="assets/img/logo@2x.jpg 2x" alt="CodeLab">-->
                        {{ config('app.name', 'Book Digital LBK') }}
                    </a>
                </div>
                <!--brand end-->
            </div>

                        <!--top mega menu start-->
                        <nav id="tb-menu">
                            <!--start responsive nav toggle button-->
                            <div class="nav-btn">
                                <span class="bars"></span>
                            </div>
                            <!--end responsive nav toggle button-->
                            <!--start tbmenu-->
                            <ul id="menu" class="tbmenu light-sub-menu slide-effect">
                               <!-- <li class="active"><a href="#"> Dashboard</a>-->
                                </li>
                                <li class="active"><a href="{{route('simulation')}}"> Simulation</a>
                                </li>
                                <li class="active"><a href="{{route('courses')}}"> Courses</a>
                                </li>
                                <li class="active"><a href="{{route('laboratories')}}"> Laboratories</a>
                                </li>
                                <li class="active"><a href="{{route('products')}}"> Products</a>
                                </li>
                            </ul>
                            <!--end tbmenu-->
                        </nav>
                        <!--top mega menu end-->
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        <div class="app-body">
            <!--main content wrapper-->
                <!--main content wrapper-->
                <div class="content-wrapper">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                <!--/main content wrapper-->

                <!--footer
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Copyright &copy; Book Digital LBK 2019 | </small>
                        </div>
                    </div>
                </footer>
                -->
        </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
</body>
</html>
