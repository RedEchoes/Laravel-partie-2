<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url("/storage/images/accueil.jpg");
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            font-weight:bold;
            text-shadow: 2px 2px 4px #000000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }

        .active-pink-4 input[type=text] {
            border: 2px solid #fff;
            border-radius: 25px;
            padding: 10px;
            box-shadow: 0 1px 0 0 #fff;
            background-color: transparent;
        }

        .active-pink-4 input::placeholder {
            color: white;
            font-weight:bold;
        }
        .active-pink-4 input:focus {
            border-color: pink;
            font-weight:bold;
        }

        .fa-search {
            margin-left: 5px;
          
        }
        button{
        background-color:transparent;
        border:0px;
        color:#fff;
        margin-top:15px;
        cursor:pointer;
      }
      .fa-search:hover{
          color:pink;
      }

        /*   .alert-danger{} */

    </style>
</head>
<body id="accueil" class="accueil" style="background:url(../../storage/images/<?php echo $randomImages->name;?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
    <div class="flex-center position-ref full-height">
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{ session('message')}}
        </div>
        @endif
<!-- 
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <h1>You are logged in!</h1> -->

        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
      
        <div class="content">
            <!-- Search form -->
            <form action="/search" method="POST" role="search" class="form-inline active-pink-4 col-lg-8">
                {{ csrf_field() }}
                <input class="form-control form-control-sm mr-3 w-75 active-pink-4 search" type="text" name="q"
                    placeholder="Search..." aria-label="Search">
                <button type="submit">
                    <i class="fas fa-search fa-2x" aria-hidden="true"></i>
                </button>
            </form>
        </div>

    </div>

</body>

</html>
