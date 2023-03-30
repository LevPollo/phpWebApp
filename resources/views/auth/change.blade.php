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

                        <form class=" " action="{{route('profile_change')}}" method="post" novalidate>
                            @csrf

                                <div class="col-lg-12  ">
                                    <h3 class="text-center">Change profile</h3>
                                    <br>
                                </div>

                                <div class="row form-group">
                                    <p class="col-lg-6 text-center mt-2">User Name:</p>
                                    <label class="sr-only">User Name</label>
                                    <input readonly type="text" value="" name="name"
                                           placeholder="{{$authUser->name}}" class="form-control col-lg-6">
                                    <a></a>
                                </div>
                            <div class="row form-group">
                                <p class="col-lg-6 text-center mt-2">Email:</p>
                                <label class="sr-only">Email</label>
                                <input readonly type="text" value="" name="email"
                                       placeholder="{{$authUser->email}}" class="form-control col-lg-6">
                            </div>
                            <div class="row form-group">
                                    <p class="col-lg-6 text-center mt-2">Password:</p>
                                <label class="sr-only">Password</label>
                                <input readonly type="text" value="" name="password"
                                       placeholder="********" class="form-control col-lg-6">
                            </div>
                            <div class="row form-group">
                                <p class="col-lg-6 text-center mt-2">Age:</p>
                                <label class="sr-only">Age</label>
                                <input type="number" value="" name="age"
                                       placeholder="{{$authUser->information->age}}" class="form-control col-lg-6">
                            </div>
                            <div class="row form-group">
                                <p class="col-lg-6 text-center mt-2">County:</p>
                                <label class="sr-only">County</label>
                                <input type="text" value="" name="country"
                                       placeholder="{{$authUser->information->country}}" class="form-control col-lg-6">
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
                                <ul>
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
