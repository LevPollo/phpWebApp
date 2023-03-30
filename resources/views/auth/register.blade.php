@extends('.layouts.app')
@section('section')
    <section class="fullscreen" style="background-image: url({{asset('images/backgrounds/loginBg')}})"
             data-bg-parallax="{{asset('images/backgrounds/loginBg.png')}}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">

                </div>
                <div class="row">
                    <div class="col-lg-6 center p-40 bg-dark ">

                        <form class=" " action="{{route('register')}}" method="post" >
                            @csrf
                            <div class="row  text-light">
                                <div class="col-lg-12  ">
                                    <h3 class="text-center">Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label class="sr-only bg-danger">Username</label>
                                    <input type="text" value="{{old('name')}}" name="name" placeholder="Username"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="{{old('password')}}" name="password"
                                           placeholder="Password" class="form-control">
                                </div>


                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" value="{{old('email')}}" name="email" placeholder="Email"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" name="password_confirmation" placeholder="Password"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input type="tel"   pattern="[0-9]{12}" value="{{old('phone')}}" name="phone" placeholder="375XXXXXXXXX"
                                           class="form-control">
                                </div>

                            </div>
                            <div class=" form-group  text-light">
                                <button class="btn " type="submit">Register New Account</button>

                            </div>
                            <ul style="margin-left:15px">
                            @foreach( $errors->all() as $error )
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
