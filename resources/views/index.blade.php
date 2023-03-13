@extends('layouts.app')
@section('section')
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>


                @foreach($news as $post)
                    <article class="brick entry format-standard animate-this">

                        <div class="entry-thumb">
                            <a href="layouts/single-standard.html" class="thumb-link">
                                <img src="{{$post->image}}" alt="ferris wheel">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">
                                @foreach($setCategories as $category)
                                    @if($category->id == $post->category_id)
                                        {{$category->title}}
                                    @endif
                                @endforeach
                            </a>


               			</span>
                                </div>

                                <h1 class="entry-title"><a href="layouts/single-standard.html">{{$post->title}}</a></h1>

                            </div>
                            <div class="entry-excerpt">
                                {{$post->text}}
                            </div>
                        </div>

                    </article> <!-- end article -->
                @endforeach


                <!-- format audio here -->


            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->

        <div class="row">

            <nav class="pagination">
                <span class="page-numbers prev inactive">Prev</span>
                <span class="page-numbers current">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="page-numbers">5</a>
                <a href="#" class="page-numbers">6</a>
                <a href="#" class="page-numbers">7</a>
                <a href="#" class="page-numbers">8</a>
                <a href="#" class="page-numbers">9</a>
                <a href="#" class="page-numbers next">Next</a>
            </nav>

        </div>

    </section> <!-- end bricks -->
@endsection



