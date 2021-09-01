<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>Mateja's DDD</title>
</head>

<body>
    <header>
        <div class="header-first">
            <div class="container d-flex">
                <div>
                    <p>It's important where you buy.</p>
                </div>
                <div class="d-flex ms-auto">
                    <a href="{{ route('register') }}">Sign Up</a>
                    <a href="#">Log In</a>
                </div>
            </div>
        </div>
        <!-- NAV -->
        <nav>
            <div class="nav-container container d-flex">
                <h1>
                    <a href="/">Mateja's shop</a>
                </h1>
                <h2 href="#" class="menu-icon"><i class="fas fa-bars"></i></h2>
                <ul class="d-flex-custom header-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <p><i class="fas fa-user"></i> Mateja Najdanov S43/19</p>
            <p><i class="fas fa-phone-alt"></i> +381605988801</p>
            <p><i class="fas fa-envelope"></i> mnajdanov4319s@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Belgrade, Mali Mokri Lug</p>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

</html>
