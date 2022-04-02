document.addEventListener("DOMContentLoaded", function() {

    var burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });

});