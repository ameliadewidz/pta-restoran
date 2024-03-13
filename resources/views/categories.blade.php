<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Categories - Restaurant</title>

    {{-- icons --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/fb4411f49e.js" crossorigin="anonymous"></script>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/categories.css') }}">
</head>
<body>
    {{-- header --}}
    <header>
        <a href="{{ url('/') }}" class="logo">
            <i class="fa-solid fa-utensils"></i>
            Restaurant
        </a>

        <ul class="navlist">
            <li>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/') }}">About Us</a>
                <a href="{{ url('menu') }}">Menu</a>
                <a href="{{ url('categories') }}" class="active">Categories</a>
                <a href="{{ url('reservation') }}">Reservation</a>
            </li>
        </ul>
    </header>
    {{-- end header --}}

    {{-- categories --}}
    <section class="team" id="team">
        <div class="middle-text">
            <h4>Categories</h4>
            <h2>Taste the Joy</h2>
        </div>

        <div class="team-content">
            <div class="box">
                <div class="in-box">
                    <div class="bx-img">
                        <img src="{{ ('img/food.png') }}">
                    </div>

                    <div class="text">
                        <a href="{{ url('food') }}">
                            <h4>Food</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="in-box">
                    <div class="bx-img">
                        <img src="{{ ('img/beverages.png') }}">
                    </div>
                    <div class="text">
                        <a href="{{ url('beverages') }}">
                            <h4>Beverages</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end categories --}}

    {{-- footer --}}
    <section class="contact" id="contact">
        <div class="contact-content">
            <div class="details">
                <div class="main-d">
                    <a href="https://smktelkom-mks.sch.id/" target="_blank">
                        <i class="fa-solid fa-location-dot"></i>SMK Telkom Makassar
                    </a>
                </div>

                <div class="main-d">
                    <a href="https://www.instagram.com/deuxtreinta" target="_blank">
                        <i class="fa-solid fa-user-group"></i>XII RPL 2, 23/24
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end footer --}}

    {{-- link to js --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>