

document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const dropdownList = document.getElementById("dropdown-list");

    if (hamburgerMenu && dropdownList) {
        hamburgerMenu.addEventListener('click', function(event) {
            event.stopPropagation();
            dropdownList.classList.toggle('is-open');
        });

        dropdownList.addEventListener('click', function(event) {
            event.stopPropagation();
        });

        document.addEventListener('click', function() {
            dropdownList.classList.remove('is-open')
        })
    }
});