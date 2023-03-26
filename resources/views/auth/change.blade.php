@extends('.layouts.app')
@section('section')
    <section class="fullscreen" style="background-image: url({{asset('images/backgrounds/loginBg')}})"
             data-bg-parallax="{{asset('images/backgrounds/loginBg.png')}}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">

                </div>
                <div class="row">

                    <div class="col-lg-12 center p-40 bg-dark text-light ">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <form class=" " action="{{route('profile_change')}}" method="post" novalidate>
                            @csrf

                                <div class="col-lg-12  ">
                                    <h3 class="text-center">Change profile</h3>
                                    <br>
                                </div>

                                <div class="col-lg-12 form-group">
                                    <p>Username:</p>
                                    <label class="sr-only bg-danger">Username</label>
                                    <input type="text" value="" name="name" placeholder="Username"
                                           class="form-control  ">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Password:</p>
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" name="password"
                                           placeholder="Password" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Password:</p>
                                    <label class="sr-only">Password</label>
                                    <input type="password" value="" name="password_confirmation"
                                           placeholder="Password" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Email:</p>
                                    <label class="sr-only">City</label>
                                    <input type="text" value="" name="email"
                                           placeholder="Email" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>First name:</p>
                                    <label class="sr-only">First name</label>
                                    <input type="text" value="" name="firstname"
                                           placeholder="Firstname" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Last name:</p>
                                    <label class="sr-only">Second name:</label>
                                    <input type="text" value="" name="lastname"
                                           placeholder="Second name" class="form-control">
                                </div>
{{--                                <div class="col-lg-12 form-group">--}}
{{--                                    <p>Birthday:</p>--}}
{{--                                    <label class="sr-only">Birthday</label>--}}
{{--                                    <input type="time" value="" name="birthday"--}}
{{--                                           placeholder="Second name" class="form-control">--}}
{{--                                </div>--}}
                                <div class="col-lg-12 form-group">
                                    <p>Country:</p>
                                    <label class="sr-only">Country</label>
                                    <input type="text" value="" name="country"
                                           placeholder="Country" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>City:</p>
                                    <label class="sr-only">City</label>
                                    <input type="text" value="" name="city"
                                           placeholder="City" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Phone:</p>
                                    <label class="sr-only">Phone</label>
                                    <input type="tel" value="" name="phone"
                                           placeholder="Phone" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <p>Address:</p>
                                    <label class="sr-only">Address</label>
                                    <input type="text" value="" name="address"
                                           placeholder="Address" class="form-control">
                                </div>


{{--                                <div class="col-lg-12 form-group">--}}
{{--                                    <p>Avatar:</p>--}}
{{--                                    <label class="sr-only">Avatar</label>--}}
{{--                                    <input type="file" value="" name="avatar"--}}
{{--                                           placeholder="Avatar" class="form-control">--}}
{{--                                </div>--}}

                                <div class=" form-group col-lg-13 ">
                                    <button class="btn" type="submit">Apply changes</button>
                                </div>


                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
