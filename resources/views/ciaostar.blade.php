@extends('layouts.main')

@section('styles')
<style>
    #myModal {
        z-index: 5000;
        background: black;
        color: #E0B54C;
    }

    .card .card-modal {
        background: rgb(22, 22, 22);
        height: 50vh;
        width: 50vw;
        margin: calc(100vh - 75vh) auto;
        color: white;
        border-radius: .5rem;
        box-shadow: 2px 5px 10px gray;
    }

    .card {
        height: 430px;
        width: 100%;
        padding: 10px 40px;
        display: flex;
        flex-direction: row;
        background: transparent;
    }

    .image-size {
        width: 200px;
        height: 400px;
        display: flex;
        flex-direction: row;
        flex: 1;
    }

    .image-size>img {
        object-fit: initial;
        max-width: 100%;
        max-height: 100%;
    }

    .card-img-overlay {
        background: rgb(255, 182, 194);
        margin-left: 40px;
        margin-right: 40px;
        margin-top: 10px;
        margin-bottom: 18px;
        opacity: 0.72;
    }

    div.card-title {
        font-size: 2.5vw;
        font-weight: bold;
        color: #E0B54C;
        word-spacing: 10px;
        text-align: center;
        transform: scaleY(1.6);
        text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
        opacity: 0px !important;
        font-family: 'Times New Roman', Times, serif;
    }

    .top-left {
        position: absolute;
        top: 20px;
        left: 50px;
    }

    .close {
        background: #E0B54C;
        color: white;
        border: none;
        border-radius: 2.25rem;
        padding: 5px 5px;
        margin-top: 5px;
        margin-right: 5px;
        cursor: pointer;
    }

    .card-row {
        width: 100%;
        height: 100%;
    }

    .inside {
        width: 135px;
        border-radius: 50%;
        padding: 5px;
        background: #E0B54C;
    }

    .list-group-item {
        background: transparent;
    }

    a.nav-link.active {
        color: white;
    }
</style>
@endsection

@section('body')
@if (Session::has('order'))
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="card card-modal">
            <div class="d-flex">
                <div class="mx-auto my-2"><button class="btn btn-outline-warning">Give us your feedback</button>
                </div>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">Close
                    {{Session::forget('order')}}</button>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-1">
                    <div class="d-flex flex-column ml-md-2">
                        <div><img class="profile" src="{{asset('/images/profile.png')}}"
                                style="width:200px!important; border:2px solid #E0B54C; border-radius:6rem;" alt="">
                        </div>
                        <span class="d-flex justify-content-center text-white my-2" style="font-size: 20px;"><button
                                class="btn btn-outline-warning">Actor
                                name</button></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center align-items-center my-3">
                        <span class="text-center">Rate Actor out of 5 stars.</span>
                        <button class="btn btn-outline-warning">
                            <div class="d-flex">@for ($i = 0; $i < 5; $i++) <div class="mx-3"><i
                                        class="fa fa-star fa-2x"></i></div>
                            @endfor</div>
                    </button>
                    <span class="my-2 p-2" style="border:1px solid #E0B54C;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint modi earum in!
                    </span>
                    <button class="btn btn-warning my-2">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<section style="color:white; margin-top:80px!important;">
    <div class="card">
        @foreach ($images as $i)
        <div class="image-size">
            <img src="{{asset('storage/images/'.$i->video)}}" type="video/mp4">
        </div>
        @endforeach
        <div class="card-img-overlay d-flex justify-content-center">
            <div class="card-title align-self-center">Video personalizzati per i tuoi fans
                Saluta. <br> Motiva. Stimola.</div>
        </div>
        @if (Request::ip() == 'https://ciaostar.co.uk')
        <p class="top-left"><img src="{{asset('/images/uk.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.es')
        <p class="top-left"><img src="{{asset('/images/spain.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.ae')
        <p class="top-left"><img src="{{asset('/images/uae.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.al')
        <p class="top-left"><img src="{{asset('/images/albania.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.ie')
        <p class="top-left"><img src="{{asset('/images/ireland.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.in')
        <p class="top-left"><img src="{{asset('/images/india.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @elseif (Request::ip() == 'https://ciaostar.co.fr')
        <p class="top-left"><img src="{{asset('/images/france.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @else
        <p class="top-left"><img src="{{asset('/images/Ciaostar.png')}}" style="width: 130px; height: 90px;" alt="">
        </p>
        @endif
    </div>

    <div class="d-flex flex-column flex-wrap mt-3 ml-2 mr-2">
        <div class="box" style="background: #E0B54C; height: 15px;"></div>
        <div class="box" style="background: red; height: 15px;"></div>
        <div class="box" style="background: blue; height: 15px;"></div>
        <div class="box" style="background: white; height: 15px;"></div>
    </div>

    <div class="row">
        <div class="col">
            <img src="{{asset('/images/star.png')}}" class="pl-2"
                style="border: none; width:150px; transform: scaleY(1.7);">
        </div>
        <div class="col d-flex justify-content-md-center">
            <img src="{{asset('/images/invia.png')}}" class=""
                style="border: none; width:150px; transform: scaleY(1.7);">
        </div>
        <div class="col d-flex justify-content-md-end">
            <img src="{{asset('/images/scrpren.png')}}" class="pr-2"
                style="border: none; width:150px; transform: scaleY(1.7);">
        </div>
    </div>

    <div class="row">
        <div class="col-2 col-md-1">
            <div class="d-flex flex-row flex-wrap mt-3 ml-2 mr-2 mb-0">
                <div class="box1" style="background: #E0B54C; height: 190vmin; width:15px;"></div>
                <div class="box2" style="background: red; height: 190vmin; width:15px;"></div>
                <div class="box3" style="background: blue; height: 190vmin; width:15px;"></div>
                <div class="box4" style="background: white; height: 190vmin; width:15px;"></div>
            </div>
        </div>

        <div class="col-10 col-md-11">
            <div class="row mr-2 mb-4" style="margin-top: 10px;">
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('getArtists') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:22px;"><b>Artists</b></a>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('getArtists') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:20px;"><b>See More</b></a>
                    </div>
                </div>
            </div>

            <div class="row-2 mb-4" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card-row">
                        <div class="row">
                            @foreach ($celebrity as $item)
                            <div class="col">
                                <a href="{{route('celebrity.details',['id' => $item->id])}}" class="text-decoration-none"><img
                                        class="inside mx-auto" src="{{asset('storage/images/'.$item->profile_img)}}" alt=""></a>
                                <div class="d-flex flex-column text-white mt-2">
                                    <span class="ml-5">{{ $item->price.'$' }}</span>
                                    <a href="{{route('celebrity.details',['id' => $item->id])}}"
                                        class="ml-4 text-decoration-none text-white">
                                        <h3 class="m-0">{{ $item->name }}</h3>
                                    </a>
                                    <span class="ml-5">Artist</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mr-2 mb-4" style="margin-top: 10px;">
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('getAthletes') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:22px;"><b>Athletes</b></a>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('getAthletes') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:20px;"><b>See More</b></a>
                    </div>
                </div>
            </div>

            <div class="row-2 mb-4" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card-row">
                        <div class="row">
                            @foreach ($celebrity as $item)
                            <div class="col">
                                <a href="{{route('celebrity.details',['id' => $item->id])}}" class="text-decoration-none"><img
                                        class="inside mx-auto" src="{{asset('storage/images/'.$item->profile_img)}}" alt=""></a>
                                <div class="d-flex flex-column text-white mt-2">
                                    <span class="ml-5">{{ $item->price.'$' }}</span>
                                    <a href="/{{route('celebrity.details',['id' => $item->id])}}"
                                        class="ml-4 text-decoration-none text-white">
                                        <h3 class="m-0">{{ $item->name }}</h3>
                                    </a>
                                    <span class="ml-5">Athletes</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mr-2 mb-4" style="margin-top: 10px;">
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('getSingers') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:22px;"><b>Singers</b></a>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('getSingers') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:20px;"><b>See More</b></a>
                    </div>
                </div>
            </div>

            <div class="row-2 mb-4" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card-row">
                        <div class="row">
                            @foreach ($celebrity as $item)
                            <div class="col">
                                <a href="{{route('celebrity.details',['id' => $item->id])}}" class="text-decoration-none"><img
                                        class="inside mx-auto" src="{{asset('storage/images/'.$item->profile_img)}}" alt=""></a>
                                <div class="d-flex flex-column text-white mt-2">
                                    <span class="ml-5">{{ $item->price.'$' }}</span>
                                    <a href="{{route('celebrity.details',['id' => $item->id])}}"
                                        class="ml-4 text-decoration-none text-white">
                                        <h3 class="m-0">{{ $item->name }}</h3>
                                    </a>
                                    <span class="ml-5">Singers</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mr-2 mb-4" style="margin-top: 10px;">
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('getActors') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:22px;"><b>Actors</b></a>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('getActors') }}" class="btn ml-md-4"
                            style="text-decoration: none; color:white; font-size:20px;"><b>See More</b></a>
                    </div>
                </div>
            </div>

            <div class="row-2 mb-4" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card-row">
                        <div class="row">
                            @foreach ($celebrity as $item)
                            <div class="col">
                                <a href="{{route('celebrity.details',['id' => $item->id])}}" class="text-decoration-none"><img
                                        class="inside mx-auto" src="{{asset('storage/images/'.$item->profile_img)}}" alt=""></a>
                                <div class="d-flex flex-column text-white mt-2">
                                    <span class="ml-5">{{ $item->price.'$' }}</span>
                                    <a href="{{route('celebrity.details',['id' => $item->id])}}"
                                        class="ml-4 text-decoration-none text-white">
                                        <h3 class="m-0">{{ $item->name }}</h3>
                                    </a>
                                    <span class="ml-5">Actors</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
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

@section('scripts')
<script>
    $(document).ready(function(){
    $("#myModal").modal('show');
    });
</script>
@endsection