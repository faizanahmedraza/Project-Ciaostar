@extends('layouts.main')

@section('styles')
<style>
    body {
        color: white;
    }

    .inside {
        width: 135px;
        border-radius: 50%;
        padding: 5px;
        background: #E0B54C;
    }

    .first {
        margin-top: 40px;
        margin-left: -40px;
        width: 28vmin;
        height: 20vmin;
        background: #E0B54C;
        -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 29%, 100% 48%, 79% 29%, 0 29%);
        clip-path: polygon(0% 0%, 100% 0%, 100% 29%, 100% 48%, 79% 29%, 0 29%);
    }

    .image-size {
        width: 190px;
        height: 300px;
        display: flex;
        flex-direction: row;
        flex: 1;
        margin: 0px 5px;
    }

    .image-size>img {
        object-fit: initial;
        max-width: 100%;
        max-height: 100%;
    }

    .square {
        position: relative;
        border: 3px solid #E0B54C;
        width: 150px;
        height: 50px;
        padding: 7px;
        padding-top: 9px;
    }

    .square:hover {
        color: #E0B54C;
    }

    i#fa {
        position: absolute;
        top: 36px;
        font-size: 20px;
        right: 10px;
        transform: rotate(-20deg);
    }

    .list-group-item {
        background: transparent;
        padding: 2px;
    }

    a {
        color: white;
        text-decoration: none;
    }

    @media (max-width: 992px) {
        .first {
            width: 32vmin;
            height: 48vmin;
        }

        .mx-3 .pg {
            font-size: 20px;
            margin-bottom: 100px;
        }
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.in/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/celebrity/details')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@else
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/russ.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@endif
@endsection

@section('body')
<div class="d-flex ml-3 my-3" style="margin-top:80px!important;">
    <div class="btn-group">
        <a href="/" class="btn btn-primary"
            style="background: white; color:#E0B54C; border-radius: 2rem; font-size: 18px;"><i
                class="fa fa-arrow-left"></i></a>
        <a href="/" class="btn btn-primary text-white ml-1 border-0"
            style="background: transparent; font-size: 18px;">Back</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-2 offset-md-1">
            <img class="inside" src="{{asset('storage/images/'.$show->profile_img)}}" alt="">
        </div>
        <div class="col-12 col-md-9">
            <div class="d-flex flex-column text-white">
                <div>
                    <h3>{{$show->name}}</h3>
                </div>
                <div>
                    <p style="font-size: 16px;">who he is, Part taken in a <br>Show, Movie etc</p>
                </div>
                <div><button class="btn btn-lg"
                        style="border:3px solid #E0B54C; color: #E0B54C; border-radius: 0px; width:140px; font-size: 20px;"><b>Follow</b></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="first">
                    <a href="/request/form/{{$show->id}}" class="mx-3 pg"
                        style="font-size: 22px; font-weight: bold; color:black;">Request $65
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -20px;">
            <div class="d-flex flex-row justify-content-center">
                @foreach ($images as $i)
                <div class="image-size">
                    <img src="{{asset('storage/images/'.$i->video)}}" alt="">
                </div>
                @endforeach
            </div>
            <div class="row my-4">
                <div class="d-flex flex-column justify-content-start">
                    <div class="d-flex flex-row justify-content-start" style="margin-left: 130px; color: #E0B54C;">
                        <span style="font-size: 28px;"><i class="fa fa-info-circle"></i></span>
                        <p class="mt-2 ml-3">
                            <h3 style="margin-top: 10px;">How does it work?</h3>
                        </p>
                    </div>
                    <div class="d-flex flex-row justify-content-start" style="margin-left: 130px; color: #E0B54C;">
                        <span style="font-size: 28px;"><i class="fa fa-info-circle"></i></span>
                        <p class="mt-2 ml-3">
                            <h3 style="margin-top: 10px;">Top Tip!</h3>
                        </p>
                    </div>
                    <div class="d-flex flex-row justify-content-start" style="margin-left: 150px; color: #E0B54C;">
                        <p class="mt-2 ml-3" style="font-size: 16px;">Lorem, ipsum dolor sit amet consectetur
                            adipisicing
                            elit. <br> Dolor praesentium molestias necessitatibus incidunt aut <br> fugiat quasi neque
                            veritatis, odit ad.</p>
                    </div>
                    <div class="d-flex justify-content-start" style="margin-left: 130px; color: #E0B54C;">
                        <a href="{{ route('getEnrollment') }}" class="square">Enroll as a new Star <i id="fa"
                                class="fa fa-mouse-pointer"></i></a>
                        <button class="btn ml-2"
                            style="border: 3px solid #E0B54C; background: transparent; border-radius:0px; color:#E0B54C;">Credit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <div class="d-flex justify-content-start flex-row flex-wrap">
                <ul class="d-flex flex-row flex-wrap list-group list-group-horizontal" style="font-size: 14px;">
                    <li class="list-group-item" style="background:transparent;">
                        <a class="nav-link active" aria-current="page" href="#">Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">FAQ</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Privacy</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Terms</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Team</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Merch</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Accessibility</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Press</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link active" aria-current="page" href="#">Help</a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav>
</footer>
@endsection