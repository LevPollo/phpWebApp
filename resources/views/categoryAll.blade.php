@extends('layouts.app')

@section('section')


    <section id="page-content">

        <div class="container ">
            <!-- post content -->
            <!-- Page title -->

            <!-- end: Page title -->
            <!-- Blog -->
            <div class="row m-b-20">

                    <form method="get" action="{{route('categoryAll')}}">
                        <label for="price">Categories Filter:</label>
                            @foreach($setCategories as $category)
                                <span><a>{{$category->title}} :</a><input type="checkbox" name="{{$category->id}}" value="" checked></span>
                            @endforeach
                        <button type="submit">Фильтровать</button>
                    </form>

            </div>
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
                                    <div class="post-author "><img class="img-fluid"
                                                                   src="{{$post->user->information->avatar}}">

                                        <p>by <a href="{{route("author.page",$post->user->id)}}">{{$post->user->name}}</a> 2 days ago </p>
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
            <div>{{$news->links()}}</div>
            <!-- end: Pagination -->
        </div>
        <!-- end: post content -->
    </section> <!-- end: Content -->
@endsection



