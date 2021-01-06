@extends('layouts.auth')

@section('styles')
<style>
    .card .card-login {
        height: 90%;
        width: 35vw;
        margin: 5px auto;
        padding: 10px;
        border: 1px solid #E0B54C;
        border-radius: 1rem;
    }

    label {
        font-size: 1.4rem;
    }

    a {
        border-radius: 0px !important;
    }

    .or::before {
        content: "";
        width: 14vw;
        position: relative;
        top: -15px;
        right: 5px;
        border-bottom: 1px solid #E0B54C;
    }

    .or::after {
        content: "";
        width: 14vw;
        position: relative;
        top: -15px;
        left: 5px;
        border-bottom: 1px solid #E0B54C;
    }

    .para {
        border: 1px solid #E0B54C;
       color: white;
       width: 99%;
        margin-left: 5px;
    }

    ::placeholder {
        background: transparent !important;
    }

    input.form1,
    input.form1:focus,
    input.form1:active {
        background: transparent !important;
        border: 1px solid #E0B54C !important;
        outline: none !important;
        box-shadow: none !important;
        color: white;
        border-radius: 0px;
    }

    @media (max-width:992px) {
        .card .card-login {
            width: 70vw;
        }
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/login')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@else
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/russ.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@endif

@endsection

@section('body')
<div class="container text-white w-75" style="margin-top: 80px;">
    <div class="card card-login mb-5">
        @if (Session::has('message'))
        <div class="alert alert-danger alert-dismissible fade show"
            style="background: #E0B54C!important; color:white; font-size: 16px;" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="text-center">Log in to Ciaostar</h1>
        <a href="/login/facebook" class="btn btn-lg text-white border-0 mb-2 mx-3" style="background: #3b5998;">Continue with
            facebook</a>
        <a href="/login/instagram" class="btn btn-lg text-white border-0 mb-2 mx-3"
            style="background: linear-gradient(45deg,#405DE6,#5851DB,#833AB4,#C13584,#E1306C,#FD1D1D);">Continue with
            instagram</a>
        <a href="/login/apple" class="btn btn-lg text-white mb-2 mx-3"
            style="background: (163,170,174); border:1px solid #f5c000;">Continue with Apple</a>
        <span class="or d-flex justify-content-center" style="color:white; font-size: 20px;"><b>OR</b></span>
        <form class="mx-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email or User name</label>
                <input type="text" class="form-control form-control-lg form1 @error('email') is-invalid @enderror"
                    name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback text-white">
                    {{ $errors->first('email') }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                    class="form-control form-control-lg form1 @error('password') is-invalid @enderror" name="password"
                    id="password" value="{{ old('password') }}" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-lg text-white"
                    style="background: #E0B54C; width:18vw!important;">Log in</button></div>
            <div class="d-flex justify-content-center my-2"><a href="" class="text-decoration-none text-white"
                    style="font-size: 18px;">Forgot Password?</a></div>
            <div class="d-flex justify-content-center my-1">
                <p style="font-size: 18px;">Don't have an account? <a href="{{ route('getRegister') }}"
                        style="text-decoration: none;color:white;">Sign UP</a></p>
            </div>
        </form>
    </div>
</div>
<div class="para">
    <div class="row">
        <div class="col-8">
            <div class="d-flex flex-column">
                <div class="d-flex ml-2">
                    <p>Join our mailing list <br> Subscribe for update on new table for feetures</p>
                </div>
                <div class="d-flex justify-content-start ml-2 mb-2">
                    <form method="POST" action="/subscribe-user">
                        @csrf
                        <div class="d-flex flex-wrap flex-md-nowrap">
                            <input type="email" name="email" class="form-control form-control-lg form1 mr-3"
                                placeholder="You@example.com" required>
                            <button type="submit" class="btn text-white"
                                style="background: #E0B54C; width:5vw;"><i
                                    class="fa fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-around mb-2 mt-4">
                    <div><i class="fa fa-envelope"></i></div>
                    <div><i class="fa fa-envelope"></i></div>
                    <div><i class="fa fa-envelope"></i></div>
                    <div><i class="fa fa-envelope"></i></div>
                    <div><i class="fa fa-envelope"></i></div>
                </div>
                @if (Session::has('user'))
                <div class="d-flex justify-content-center my-2 mb-1 mt-3">
                    <a href="{{ route('getEnrollment') }}" class="btn mr-2"
                        style="border: 1px solid #E0B54C; background: transparent; border-radius:0px; color:white;">Enroll
                        as Star</a>
                    <a href="" class="btn"
                        style="border: 1px solid #E0B54C; background: transparent; border-radius:0px; color:white;">Credit</a>
                </div>
                @else
                <div class="d-flex justify-content-center my-2 mb-1 mt-3">
                    <a href="{{ route('getEnrollment') }}" class="btn mr-2"
                        style="border: 1px solid #E0B54C; background: transparent; border-radius:0px; color:white;">Enroll
                        as Star</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection