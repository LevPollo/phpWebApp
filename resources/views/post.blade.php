@extends('layouts.app')
@section('section')


    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="content col-lg-9">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post single item-->
                        <div class="post-item">
                            <div class="post-item-wrap">

                                <div class="post-item-description ">
                                    <h2>{{$thisPost->title}}</h2>

                                    <div class="post-image">
                                            <img alt="" src="{{$thisPost->image}}">
                                    </div>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$thisPost->created_at}}</span>
                                        <div class="post-meta-share">
                                            <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                                <i class="fab fa-instagram"></i>
                                                <span>Instagram</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                                <i class="icon-mail"></i>
                                                <span>Mail</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p>{{$thisPost->text}}</p>php
                                    <div class="post-tags">
                                        @foreach($thisPost->tags as $tag)
                                            <a href="#">{{$tag->title}}</a>
                                          @endforeach
                                    </div>
                                </div>

                                <div class="post-navigation">
                                    <a href="blog-single.html" class="post-prev">
                                        <div class="post-prev-title"><span>Previous Post</span>Standard post with a single image</div>
                                    </a>
                                    <a href="blog-masonry-3.html" class="post-all">
                                        <i class="icon-grid"> </i>
                                    </a>
                                    <a href="blog-single-audio.html" class="post-next">
                                        <div class="post-next-title"><span>Next Post</span>Post with Audio</div>
                                    </a>
                                </div>
                                <!-- Comments -->
                                <div class="comments" id="comments">
                                    <div class="comment_number">
                                        Comments <span>{{count($thisPost->comments)}}</span>
                                    </div>
                                    <div class="comment-list">



                                        <!-- Comment -->
                                        @if(auth()->check())
                                            <form class="form-gray-fields" method="POST" action="{{route("post",$thisPost->id)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="upper" for="comment">Your comment</label>
                                                            <textarea class="form-control required" name="text" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group text-center">
                                                            <button class="btn" type="submit">Submit Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach( $errors->all() as $error )
                                                    <li style="color:red">{{ $error }}</li>
                                                @endforeach
                                            </form>
                                        @else
                                            <br>
                                            <a href="{{route('login')}}">login to write a comment</a>
                                            <br>
                                        @endif

                                        @foreach($thisPost->comments as $comment)
                                            <div class="comment">

                                                <div class="image"><img alt="" src="{{$comment->user->information->avatar}}" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name">{{$comment->user->nickname}}</h5>
                                                    <span class="comment_date">{{$comment->created_at}}</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <h2><a href="#">{{$comment->title}}</a></h2>
                                                        <p>{{$comment->text}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                        @endforeach

                                    </div>
                                </div>
                                <!-- end:Comments -->
                        <!-- end: Post single item-->
                            </div>
                        </div>

                    </div>
                 </div>
            </div>
        </div>
    </section>
@endsection
