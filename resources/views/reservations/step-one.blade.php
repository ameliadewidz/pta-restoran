<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant - Reservation</title>

    {{-- icons --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/fb4411f49e.js" crossorigin="anonymous"></script>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/reserve.css') }}">
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
                <a href="{{ route('menus.index') }}">Menu</a>
                <a href="{{ route('categories.index') }}">Categories</a>
                <a href="{{ route('reservations.step.one') }}">Reservation</a>
            </li>
        </ul>
    </header>
    {{-- end header --}}

    {{-- form reservation --}}
    <div class="con">
        <form id="form1" method="POST" action="{{ route('reservations.store.step.one') }}">
            <h1>Personal Information</h1>

            @csrf
            <input type="text" placeholder="First Name" id="first_name" name="first_name"
                value="{{ $reservation->first_name ?? '' }}"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            @error('first_name')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror

            <input type="text" id="last_name" placeholder="Last Name" name="last_name"
            value="{{ $reservation->last_name ?? '' }}"
            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            @error('last_name')
            <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror

            <input type="email" placeholder="E-Mail" id="email" name="email"
                value="{{ $reservation->email ?? '' }}"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            @error('email')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror              

            <input type="text" placeholder="No HP" id="tel_number" name="tel_number"
                value="{{ $reservation->tel_number ?? '' }}"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            @error('tel_number')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror

            <input type="datetime-local" id="res_date" name="res_date"
                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"/>
            <span class="text-xs">Pilih antara pukul 17:00-23:00.</span>
            @error('res_date')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror

            <input type="number" placeholder="Jumlah Tamu" id="guest_number" name="guest_number"
                value="{{ $reservation->guest_number ?? '' }}"/>

            @error('guest_number')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror

            <div class="btn-box">
                <button type="submit" id="next2">Next</button>
            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>

        </div>
    </div>
    {{-- end form reservation --}}

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