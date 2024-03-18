<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant - Fli Cuisine</title>
    <link rel="icon" href="{{ ('img/logo2.png') }}" type="image/x-icon">

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
            <img src="{{ ('img/logo.png') }}">
            Fli Cuisine
        </a>

        <ul class="navlist">
            <li>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/') }}">About Us</a>
                <a href="{{ url('menu') }}">Menu</a>
                <a href="{{ url('categories') }}">Categories</a>
                <a href="{{ url('reservation') }}" class="active">Reservation</a>
            </li>
        </ul>
    </header>
    {{-- end header --}}

    {{-- form reservation --}}
    <div class="con">
        <form id="form1" method="">
            <h1>Personal Information</h1>
            
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Phone Number" required>
            <div class="btn-box">
                <button type="button" id="next1">Next</button>
            </div>
        </form>

        <form id="form2" method="">
            <h1>Book Information</h1>

            <input type="datetime-local">
            <input type="text" placeholder="Guest Number" required>

            <div class="btn-box">
                <button type="button" id="back1">Back</button>
                <button type="button" id="next2">Next</button>
            </div>
        </form>

        <form id="form3" method="">
            <h1>Reservation</h1>
            
            {{-- <label>Table</label> --}}
            <select name="" id="">
                <option value="">Table 1</option>
                <option value="">Table 2</option>
            </select>

            <div class="btn-box">
                <button type="button" id="back2">Back</button>
                <button type="button">Submit</button>
            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
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