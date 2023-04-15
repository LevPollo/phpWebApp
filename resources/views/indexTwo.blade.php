@extends('layouts.app')

@section('section')
{{--    {{dd($users->find(1)->informaton)}}--}}
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->

            <div  class="slide" style="background-image: url({{asset('images/backgrounds/mine.png')}}); background-size: cover; width: 100%; height: 100%">
            <div class="bg-overlay"></div>
            <div class="container ">
                <div class="slide-captions text-center  text-shadow-dark" >
                    <!-- Captions -->
                    <h1 data-animate="fadeInUp" data-animate-delay="400" >We’re section 9 news</h1>
                    <h2 style="color: #FFFF00;" data-animate="fadeInUp" data-animate-delay="600">Our News Brings You the Harsh Reality of Events!</h2>
                    <h3  data-animate="fadeInUp" data-animate-delay="800" class="text-light text-bold "><a href="{{route("login")}}" class="business"><span class="business">Let's do this</span></a>
                        </h3>

                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>

@endsection
