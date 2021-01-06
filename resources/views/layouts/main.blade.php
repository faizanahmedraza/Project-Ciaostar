<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        html,
        body {
            background-color: black;
            overflow-x: hidden;
        }

        nav {
            border-bottom: 0.3px solid rgb(143, 143, 143);
            background-color: black;
        }

        #form-control.form-control,
        #form-control.form-control:focus,
        #form-control.form-control:valid {
            border-top-left-radius: 2.25rem;
            border-bottom-left-radius: 2.25rem;
            background-color: white;
            border: none;
            outline: none;
            box-shadow: none;
            padding-right: 0px;
        }

        input[type=text],
        input[type=text]:placeholder-shown {
            background-color: white;
        }

        input[type=text]::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #E0B54C;
            background-color: white;
            /* Firefox */
        }

        .input-group-text {
            background: white;
            border: none;
            border-radius: 2.25rem;
        }

        .navbar-toggler,
        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler:focus-visible {
            outline: none !important;
            border: none !important;
        }

        :focus {
            outline: none !important;
            border-color: transparent !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        @media (min-width:992px) {
            img#first {
                display: none;
            }

            .input-group-text {
                margin-right: 10px;
            }
        }

        @media (max-width:992px) {
            img#second {
                display: none;
            }

            .nav-item>.input-group {
                margin-top: 10px;
            }

            .dropdown-menu-right {
                top: 35px;
            }
        }
    </style>
    @yield('styles')
    <title>{{ config('app.name', 'CiaoStar') }}</title>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                @section('logo')
                @if (Request::ip() == 'https://ciaostar.co.uk')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.es')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.ae')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.al')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.ie')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.in')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'https://ciaostar.co.fr')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
                @elseif (Request::ip() == 'http://127.0.0.1:8000')
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/russ.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

                @else
                <a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/russ.jpeg')}}"
                        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">                 
                @endif
                @show
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-md-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="input-group">
                                <input type="text" id="form-control" class="form-control" placeholder="Search"
                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                <div class="input-group-text" id="btnGroupAddon"><i class="fa fa-search"
                                        style="color:#E0B54C; font-size: 24px;"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                @if (Session::has('user'))
                <div class="dropdown">
                    <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">
                        <img id="second" class="ml-auto" src="{{asset('storage/images/6.jpg')}}" width="40"
                            style="border: 1px solid #E0B54C!important; border-radius: 2.25rem!important;" alt="">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/dashboard/celebrity-profile">Account</a></li>
                        <li><a class="dropdown-item" href="#">Following</a></li>
                        <li><a class="dropdown-item" href="#">Invite Friends <br><span class="px-1"
                                    style="background: red; color: white;">Get S5</span></a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                @else
                <a href="{{ route('login') }}" class="btn" type="button">
                    <img id="second" class="ml-auto" src="{{asset('images/profile.png')}}" width="40"
                        style="border: 1px solid #E0B54C!important; border-radius: 2.25rem!important;" alt="">
                </a>
                @endif
            </div>
        </nav>
    @yield('body')

    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>

</html>