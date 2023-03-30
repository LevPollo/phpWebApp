@extends('layouts.app')

@section('section')
    <section id="page-content">

        <div class="container ">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">
                <h1>Blog Style - Author</h1>
                <div class="breadcrumb float-left">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Blog</a>
                        </li>
                        <li class="active"><a href="#">Author Info</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                <!-- Post item-->

                    @foreach($news as $post)
                        <div class="post-item border ">
                            <div class="post-item-wrap">

                                <div class="post-image">
                                    <a href="{{route('post',$post->id)}}">
                                        <img alt="" src="{{$post->image}}">
                                    </a>
                                    <span class="post-meta-category"><a
                                            href="{{route('category',$post->category->id)}}">{{$post->category->title}}</a></span>
                                </div>

                                <div class="post-item-description">
                                    <span class="post-meta-date"><i
                                            class="fa fa-calendar-o"></i>{{$post->created_at->format('d/m/Y')}}</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> {{count($post->comments)}} Comments</a></span>
                                    <h2><a href="#">{{$post->title}}</a></h2>
                                    <p> {{$post->text}}</p>
                                    <div class="post-author "><img class="img-fluid"
                                                                   src="https://play-lh.googleusercontent.com/r1gNUI2MyuVY4U_ImvN_VUn9aKaZpCbkU4eYyXxaoygZ1gr1v9Pd-nGcC5RKzVvVrA">

                                        <p>by <a href="#">{{$post->user->name}}</a> 2 days ago </p>
                                    </div>
                                    <br>
                                    <div class="post-tags ">
                                        @foreach($post->tags as $tag)
                                            <a href="#"> {{$tag->name}} </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach

            </div>
            <!-- end: Blog -->
            <!-- Pagination -->

            <ul class="pagination">


                <li class="page-item "><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>

                    <li class="page-item active "><a class="page-link"  href=""></a></li>



                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            <!-- end: Pagination -->
        </div>
        <!-- end: post content -->
    </section> <!-- end: Content -->
@endsection



