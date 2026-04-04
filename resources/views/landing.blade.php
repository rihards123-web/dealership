<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
    <title>TouringCars</title>
</head>
<body>
    @include('components.nav-bar')
    <section class="landing">
        <div class="info-container">
            <h1>
                Quality, <br>
                Safety, <br>
                Transparency.
            </h1>

            <div class="info-container-inventory">
                <a href="">
                View full inventory
                </a>
                <img src="{{ Vite::asset('resources/images/keyboard_arrow_right.svg') }}" alt="arrow">  
            </div>
        </div>

         <div class="img-container">
            <img src="{{ Vite::asset('resources/images/porsche-model.png') }}" alt="Car">
        </div>
    </section>

    <section class="arrow-down">
        <img src="{{ Vite::asset('resources/images/keyboard_arrow_down.svg') }}" alt="Car">
    </section>

    <section class="landing-display-models">
        <div class="display-heading">
            <h2>
                Available Models
            </h2>
        </div>

        <div class="display-models">
            
        </div>
    </section>
</body>
</html>