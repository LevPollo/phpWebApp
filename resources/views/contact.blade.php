@extends('layouts/app')

@section('section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <section>
        <div class="container text-dark">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla
                        turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada
                        fermentum bibendum.</p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                        gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                        Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                    <div class="row m-t-40">
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>

                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo Office</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</h4> (123) 456-7890
                            </address>
                        </div>
                    </div>
                    <div class="social-icons m-t-30 social-icons-colored">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="" action="{{route('contact')}}" method="POST" novalidate>

                        @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label class="sr-only bg-danger">Username</label>
                                <input type="text" value="" name="name" placeholder="Username"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only bg-danger">email</label>
                                <input type="email" value="" name="email" placeholder="email"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only bg-danger">subject</label>
                                <input type="text" value="" name="subject" placeholder="subject"
                                       class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only bg-danger">message</label>
                                <input type="text" value="" name="message" placeholder="message"
                                       class="form-control">
                            </div>

                        </div>
                        <div class=" form-group">
                            <button class="btn " type="submit">Register New Account</button>

                        </div>
                        @foreach( $errors->all() as $error )

                            <li>{{ $error }}</li>

                        @endforeach
                        <script>
                            @if(Session::has('success'))
                                toastr.success("{{ session('success') }}")
                            @endif
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- end: CONTENT -->
    <!-- MAP -->

@endsection


