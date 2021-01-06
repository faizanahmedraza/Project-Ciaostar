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

    .para {
        border: 1px solid #E0B54C;
        color: white;
        width: 99%;
        margin-left: 5px;
    }

    ::placeholder {
        background: transparent !important;
        color: white;
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

    .check {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .check input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: transparent;
        border: 1px solid #E0B54C;
    }

    /* On mouse-over, add a grey background color */
    .check:hover input~.checkmark {
        background-color: transparent;
    }

    /* When the checkbox is checked, add a blue background */
    .check input:checked~.checkmark {
        background-color: #E0B54C;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .check input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .check .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    @media (max-width:992px) {
        .card .card-login {
            width: 70vw;
        }
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/register')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/register')
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
        <div class="alert alert-success alert-dismissible fade show"
            style="background: #E0B54C!important; color:white; font-size: 16px;" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="text-center">Welcome to CiaoStar</h1>
        {{-- <a href="" class="btn btn-lg text-white border-0 mb-2 mx-3"
            style="background: #3b5998; border-radius: 0px;">Continue with facebook</a> --}}
        <form class="mx-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control form-control-lg form1" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">BirthDay</label>
                <input type="text" class="form-control form-control-lg form1" name="dob" id="dob"
                    placeholder="yyyy-mm-dd" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg form1" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg form1" name="password" id="password"
                    required>
            </div>
            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-lg text-white"
                    style="background: #E0B54C;">Sign UP</button></div>
            <div class="d-flex justify-content-center my-1">
                <p style="font-size: 18px;">Already have an account? <a href="{{ route('getLogin') }}"
                        style="text-decoration: none;color:white;">Sign IN</a></p>
            </div>
            <label class="check">Email me exclusive one's and discount by Signing to you agree with the terms and
                conditions
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
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
                            <button type="submit" class="btn text-white" style="background: #E0B54C; width:5vw;"><i
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