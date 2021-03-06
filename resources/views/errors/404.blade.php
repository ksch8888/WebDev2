<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEITQEY_V3.0</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="{{ asset('css/styles.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Login-Form-Dark.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Pretty-Registration-Form.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Registration-Form-with-Photo.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Login-Form-Dark.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Navigation-with-Search.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Footer-Basic.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Features-Boxed.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/ionicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{asset('/fonts/fontNFL.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">

    <style type="text/css">

        .Text{
            font-family: "Bougan SSi";
            font-size: 3em;
            color: white;
        }

        .ueber{
            font-family: 'NFLCHARG';
            font-weight:600;
            font-size:15em;
            color: white;
        }
    </style>

</head>



<body style="background-color:#343642;">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
                <div class="container"><a class="navbar-brand" href="test.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                        data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
                        </form>


                        @auth
                            <a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                            {{--<a class="btn btn-light action-button" role="button" href="userProfil.html" style="background-color:#979c9c;">Profil</a>--}}

                            <div class="dropdown">
                                <button class="dropbtn" href="userProfil.html">Profil</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="profilBearbeiten.html">Profil bearbeiten</a>
                                </div>
                            </div>



                            <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}">Logout</a>
                        @endauth
                        @guest()
                            <a class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                            <a class="btn btn-light action-button" role="button" href="login.html">Login</a>
                        @endguest

                </div>
            </nav><p class="ueber" >404</p>
<p class = "Text">Ups... Hier scheint kein Event zu sein</p></div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://facebook.com"><i class="icon ion-social-facebook"></i></a></div>            <ul
                class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">NEITQEY © 2018</p>
        </footer>
    </div>
    <script src="{{asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/bs-animation.js') }}"></script>
</body>

</html>
