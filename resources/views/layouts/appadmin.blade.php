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
    <link href="{{ asset('css/new.css') }}" rel="stylesheet">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>


<body class="left-sidebar-fixed header-fixed">
        <!--header start-->
        <header class="app-header ">
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
        </header>
        <!--header end-->

        <div class="app-body">
            <!--left sidebar start-->
            <div class="left-nav-wrap">
                <div class="left-sidebar">
                    <nav class="sidebar-menu">
                        <ul id="nav-accordion">
                            <li class="sub-menu">
                                <a href="#">
                                    <span>Welcome,  {{ Auth::user()->name }} </span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="{{route('admin.index')}}">
                                    <i class="fas fa-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="nav-title">
                                <h5 class="text-uppercase">Components</h5>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fas fa-chart-area"></i>
                                    <span>Areas</span>
                                </a>
                                <ul class="sub">
                                    <li class="sub-menu">
                                    <a  href="{{route('admin.area.index')}}">Show All</a>
                                    </li>

                                    <li class="sub-menu">
                                        <a  href="{{route('admin.area.create')}}">Create</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fab fa-discourse"></i>
                                    <span>Courses</span>
                                </a>
                                <ul class="sub">
                                    <li class="sub-menu">
                                        <a  href="{{route('admin.course.index')}}">Show All</a>
                                    </li>

                                    <li class="sub-menu">
                                        <a  href="{{route('admin.course.create')}}">Create</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                    <i class="fas fa-flask"></i>
                                    <span>Laboratories</span>
                                </a>
                                <ul class="sub">
                                    <li class="sub-menu">
                                        <a  href="{{route('admin.laboratory.index')}}">Show All</a>
                                    </li>

                                    <li class="sub-menu">
                                        <a  href="{{route('admin.laboratory.create')}}">Create</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;">
                                   <i class="fas fa-shopping-cart"></i>
                                    <span>Products</span>
                                </a>
                                <ul class="sub">
                                    <li class="sub-menu">
                                        <a  href="{{route('admin.product.index')}}">Show All</a>
                                    </li>

                                    <li class="sub-menu">
                                        <a  href="{{route('admin.product.create')}}">Create</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">
                                <h5 class="text-uppercase">Link Home</h5>
                            </li>

                            <li class="sub-menu">
                                <a href="{{url('simulation')}}"  class="">
                                    <i class="fas fa-clipboard-list"></i>
                                    <span>Simulation</span>
                                </a>
                            </li>

                            <li class="sub-menu">
                                    <a href="{{url('courses')}}"  class="">
                                    <i class="fas fa-newspaper"></i>
                                    <span>Courses</span>
                                </a>
                            </li>

                            <li class="sub-menu">
                                    <a href="{{url('laboratories')}}"  class="">
                                    <i class="fas fa-vial"></i>
                                    <span>Laboratories</span>
                                </a>
                            </li>

                            <li class="sub-menu">
                                    <a href="{{url('products')}}"  class="">
                                    <i class="fas fa-dolly"></i>
                                    <span>Products</span>
                                </a>
                            </li>
                            <li class="nav-title">
                                    <h5 class="text-uppercase">Administrator</h5>
                                </li>
                                <li class="sub-menu">
                                    <a href="javascript:;">
                                        <i class="fas fa-user"></i>
                                        <span>Profile</span>
                                    </a>
                                    <ul class="sub">
                                        <li class="sub-menu">
                                            <a  href="#">Profile</a>
                                        </li>
                                        <li class="sub-menu">
                                        <a  href="{{route('register')}}">New User</a>
                                        </li>
                                    </ul>
                                <li class="sub-menu">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off"></i>
                                        <span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--left sidebar end-->
            <!--main content wrapper-->
            <div class="content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
</body>
</html>
