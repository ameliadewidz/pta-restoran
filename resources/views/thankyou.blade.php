<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
    <link rel="icon" href="{{ ('/img/logo2.PNG') }}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>
    {{-- header --}}
    <header>
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ ('img/logo.png') }}">
            Fli Cuisine
        </a>

        <ul class="navlist">
            <li>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/') }}">About Us</a>
                <a href="{{ route('menus.index') }}">Menu</a>
                <a href="{{ route('categories.index') }}">Categories</a>
                <a href="{{ route('reservations.step.one') }}" class="active">Reservation</a>
            </li>
        </ul>
    </header>
    {{-- end header --}}
    <div class="thankyou">
        <h1>Thank you!</h1>
        <p>Your reservation is ready.</p>
    </div>
</body>
</html>
