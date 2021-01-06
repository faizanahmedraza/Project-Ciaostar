@extends('layouts.main')

@section('styles')
<style>
    .card {
        height: 20rem;
        border-radius: 0px;
        border: none;
        background: transparent;
        color: white;
        /* box-shadow: 0px 0px 2px white; */
    }

    a {
        color: white;
        text-decoration: none;
    }

    .inside {
        width: 135px;
        border-radius: 50%;
        padding: 5px;
        background: #ffbb00;
    }


    .list-group-item {
        background: transparent;
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.in/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/celebrity/athletes')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'http://127.0.0.1:8000/celebrity/athletes')
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

@endsection

@section('body')
<div class="row mt-3">
    <div class="col-2 col-md-1">
        <div id="boxes1" class="d-flex flex-row flex-wrap mt-3 ml-2 mr-2 mb-0">
            <div class="box1" style="background: #E0B54C; height: 130vmin; width:15px;"></div>
            <div class="box2" style="background: red; height: 130vmin; width:15px;"></div>
            <div class="box3" style="background: blue; height: 130vmin; width:15px;"></div>
            <div class="box4" style="background: white; height: 130vmin; width:15px;"></div>
        </div>
    </div>
    <div class="col-10 col-md-11" style="margin-top: 60px;">
        <div class="row mr-2 mb-4" style="margin-top: 10px;">
            <div class="col-6 col-md-6">
                <div class="d-flex justify-content-start">
                    <a href="" class="btn ml-md-4"
                        style="text-decoration: none; color:white; font-size:22px;"><b>Athletes</b></a>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="d-flex justify-content-end">
                    <a href="" class="btn ml-md-4" style="text-decoration: none; color:white; font-size:20px;"><b>Vedi
                            tutti</b></a>
                </div>
            </div>
        </div>
        <div class="row-2 mb-4" style="margin-top: 10px;">
            <div class="col-12">
                <div class="card-row">
                    <div class="row">
                        @foreach ($celebrity as $item)
                        <div class="col-2">
                            <a href="{{route('celebrity.details',['id' => $item->id])}}" class="text-decoration-none"><img class="inside mx-auto"
                                src="{{asset('storage/images/'.$item->profile_img)}}" alt=""></a>
                            <div class="d-flex flex-column text-white mt-2">
                                <span class="ml-5">{{ $item->price.'$' }}</span>
                                <a href="{{route('celebrity.details',['id' => $item->id])}}" class="ml-4 text-decoration-none text-white">
                                    <h3 class="m-0">{{ $item->name }}</h3>
                                </a>
                                <span class="ml-5 mb-4">Athletes</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<footer class="mb-0">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <div class="d-flex justify-content-start flex-row flex-wrap">
                <ul class="d-flex flex-row flex-wrap list-group list-group-horizontal" style="font-size: 18px;">
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