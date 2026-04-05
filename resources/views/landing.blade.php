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
        <div class="models-content">
            <div class="display-heading">
                <h2>Models</h2>
            </div>

            <div class="display-models">
                <div class="display-models-combustion">
                    <img src="{{ Vite::asset('resources/images/Combustion.png') }}" alt="Combustion" id="car_image">
                </div>
                <div class="display-models-hybrid">
                    <img src="{{ Vite::asset('resources/images/Hybrid.png') }}" alt="Hybrid" id="car_image">
                </div>
                <div class="display-models-electric">
                    <img src="{{ Vite::asset('resources/images/Electric.png') }}" alt="Electric" id="car_image">
                </div>
            </div>
        </div>
    </section>

    <section class="email-section">
        <div class="email-section-info-text">
            <h2>Are you looking for a specific model?</h2>
            <p>Leave your contact information so our team can get in touch with you!</p>
        </div>

        <div class="email-container">
                <form action="">
                    <div class="form-row">
                        <input type="text" name="" id="form-input" placeholder="Model" required>
                        <input type="text" name="" id="form-input" placeholder="Name" required>
                        <input type="email" name="" id="form-input" placeholder="E-mail" required>
                        <input type="tel" name="" id="form-input" placeholder="Number" required>
                        <input type="submit" name="" id="form-submit">
                    </div>
                   
                    <div class="checkbox-row">
                           <label for="">
                                <input type="checkbox"> 
                                  By LGPD terms, I agree to provide the data above so that Touring Cars can contact me to
                                  present services. Your name, email, and phone number will be used
                                  in accordance with our Privacy Policy.
                            </label>
                    </div>
                </form>
        </div>
    </section>
</body>
</html>