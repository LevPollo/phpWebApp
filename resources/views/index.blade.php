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

                @for($i = $activePage * $postLimit; $i < $postLimit + ($activePage * $postLimit); $i++)
                    <div class="post-item border ">
                        <div class="post-item-wrap">

                            <div class="post-image">
                                <a href="{{route('post',$news[$i-1]->id)}}">
                                    <img alt="" src="{{$news[$i-1]->image}}">
                                </a>
                                <span class="post-meta-category"><a
                                        href="{{route('category',$news[$i-1]->category->id)}}">{{$news[$i-1]->category->title}}</a></span>
                            </div>

                            <div class="post-item-description">
                                <span class="post-meta-date"><i
                                        class="fa fa-calendar-o"></i>{{$news[$i-1]->created_at->format('d/m/Y')}}</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> {{count($news[$i-1]->comments)}} Comments</a></span>
                                <h2><a href="#">{{$news[$i-1]->title}}</a></h2>
                                <p> {{$news[$i-1]->text}}</p>
                                <div class="post-author "><img class="img-fluid"
                                                               src="{{asset($news[$i-1]->user->information->avatar)}}">
                                    <p>by <a href="#">{{$news[$i-1]->user->name}}</a> 2 days ago </p>
                                </div>
                                <br>
                                <div class="post-tags ">
                                    @foreach($news[$i-1]->tags as $tag)
                                        <a href="#"> {{$tag->name}} </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <!-- end: Blog -->
            <!-- Pagination -->

            <ul class="pagination">


                <li class="page-item "><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                @for($i=0;$i < ceil(count($news)/$postLimit); $i++)
                    <li class="page-item @if($activePage == $i+1) active @endif"><a class="page-link"  href="">{{$i+1}}</a></li>
                @endfor


                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            <!-- end: Pagination -->
        </div>
        <!-- end: post content -->
    </section> <!-- end: Content -->
@endsection



