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
@if (Request::url() == 'https://ciaostar.co.uk/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/enrollment')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.png')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.8);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/enrollment')
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
    <div class="card card-login">
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show"
            style="background: #E0B54C!important; color:white; font-size: 16px;" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="text-center">Enrollment Form</h1>
        <p class="mx-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde dignissimos iure ipsum quo
            facilis itaque ab, neque beatae atque cupiditate?</p>
        <form class="mx-3" method="POST" action="{{ route('enroll') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control form-control-lg form1" name="name" id="name"
                    autocomplete="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg form1" name="email" id="email"
                    autocomplete="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control form-control-lg form1" name="phone" id="phone"
                    autocomplete="mobile" required>
            </div>
            <div class="mb-3">
                <label for="profession" class="form-label">Enter Your Profession</label>
                <input type="text" class="form-control form-control-lg form1" name="profession" id="profession"
                    required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price <small>(US Dollars)</small></label>
                <input type="number" class="form-control form-control-lg form1" name="price" id="price" required>
            </div>
            <div class="mb-3">
                <label for="stage" class="form-label">Stage Number/ Moniter</label>
                <input type="number" class="form-control form-control-lg form1" name="stage" id="stage" required>
            </div>
            <div class="mb-3">
                <label for="social" class="form-label">Social Media Page <span style="font-size: 14px;">(where we can
                        find you)</span></label>
                <input type="url" class="form-control form-control-lg form1" style="width:60%;" name="social"
                    id="social" autocomplete="url" required>
            </div>
            <div class="mb-3">
                <label for="followers" class="form-label">Your Number of Followers</label>
                <input type="number" class="form-control form-control-lg form1" style="width:50%;" name="followers"
                    id="followers" required>
            </div>
            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-lg text-white"
                    style="background: #E0B54C;">Submit</button></div>
        </form>
    </div>
</div>
@endsection