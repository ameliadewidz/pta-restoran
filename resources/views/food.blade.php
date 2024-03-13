<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food - Restaurant</title>

    {{-- icons --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/fb4411f49e.js" crossorigin="anonymous"></script>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
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

    {{-- food --}}
    <section class="menu" id="menu">
        <div class="middle-text">
            <h4>Food</h4>
            <h2>Made with ♡</h2>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="{{ ('img/makanan/creamy-shrimp.png') }}">
                <h3>Creamy Shrimp</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 65.000</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ ('img/makanan/waffle.png') }}">
                <h3>Waffle Berry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 45.000</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ ('img/makanan/ramen.png') }}">
                <h3>Classic Ramen</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 35.000</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ ('img/makanan/creamy-shrimp.png') }}">
                <h3>Creamy Shrimp</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 65.000</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ ('img/makanan/waffle.png') }}">
                <h3>Waffle Berry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 45.000</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <img src="{{ ('img/makanan/ramen.png') }}">
                <h3>Classic Ramen</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp. 35.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end food --}}

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