@extends('layouts.auth')

@section('styles')
<style>
    .card {
        background: rgb(22, 22, 22);
        color: #E0B54C;
        font-size: 20px;
        font-weight: 800;
        max-height: 90px;
        margin: 60px auto;
        padding-top: 15px;
        border-radius: 2.25rem;
    }

    a.table-link {
        color: rgb(0, 142, 208);
    }

    .table-striped {
        border-bottom: #E0B54C;
        color: white;
    }

    .btn {
        border-radius: 2.25rem;
    }

    tr {
        text-align: center;
    }

    @media (min-width:992px) {
        img#first {
            display: none;
        }
    }

    @media (max-width:992px) {
        .card .card-upper {
            margin: 10 auto;
            max-height: 25vh;
            padding-top: 15px;
            font-size: 18px;
        }

        img#second {
            display: none;
        }
    }
</style>
@endsection

@section('logo')
@if (Request::url() == 'https://ciaostar.co.uk/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uk.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.es/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/spain.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ae/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/uae.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.al/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/albania.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.ie/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/ireland.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">

@elseif (Request::url() == 'https://ciaostar.co.in/dashboard/celebrity-profile')
<a href="/" class="navbar-brand" style="width: 200px;"><img src="{{asset('/images/india.jpeg')}}"
        style="width: 110px; height: 50px; transform: scaleY(1.5);" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<img id="first" class="ml-auto" src="{{asset('images/profile.png')}}" width="25px" alt="">
@elseif (Request::url() == 'https://ciaostar.co.fr/dashboard/celebrity-profile')
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
@if ($user_image)
<img id="first" class="ml-auto" src="{{asset('storage/images/'.$user_image->profile_img)}}" width="40px" style="border: 1px solid #E0B54C!important; border-radius: 2.25rem!important;" alt="">

@else
<img id="first" class="ml-auto" src="{{asset('/images/profile.png')}}" width="40px" style="border: 1px solid #E0B54C!important; border-radius: 2.25rem!important;" alt="">
@endif

@endif
@endsection

@section('body')
<div class="container-fluid" style="margin-top:40px!important; margin-left: 0px; margin-right:0px;">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-1 my-4">
            <div class="d-flex flex-column">
                <form method="POST" action="{{ route('profileimg') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group d-flex flex-column">
                        <img id="previewImg" class="profile" src="{{asset('/images/profile.png')}}" alt=""
                            style="width:200px!important; border:2px solid #f5c000; border-radius:6rem;">
                        <label for="profileimg" class="text-white">Edit Profile Picture</label>
                        <input type="file" name="profileimg" class="form-control" onchange="previewFile(this)"
                            style="border:none;">
                        <div class=" d-flex justify-content-center my-2"><button class="btn bg-warning text-white"
                                type="submit">Save</button></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-upper">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="d-flex flex-column align-items-center">
                            <span>178</span><span>Cameos</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="d-flex flex-column align-items-center">
                            <span>$2564.87</span><span>Earned</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped my-3">
        @for ($i = 0; $i < 6; $i++) <tr class="text-white">
            <td>Your Name</td>
            <td>Hey! I am Musician</td>
            <td><a href="" class="table-link">Edit</a></td>
            </tr>
            @endfor
    </table>

    <table class="table table-striped my-4">
        <tr class="text-white">
            <td>Order</td>
            <td>Videos</td>
            <td>Action</td>
            <td>For</td>
            <td>Date</td>
        </tr>
        @for ($i = 0; $i < 6; $i++) <tr class="text-white">
            <td><a href="/request/details" class="table-link">Active</a></td>
            <td class="w-50">
                <form method="POST" action="{{route('video.client')}}" enctype="multipart/form-data">
                    @csrf
                    <input name="image" type="file" accept="image/*" class="form-control" style="border: none;" />
                    <button type="submit" class="btn btn-warning mt-2 d-flex justify-content-center">
                        Post Video
                    </button>
                </form>
            </td>
            <td><a href="" class="btn btn-dark">Decline</a></td>
            <td>Harry</td>
            <td>19-10-20</td>
            </tr>
            @endfor
    </table>

</div>
@endsection

@section('scripts')
<script>
    function previewFile(input)
        {
            var file = $("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
</script>
@endsection