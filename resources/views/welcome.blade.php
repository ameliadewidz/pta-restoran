<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fli Cuisine</title>
    <link rel="icon" href="{{ ('img/logo2.PNG') }}" type="image/x-icon">

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
            <img src="{{ ('img/logo.png') }}">
            Fli Cuisine
        </a>

        <ul class="navlist">
            <li>
                <a href="#home" class="active">Home</a>
                <a href="#about">About Us</a>
                <a href="#menu">Menu</a>
                <a href="{{ route('categories.index') }}">Categories</a>
                <a href="{{ route('reservations.step.one') }}">Reservation</a>
            </li>
        </ul>
    </header>
    {{-- end header --}}

    {{-- home --}}
    <section class="home" id="home">
        <div class="home-text">
            <h1>Where <span>Flavors </span> <br> Meets Delight<br></h1>
            <a href="{{ route('menus.index') }}" class="btn">Explore Menu
                <i class='bx bxs-right-arrow'></i>
            </a> {{-- arahkan ke page menu --}}
            <a href="{{ route('reservations.step.one') }}" class="btn2">Reservation</a> {{-- arahkan ke page reservasi --}}
        </div>

        <div class="home-img">
            <img src="{{ ('img/home.png') }}">
        </div>
    </section>
    {{-- end home --}}

    {{-- about us --}}
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ ('img/about-us.png') }}">
        </div>

        <div class="about-text">
            <h2>Creating Memories <br> One Meal at a Time.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, iusto quaerat? Corporis, perspiciatis nesciunt nisi hic accusantium
                repellendus qui tenetur.Asperiores cumque quos laboriosam distinctio
                corporis nisi esse, exercitationem quidem.
            </p>
        </div>
    </section>
    {{-- end about us --}}

    {{-- team --}}
    {{-- <section class="team" id="team">
        <div class="middle-text">
            <h4>Team</h4>
            <h2>Get to Know Us</h2>
        </div>

        <div class="team-content">
            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ullam soluta quam porro dolore quaerat atque natus.</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="{{ ('img/fadhil.PNG') }}">
                    </div>

                    <div class="text">
                        <h4>Ainur Fadhil</h4>
                        <h5>XII RPL 2</h5>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ullam soluta quam porro dolore quaerat atque natus.</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="{{ ('img/isti.PNG') }}">
                    </div>
                    <div class="text">
                        <h4>Adristi Adya Ahmad</h4>
                        <h5>XII RPL 2</h5>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ullam soluta quam porro dolore quaerat atque natus.</p>
                <div class="in-box">
                    <div class="bx-img">
                        <img src="{{ ('img/lala.PNG') }}">
                    </div>
                    <div class="text">
                        <h4>Amelia Dewi Dzakilah</h4>
                        <h5>XII RPL 2</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- end team --}}

    {{-- menu --}}
    <section class="menu" id="menu">
        <div class="middle-text">
            <h4>Menu</h4>
            <h2>Made with ♡</h2>
        </div>

        <div class="menu-content">
            @foreach ($menus as $menu)
            <div class="row">
                <img src="{{ Storage::url($menu->image) }}" alt="Image">
                <div class="in-text">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                        {{ $menu->name }}</h4>
                    <p class="leading-normal text-gray-700">
                        {{ $menu->description }}

                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">${{ $menu->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row-btn">
            <a href="{{ route('menus.index') }}" class="btn">All Menu
                <i class='bx bxs-right-arrow' ></i>
            </a> {{-- arahkan ke page menu --}}
        </div>
    </section>
    {{-- end menu --}}

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