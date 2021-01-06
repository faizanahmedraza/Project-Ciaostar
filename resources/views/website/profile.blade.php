@extends('layouts.auth')

@section('styles')
    <style>
      ::placeholder {
          background: transparent!important;
          color: white!important;
          font-size: 22px;
      }
    </style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/dashboard/profile')
<a href="" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/dashboard/profile')
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
    <div class="container-fluid" style="margin-top:80px!important;">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-2 my-4">
                <div class="d-flex flex-column">
                    <form method="POST" action="{{ route('profileimg.prof') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <img id="previewImg" class="profile" src="{{asset('/images/profile.png')}}" alt=""
                                style="width:200px!important; border:2px solid #f5c000; border-radius:6rem;">
                            <label for="profileimg" class="text-white">Edit Profile Picture</label>
                            <input type="file" name="profileimg" class="form-control" onchange="previewFile(this)"
                                style="border:none;">
                            <div class="d-flex justify-content-start my-2"><button class="btn bg-warning text-dark"
                                    type="submit">Save</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="">
                    <input type="text" class="form-control form-control-lg form2" placeholder="Your Name" style="background: transparent; border: none; border-bottom: 3px solid #f5c000; border-radius:0px;">
                    <input type="text" class="form-control form-control-lg form2" placeholder="Your Bio" style="background: transparent; border: none; border-bottom: 3px solid #f5c000; border-radius:0px;">
                    <input type="text" class="form-control form-control-lg form2" placeholder="Your Username" style="background: transparent; border: none; border-bottom: 3px solid #f5c000; border-radius:0px;">
                </form>
                <div class="row my-2">
                    <div class="col-10 col-md-10">
                        <div class="text-white" style="font-size: 20px;"><h4>Historical Order</h4></div>
                    </div>
                    <div class="col-2 col-md-2">
                        <div class="text-white" style="font-size: 20px;"><span>V</span></div>
                    </div>
                </div>
                <table class="table table-borderless text-white" style="font-size: 16px;">
                    <thead>
                        <tr>
                            <td>Celebrity Name</td>
                            <td>From</td>
                            <td>To</td>
                            <td>Occasion</td>
                            <td>Requested For</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 6; $i++)
                            <tr>
                                <td>Paul</td>
                                <td>Harry</td>
                                <td>Linda</td>
                                <td>Birthday Wishes</td>
                                <td>Someone Else</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection