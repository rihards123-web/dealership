<head>
      @vite('resources/css/navbar.css')
</head>
<div class="nav-bar-container">
   <div class="nav-bar-logo">
        <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"></a>
   </div>
   <div class="nav-bar-links">
     <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">List your car</a></li>
        <li><a href="#">Inventory</a></li>
    </ul>
   </div>
</div>


<div class="mobile-nav-bar-container">
    <div class="mobile-nav-bar-hamburger">
       <button type="button" id="hamburger-menu">
            <img src="{{ Vite::asset('resources/images/hamburger_menu.svg') }}" alt="Logo">
        </button>
   </div>
    <div class="mobile-nav-bar-logo">
        <a href="#"><img src="{{ Vite::asset('resources/images/mobile_logo.svg') }}" alt="Logo"></a>
   </div>

    <div class="empty"></div>

</div>

  <div class="mobile-nav-bar-links" id="dropdown-list">
     <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">List your car</a></li>
        <li><a href="#">Inventory</a></li>
    </ul>
   </div>