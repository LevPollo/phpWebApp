<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">

    <link rel="icon" type="image/png" href="{{asset("images/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->

    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
<!-- Body Inner -->
<div class="body-inner ">
    <!-- Header -->

    <header id="header" data-fullwidth="true">
        <div class="header-inner  ">
            <div class="container">

                <!-- Search -->
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                            class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..."/>
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <!-- end: search -->
                <!--Header Extras-->
                <div class="header-extras ">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                        <li>
                            <div class="p-dropdown ">
                                <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                <ul class="p-dropdown-content">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger" class="">
                    <a class="lines-button "><span class="lines bg-light"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container ">
                        <nav>
                            <ul>
                                <li><a href="{{route('main')}}">Home</a></li>

                                <li class="dropdown "><a href="{{route('categoryAll')}}">Category</a>
                                    <ul class="dropdown-menu ">
                                        @foreach($setCategories as $category)

                                            <li><a href="{{route('category',$category->id)}}">{{$category->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                @if(auth()->check())
                                    <li><a href="{{ route('logout')}}">Logout</a></li>
                                    <li><a href="{{ route('profile')}}">Profile</a></li>
                                    <li><a href="{{ route('admin.dashboard')}}">Admin</a></li>
{{--                                    {{dd(Auth::user()->is_admin)}}--}}
{{--                                    @if(Auth::user()->is_adimin == 1)--}}
{{--                                        <li><a href="{{ route('admin')}}">Admin</a></li>--}}
{{--                                    @endif--}}
                                @else
                                    <li><a href="{{ route('login')}}">Login</a></li>
                                @endif


                                {{--                                <li><a href="{{route('profile')}}">Profile</a></li>--}}
                                {{--                                <li><a href="{{route('login')}}">Login</a></li>--}}


                            </ul>
                        </nav>
                    </div>
                </div>
                <!--END: NAVIGATION-->
            </div>
        </div>
    </header>
    <!-- masonry
    ================================================== -->
    @yield('section')

    <footer id="footer "  class="m-50">

        <div class="footer-content ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <div class="widget-title">Polo HTML5 Template</div>
                            <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                All rights reserved. Copyright © 2019. INSPIRO.</p>
                            <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                               class="btn btn-inverted" target="_blank">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Discover</div>
                                    <ul class="list">
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Layouts</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Updates</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Customers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Features</div>
                                    <ul class="list">
                                        <li><a href="#">Layouts</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Widgets</a></li>
                                        <li><a href="#">Footers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Pages</div>
                                    <ul class="list">
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">Support</div>
                                    <ul class="list">
                                        <li><a href="#">Help Desk</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template. All
                    Rights Reserved.<a href="//www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a></div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<!--Template functions-->
<script src="{{asset('js/functions.js')}}"></script>


</body>

</html>
