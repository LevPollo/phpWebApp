<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">

{{--    <link rel="icon" type="image/png" href="{{asset("images/favicon.png")}}">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->

    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
    <section class="fullscreen" style="background-image: url({{asset('images/backgrounds/loginBg')}})" data-bg-parallax="{{asset('images/backgrounds/loginBg.png')}}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="text-center m-b-30">

                </div>
                <div class="row">

                    <div class="col-lg-12  center p-40 bg-dark text-light b-r-10">
                        <h2 class="text-center">Login</h2>
                        @if(session("message"))
                            <h1>{{session("message")}}</h1>
                        @endif
                        <form class=" " action="{{route("verification.send")}}" method="post" novalidate>
                           @csrf
                            <div>
                               <h2>Verify Email</h2>
                               <button type="submit">Resend Verification link</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
