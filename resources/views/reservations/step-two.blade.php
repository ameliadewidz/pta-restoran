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
        <form method="POST" action="{{ route('reservations.store.step.two') }}">
            <h1>Table</h1>

            @csrf
            <select id="table_id" name="table_id"
            class="form-multiselect block w-full mt-1">
            @foreach ($tables as $table)
                <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                    {{ $table->name }}
                    ({{ $table->guest_number }} Guests)
                </option>
            @endforeach
            </select>
            
            @error('table_id')
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