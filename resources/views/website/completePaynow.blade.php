@extends('layouts.auth')

@section('styles')
<style>
    .outside {
        position: relative;
        width: 23vmin;
        height: 23vmin;
        background: #E0B54C;
        -webkit-clip-path: circle(50% at 50% 50%);
        clip-path: circle(50% at 50% 50%);
    }

    .inside {
        position: absolute;
        width: 21vmin;
        height: 21vmin;
        left: 6px;
        top: 5px;
        -webkit-clip-path: circle(50% at 50% 50%);
        clip-path: circle(50% at 50% 50%);
    }

    label {
        font-size: 18px;
        white-space: nowrap;
    }

    #request-form ::placeholder {
        background: transparent !important;
        color: white !important;
    }

    #request-form>input {
        color: white !important;
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/payment-now')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/france.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@else
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/russ.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@endif

@endsection


@section('body')
<div class="container text-white" style="margin-top:80px!important;">
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
        <h1>Complete your payment</h1>
        <p style="font-size: 16px;">(Will display informmation already provided to double check)</p>
    </div>
    <div class="row">
        <div class="col-6 col-md-3 offset-md-1">

            <div class="outside">
                <img class="inside" src="{{asset('images/2.jpg')}}" alt="">
            </div>
            <span class="d-flex justify-content-start text-white my-2 ml-md-4" style="font-size: 16px;"><strong>Burak
                    Özçivit</strong></span>
        </div>
        <div class="col-6 col-md-8 pt-4" style="font-size: 18px;">
            <div>From: {{$details->from}}</div>
            <div>to: {{$details->to}}</div>
            <div>Gift: {{$details->gift}}</div>
            <div>occasion: {{$details->occasion}}</div>
            <div>message: {{$details->ex_birth}}</div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <h3>Your Information</h3>
    </div>
    <div class="row">
        <div class="col-12 col-md-11 offset-md-1">
            <form method="POST" action="{{route('done.pay')}}" id="request-form">
                <div class="row gx-0" style="margin-right: 150px; margin-top: 25px;">
                    <div class="col-12 col-md-3">
                        <label for="email" class="form-label">Your email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" class="form-control" name="email" id="email"
                            style="background:transparent; border:2px solid #E0B54C; border-radius: 0px;"
                            placeholder="chris@example.com">
                    </div>
                </div>
                <div class="row gx-0" style="margin-right: 150px; margin-top: 25px;">
                    <div class="col-12 col-md-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" class="form-control ml-1" name="phone_number" id="phone_number"
                            style="background:transparent; border:2px solid #E0B54C; border-radius: 0px;"
                            placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                    {{-- <div class="d-flex justify-content-center"><button type="submit" class="btn btn-lg text-white"
                            style="background: #E0B54C; font-size: 18px; letter-spacing: 2px;">Proceed to Payment</button></div> --}}

                    <div class="d-flex justify-content-center"><a href="/congratulations" class="btn btn-lg text-white"
                            style="background: #f5c000; font-size: 18px; letter-spacing: 2px;">Pay Now</a></div>
                </div>
            </form>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h4>Safe and fast with Stripe</h4>
                {{-- <p style="font-size: 14px;">(Picture of payment Provider)</p> --}}
            </div>
        </div>
    </div>
</div>
@endsection
