<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="{{route('main')}}">Author</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li class="{{$currents['/']}}"><a href="{{route('main')}}" title="">Home</a></li>
                <li class="has-children {{$currents['/category']}}">
                    <a href="{{route('category')}}" title="">Categories</a>
                    <ul class="sub-menu">
                        @foreach($categories as $category)
                            <li><a href="{{route('category')}}">{{$category->name}}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="{{$currents['/about']}}"><a href="{{route('about')}}"  title="">About</a></li>
                <li class="{{$currents['/contact']}}"><a href="{{route('contact')}}" title="">Contact</a></li>
            </ul>
        </nav> <!-- end main-nav-wrap -->

        <div class="search-wrap">

            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers">
            <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

</header> <!-- end header -->
