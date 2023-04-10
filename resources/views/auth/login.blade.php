@extends('.layouts.app')
@section('section')
    <section class="fullscreen" style="background-image: url({{asset('images/backgrounds/loginBg')}})" data-bg-parallax="{{asset('images/backgrounds/loginBg.png')}}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">

                </div>
                <div class="row">
                    <div class="col-lg-6  center p-40 bg-dark text-light b-r-10">
                        <h2 class="text-center">Login</h2>
                        <form class=" " action="{{route('login')}}" method="post" novalidate>
                            @csrf

                            <div class="row">


                                <div class="col-lg-12 p-1 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" value="{{old('email')}}" name="email" placeholder="Email" class="form-control">
                                </div>


                                <div class="col-lg-12 p-1 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value=""  name="password" placeholder="Password" class="form-control">
                                </div>

                                <div class=" mx-auto p-1 form-group">
                                    <button class="btn " type="submit">login </button>
                                    <a href="{{route('register')}}" type="button" class="btn btn-danger m-l-10">Register</a>
                                </div>

                            <ul class="mx-auto">
                                @foreach( $errors->all() as $error )
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
