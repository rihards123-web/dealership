<head>
      @vite('resources/css/footer.css')
</head>

<div class="footer-container">

    <hr>

    <div class="footer-top-container">
        <div class="top-left-container">
            <div class="footer-img">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </div>

            <div class="footer-moto">
                <p>Quality, Safety, Transparency.</p>
            </div>

            <div class="footer-socials">
                <a href="#"><img src="{{ Vite::asset('resources/images/instagram.svg') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/facebook.svg') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/youtube.svg') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/whatsapp.svg') }}" alt=""></a>
            </div>
        </div>

        <div class="top-middle-container">
            <div class="footer-contacts">
                <p>Contacts</p>
            </div>

            <div class="footer-whatsapp">
                <p>WhatsApp</p>
            </div>

              <div class="footer-email">
                <p>contato@touringcars.com</p>
            </div>

             <div class="footer-number">
                <p>(81) 3612-9411</p>
            </div>
        </div>

        <div class="top-right-container">
            <div class="footer-subscribe">
                <p>Subscribe</p>
            </div>

             <div class="footer-latest-news">
                <p> Enter your email to receive the <br> 
                    latest news from Touring Cars.</p>
            </div>

              <div class="footer-enter-email">
                <form action="">
                    <input type="email" placeholder="E-mail" required id="email-input">
                    <button type="submit" id="submit-button"><img src="{{ Vite::asset('resources/images/arrowright.svg') }}" alt=""></button>
                </form>
            </div>

        </div>
    </div>

    <div class="footer-bottom-container">
        <p>© 2026 All rights reserved.</p>
    </div>
</div>