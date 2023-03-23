@extends('.layouts.app')
@section('section')
    <section class="fullscreen" style="background-image: url({{asset('images/backgrounds/loginBg')}})"
             data-bg-parallax="{{asset('images/backgrounds/loginBg.png')}}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">

                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 bg-dark text-light ">
                        <ul>


                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <form class=" " action="{{route('register')}}" method="post" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-12  ">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only bg-danger">Username</label>
                                    <input type="text" value="{{old('name')}}" name="name" placeholder="Username"
                                           class="form-control  ">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="{{old('password')}}" name="password"
                                           placeholder="Password" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" name="password_confirmation" placeholder="Password"
                                           class="form-control">
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" value="{{old('email')}}" name="email" placeholder="Email"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input type="text" value="{{old('phone')}}" name="phone" placeholder="Phone"
                                           class="form-control">
                                </div>
                                <div class="col-lg-12  form-group">
                                    <button class="btn" type="submit">Register New Account</button>
                                    <button type="button" class="btn btn-danger m-l-10">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
