@extends('layouts.auth')

@section('styles')
<style>
    .bg-btn {
        background: rgb(22, 22, 22);
        color: white;
    }

    .bg-btn-2 {
        background: red;
        color: white;
    }

    .card.card-req {
        background: rgb(22, 22, 22);
        color: white;
        max-width: 400px;
        margin: 15px auto;
        padding: 10px;
        display: flex;
        justify-content: center;
        border-radius: 1.5rem;
    }

    .inside {
        width: 125px;
        border-radius: 50%;
        padding: 5px;
        background: #E0B54C;
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/request/details')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
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
<div class="container" style="margin-top: 80px;">
    <div class="row text-white">
        <div class="col-md-6">
            <div class="d-flex flex-column mt-2">
                <h2 style="white-space: nowrap;">Let's get to know each other.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, praesentium quos! Aperiam?</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-row flex-wrap justify-content-md-center">
                <div class="bg-btn mx-1 my-1 p-2">Song/SongWriter</div>
                <div class="bg-btn mx-1 my-1 p-2">Sports</div>
                <div class="bg-btn mx-1 my-1 p-2">Writer</div>
                <div class="bg-btn mx-1 my-1 p-2">Youtube</div>
                <div class="bg-btn mx-1 my-1 p-2">Music</div>
                <div class="bg-btn mx-1 my-1 p-2">TikTok</div>
                <div class="bg-btn mx-1 my-1 p-2">Comedy</div>
                <div class="bg-btn mx-1 my-1 p-2">Acting</div>
                <div class="bg-btn mx-1 my-1 p-2">UEFA</div>
                <div class="bg-btn mx-1 my-1 p-2">Hip Hop</div>
                <a href="/video/public" class="bg-btn-2 mx-1 my-1 p-2">Submit Images</a>
            </div>
        </div>
    </div>

    <div class="card card-req" style="margin-top:80px!important;">
        <h2>Request Details</h2>
        <p>Talent Requested</p>
        <strong>Rogan O'Connor</strong>
        <p>Video For</p>
        <strong>Kathleen</strong>
        <p>Booked By</p>
        <strong>Laura vescio</strong>
        <p>Instructions</p>
        <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium magni cumque incidunt assumenda
            beatae, maxime repudiandae ratione earum tempore eos fugiat officiis sapiente eaque ab?</strong>
        <p>Booked Publicly</p>
        <p>Charged (if fulfilled)</p>
        <strong>$39</strong>
        <p>Request expires on:</p>
        <strong>10/23/2020</strong>
    </div>

    <h3 class="text-white">Also Check out</h3>

    <div class="d-flex justify-content-around flex-wrap text-white">
        @foreach ($celebrity as $item)
        <div class="card" style="width:100px;">
            <img class="inside" src="{{asset('images/2.jpg')}}" alt="">
            <div class="card-body">
                <div class="d-flex flex-column" style="margin-top: -5px;">
                    <span class="card-text d-flex justify-content-center mt-0 ml-lg-2">{{ $item->price.'$'}}</span>
                    <a href="{{route('celebrity.details')}}" class="ml-4 text-decoration-none text-white">
                        <h3 class="card-text d-flex justify-content-center mb-0 ml-lg-2">{{ $item->name }}</h3>
                    </a>
                    <span class="card-text d-flex justify-content-center ml-lg-2">{{ $item->profession }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection