@extends('layouts.main')

@section('styles')
<style>
    .inside {
        width: 135px;
        border-radius: 50%;
        padding: 5px;
        background: #ffbb00;
    }

    input.form1,
    input.form1:focus,
    input.form1:active {
        background: transparent !important;
        border: 2px solid #f5c000 !important;
        outline: none !important;
        box-shadow: none !important;
        color: white;
        border-radius: 0px;
    }

    /* textarea#instructions.w-75:focus{
        background: transparent!important;
        border: 2px solid #f5c000!important;
        color: white;
    } */
    textarea {
        border: 2px solid #f5c000;
        background: black;
        color: white;
    }

    textarea:focus {
        border: 2px solid #f5c000;
        background: white;
        color: black;
    }

    #request-form ::placeholder {
        background: transparent !important;
        color: white !important;
        text-align: center;
    }

    #request-form>input {
        color: white !important;
    }

    label {
        padding-top: 10px;
    }

    #myModal {
        z-index: 5000;
        background: black;
        color: #E0B54C;
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
        top: 20;
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

    .list-group-item {
        background: transparent;
        padding: 2px;
    }

    a {
        color: white;
        text-decoration: none;
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.in/request/form')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt="">

</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/request/form')
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
<div class="modal" id="myModal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-body">
            <div class="card" style="background: black;">
                <div class="container text-white">
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <h1 style="font-size: 36px;">How does it work</h1>
                        <button type="button" class="btn close ml-5" data-dismiss="modal"
                            aria-label="Close">Close</button>
                    </div>
                    <div class="d-flex justify-content-center flex-row my-5" style="font-size: 20px; color:#E0B54C;">
                        <i class="fa fa-book fa-3x"></i>
                        <span class="ml-3">Lorem, ipsum dolor sit amet consectetur adipisicing <br> elit. ipsum dolor
                            sit amet consectetur adipisicing</span>
                    </div>
                    <div class="d-flex justify-content-center flex-row my-5" style="font-size: 20px; color:#E0B54C;">
                        <i class="fa fa-envelope fa-3x"></i>
                        <span class="ml-3">Lorem, ipsum dolor sit amet consectetur adipisicing <br> elit. ipsum dolor
                            sit amet consectetur adipisicing</span>
                    </div>
                    <div class="d-flex justify-content-center flex-row my-5" style="font-size: 20px; color:#E0B54C;">
                        <i class="fa fa-mobile fa-3x"></i>
                        <span class="ml-3">Lorem, ipsum dolor sit amet consectetur adipisicing <br> elit. ipsum dolor
                            sit amet consectetur adipisicing</span>
                    </div>
                    <div class="d-flex justify-content-center flex-row my-5" style="font-size: 20px; color:#E0B54C;">
                        <i class="fa fa-mobile-alt fa-3x"></i>
                        <span class="ml-3">Lorem, ipsum dolor sit amet consectetur adipisicing <br> elit. ipsum dolor
                            sit amet consectetur adipisicing sit amet <br> consectetur adipisicing</span>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        {{-- <button class="btn btn-lg" style="color: white; background: #f5c000; font-size: 20px;">Return to Homepage</button> --}}
                        <a href="/" class="btn btn-lg"
                            style="color: white; background: #E0B54C; font-size: 20px;">Return to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top:80px!important;">
    <div class="d-flex ml-3 my-3">
        <div class="btn-group">
            <a href="{{ route('celebrity.details') }}" class="btn btn-primary"
                style="background: white; color:#E0B54C; border-radius: 2rem; font-size: 18px;"><i
                    class="fa fa-arrow-left"></i></a>
            <a href="{{ route('celebrity.details') }}" class="btn btn-primary text-white ml-1 border-0"
                style="background: transparent; font-size: 18px;">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 offset-md-1">
            <div class="d-flex flex-column justify-content-end align-items-center text-white" style="margin-top: 40px;">
                <h1 style="letter-spacing: 4px;">Request for {{$show->name}}</h1>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <img class="inside" src="{{asset('images/2.jpg')}}" alt="">
        </div>
    </div>
    <form method="POST" action="/request/form" id="request-form" enctype="multipart/form-data">
        @csrf
        <div class="row" style="margin-left: 70px; margin-right: 100px; margin-top: 20px;">
            <div class="col-12 col-md-8 offset-md-2">
                <select class="form-select bg-warning text-dark" name="who" id="who" style="border-radius: 0px; font-size:18px;">
                    <option selected>Who is it for?</option>
                    <option value="Me">Me</option>
                    <option value="SomeOne">SomeOne Else</option>
                    <option value="Bussiness">Bussiness Brand</option>
                </select>
            </div>
        </div>
        <div class="row" style="margin-left: 120px; margin-right: 100px; margin-top: 25px;">
            <div class="col-2 col-md-2 offset-md-1">
                <label for="to" class="form-label text-white d-flex justify-content-end">TO</label>
            </div>
            <div class="col-4 col-md-3">
                <input type="text" class="form-control w-50 form1" name="to" id="to" placeholder="Name">
            </div>
            <div class="col-1 col-md-1">
                <label for="from" class="form-label text-white">FROM</label>
            </div>
            <div class="col-4 col-md-3">
                <input type="text" class="form-control w-50 form1" name="from" id="from" placeholder="Name">
            </div>
        </div>
        <div class="row" style="margin-left: 160px; margin-right: 100px; margin-top: 25px;">
            <div class="col-12 col-md-2 offset-md-1">
                <label for="occasion" class="form-label text-white d-flex justify-content-end">OCCASION</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control w-100 form1" name="occasion" id="occasion"
                    placeholder="Occasion">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="check" style="color: white;">GIFT
                <input type="checkbox" name="gift" id="gift" checked="checked">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="row" style="margin-left: 160px; margin-right: 100px; margin-top: 25px;">
            <div class="col-6 col-md-2 offset-md-1">
                <label for="ex_birth" class="form-label form-label-lg text-white d-flex justify-content-end"
                    style="font-size: 18px;">EX.Birthday</label>
            </div>
            <div class="col-6 col-md-8">
                <textarea class="w-75" name="ex_birth" id="ex_birth" rows="3"></textarea>
            </div>
        </div>
        <div class="row" style="margin-left: 200px; margin-right: 200px; margin-top: 25px; color: #E0B54C;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quasi tempore corporis eius nisi, impedit
                dolorem perspiciatis ratione non cumque!</p>
        </div>
        <div class="d-flex justify-content-center">
            <label class="check" style="color: white;">Donot show on Ciaostar
                <input type="checkbox" name="show_ciaostar" id="show_ciaostar" checked="checked">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="row" style="margin-left: 200px; margin-right: 200px; margin-top: 15px; color: #E0B54C;">
            <div class="col-12 col-md-2 offset-md-1">
                <label for="user_email" class="form-label text-white"
                    style="white-space: nowrap; font-size: 18px;">Celebrity Email</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" class="form-control w-100 form1" name="user_email" id="user_email"
                    placeholder="chris@email.com">
            </div>
        </div>

        <div class="row" style="margin-left: 200px; margin-right: 200px; margin-top: 15px; color: #E0B54C;">
            <div class="col-12 col-md-2 offset-md-1">
                <label for="phone_number" class="form-label text-nowrap text-white" style="font-size: 16px;">Telephone
                    Number</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" class="form-control w-100 form1" name="phone_number" id="phone_number"
                    placeholder="Phone Number">
            </div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-lg text-white"
                    style="background: #f5c000; font-size: 18px; letter-spacing: 2px;">Proceed to Payment</button></div>
        </div>
    </form>
    {{-- <div class="d-flex justify-content-center my-4">
        <div class="d-flex justify-content-center"><a href="{{ route('payment.now')}}" class="btn btn-lg text-white"
    style="background: #E0B54C; font-size: 18px; letter-spacing: 2px;">Proceed to Payment</a>
</div>
</div> --}}
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

@section('scripts')
<script>
    $(document).ready(function(){
    $("#myModal").modal('show');
    });
</script>
@endsection