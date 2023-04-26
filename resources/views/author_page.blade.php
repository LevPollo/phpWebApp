@extends("layouts.app")
@section("section")
        <!-- Content -->

        <!-- Articles -->
        <section id="page-content">

            <div class="container">
                <!-- post content -->
                <!-- Page title -->
                <!--Subscribe Form-->

                <form class="row" method="POST" action="/author/sub/{{$author->id}}">
                    @csrf
                    <div class="col-lg-12">
                        <div class="card text-center">
                            <div class="card-header">
                                {{$author->name}}
                            </div>
                            <div class="card-body">
                                <form class="row" method="POST" action="/author/sub/{{$author->id}}">
                                    @csrf
                                    <h5 class="card-title">About Author</h5>
                                    <p class="card-text">Some text.</p>
                                    <input type="hidden" name="author_id" value="{{$author->id}}">

                                    @if(Auth::user()->subscriptions->where("author_id",$author->id)->value("author_id") == false)
                                        <input type="hidden" name="status" value="true">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    @else
                                        <input type="hidden" name="status" value="false">
                                        <button type="submit" class="btn btn-primary">Unfollow</button>
                                    @endif
                                </form>
                            </div>
                            <div class="card-body">
                                <form class="align-content-center" method="POST" action="/author/donation_sub/{{$author->id}}">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{$author->id}}">
                                    @if(Auth::user()->donationSub->where("author_id",$author->id)->value("author_id") == false)
                                        <input type="hidden" name="status" value="true">
                                        <button type="submit" class="btn btn-primary ">Donation subscribe $</button>
                                    @else
                                        <input type="hidden" name="status" value="false">
                                        <button type="submit" class="btn btn-primary">Donation unfollow</button>
                                    @endif
                                </form>

                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-12">
                    <div class="line"></div>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    <!-- Post item-->

                    @foreach($author->news as $post)
                            <div class="post-item border ">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{route('post',$post->id)}}">
                                            <img alt="" src="{{$post->image}}">
                                        </a>
                                    </div>

                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$post->created_at}}</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">{{$post->title}}</a></h2>
                                        <div class="post-author"> <img src="https://play-lh.googleusercontent.com/r1gNUI2MyuVY4U_ImvN_VUn9aKaZpCbkU4eYyXxaoygZ1gr1v9Pd-nGcC5RKzVvVrA">
                                            <p>by <a href="{{route("author.page",$post->user->id)}}">{{$post->user->name}}</a> 2 days ago </p>

                                        </div>
                                        <br>
                                        <div class="post-tags " >
                                            @foreach($post->tags as $tag)
                                                <a href="#"> {{$tag->name}} </a>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>


                    @endforeach
                    <!-- end: Post item-->
                </div>
                <!-- end: Blog -->
                <!-- Pagination -->

                <!-- end: Pagination -->
            </div>
            <!-- end: post content -->
        </section> <!-- end: Content -->
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                    All rights reserved. Copyright © 2019. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
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
                    <div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="//www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
@endsection
