<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        html,
        body {
            max-width: 75%;
            margin: 0rem auto;
            overflow-x: hidden;
            color: white;
        }

        h1 {
            font-size: 40px;
        }
        .card {
            background: black;
            height: 100vh;
            border-radius: 0px;
        }

        @media (max-width:992px) {

            html,
            body {
                max-width: 100%;
                overflow-x: hidden;
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                <h1 style="color: #E0B54C;">Congrajulations</h1>
                <h1 style="color: #E0B54C;">Your Payment has been made etc...</h1>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 300px;">
                {{-- <button class="btn btn-lg" type="button" style="color: white; background: #f5c000; font-size: 20px;">Next</button> --}}
                <a href="/" class="btn btn-lg" type="button" style="color: white; background: #E0B54C; font-size: 20px;">Go to Home</a>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>