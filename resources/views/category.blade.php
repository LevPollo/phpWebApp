@extends('layouts.app')
@section('section')

   <section id="page-content">
        <div class="container">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">

            </div>


            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                <!-- Post item-->
                    dd($id)
                @foreach($news as $post)
                    @if($post->category_id == $categoryId && $categoryId != null )
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

                    @endif
                @endforeach
                <!-- end: Post item-->
            </div>
            <!-- end: Blog -->
            <!-- Pagination -->
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            <!-- end: Pagination -->
        </div>
        <!-- end: post content -->
    </section> <!-- end: Content -->
@endsection
