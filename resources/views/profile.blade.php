@extends('layouts.app')
@section('section')


{{--    {{dd($users->find(100)->permission)}}--}}
{{--    {{dd(Auth::user()->permission)}}--}}
    <div class="">
    <section id="page-title" class="">
        <div class="container ">
            <div class="page-title">
                <h1>{{Auth::user()->user_permission->is_admin}}</h1>
                <h1>Profile</h1>
                <span>Good day {{Auth::user()->name}}</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Content -->
    <section id="page-content" class="">
        <div class="container">
            <!-- grid layout -->
        <div class="grid-layout grid-3-columns" data-item="grid-item" data-margin="10">

                <div class="grid-item">
                    <!-- Mini gallery-->
                    <div class="widget widget-gallery p-cb ">
                        <h4 class="widget-title">My Posts</h4>
{{--                        {{dd(Auth::user()->news)}}--}}
                        <div data-lightbox="gallery">
                            @foreach(Auth::user()->posts as $post)

                                <a href="{{route('post',$post->id)}}" >
                                    <img alt="image" src="{{asset($post->image)}}">
                                </a>
                            @endforeach


                        </div>
                    </div>
                    <!-- end: mini gallery -->
                </div>

                <div class="grid-item">
                    <!-- Widget My Account -->
                    <div class="widget widget-myaccount p-cb">
                        <div class="d-block">

                            <img class="avatar avatar-lg" src=
                                @if(Auth::user()->information) {{Auth::user()->information->avatar}}
                                @else {{asset('images/users_images/not_found_user/avatar/1.PNG')}}
                                 @endif>
                        </div>
                        <span>Juna Doe</span>
                        <p class="text-muted">Professional developer</p>
                        <ul class="text-center">
                            <li><a href="{{route('profile_change')}}"><i class="icon-user"></i>Change profile</a></li>
                            <li><a href="#"><i class="icon-clock"></i>Activity logs//in developing</a></li>
                            <li><a href="#"><i class="icon-mail"></i>Messages//in developing</a></li>
                            <li><a href="#"><i class="icon-settings"></i>Settings//in developing</a></li>
                            <li><a href="{{route('logout')}}"><i class="icon-log-out"></i>Sing Out</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end: Widget My Account -->
                </div>
                <div class="grid-item">
                    <!-- Widget Notifications -->
                    <div class="widget widget-notification p-cb">
                        <h4 class="mb-0">Notifications</h4>
                        <p class="text-muted">You have 2 new notifications</p>
                        <div class="notification-item notification-new">
                            <div class="notification-image"> <a href="#"><img src="images/shop/products/10.jpg"></a></div>
                            <div class="notification-meta">
                                <a href="#">New order just placed</a>
                                <span>18:20</span>
                            </div>
                        </div>
                        <div class="notification-item notification-new">
                            <div class="notification-image"> <a href="#"><img src="images/shop/products/11.jpg"></a></div>
                            <div class="notification-meta">
                                <a href="#">New account is created</a>
                                <span>22:03</span>
                            </div>
                        </div>
                        <div class="notification-item">
                            <div class="notification-image"> <a href="#"><img src="images/shop/products/10.jpg"></a></div>
                            <div class="notification-meta">
                                <a href="#">Server Backup is finished successfully</a>
                                <span>14:12</span>
                            </div>
                        </div>
                        <div class="notification-item">
                            <div class="notification-image"> <a href="#"><img src="images/shop/products/11.jpg"></a></div>
                            <div class="notification-meta">
                                <a href="#">Failed to import document file</a>
                                <span>11:03</span>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class="text-theme">See all notifications</a>
                    </div>
                    <!-- end: Widget Notifications -->
                </div>







                <div class="grid-item">
                    <!--Contact us-->

                    <div class="widget clearfix widget-contact-us p-cb" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                        <h4 class="widget-title"><Contact></Contact></h4>
                        <ul class="list-icon">
                            <li><i class="icon-map-pin"></i>
                                <strong>Address:</strong> 121 King Street, Melbourne <br>
                                Victoria 3000 Australia</li>
                            <li><i class="icon-phone"></i><strong>Phone:</strong> (123) 456-7890 </li>
                            <li><i class="icon-mail"></i><strong>Email:</strong> <a href="mailto:first.last@example.com">first.last@example.com</a>
                            </li>
                            <li><i class="icon-clock"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                <br>Saturday, Sunday: <strong>Closed</strong>
                            </li>
                        </ul>
                    </div>
                    <!--End: Contact us-->
                </div>



                <div class="grid-item">
                    <!--Tabs with Posts-->
                    <div class="widget  p-cb">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/5.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">A true story, that never been told!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/6.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/7.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/6.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/7.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/8.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">New costs and rise of the economy!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/7.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/8.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">New costs and rise of the economy!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="images/blog/thumbnail/6.jpg">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End: Tabs with Posts-->
                </div>

                <div class="grid-item">
                    <div class="widget widget-shop p-cb">
                        <h4 class="widget-title">Latest News</h4>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/10.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/6.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/7.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end: grid layout -->
        </div>
    </section>
    </div>
@endsection
