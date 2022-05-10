document.addEventListener("DOMContentLoaded", function() {
    // Ajout d'une classe "active" à la div burger au clic
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('nav');
    var navOuvert = document.querySelector('.navOuvert');
    // demande qu'au clic, l'aspect de la navigation change
    navOuvert.style.display = "none";
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        nav.classList.toggle('ouvert');
        navOuvert.style.display = "block";
    });

});

document.addEventListener("DOMContentLoaded", function() {

    var photosWrapper = document.querySelector('.js-photos');
    var photos = [...document.querySelectorAll('.js-photo')];
    var photoWidth = photos[0].offsetWidth; // 500px

    // position slide courante
    var position = 0;
    var minPosition = 0;
    var maxPosition = photos.length - 1;

    // Q2. Décalage d'une image vers la gauche
    function decaleGauche() {
        position++;

        // Q3. Détection qu'on a atteint la photo la plus à droite
        if (position > maxPosition) {
            retourDebut();
        } else {
            photosWrapper.style.left = position * -photoWidth + "px";
        }
    }

    function retourDebut() {
        position = minPosition;
        photosWrapper.style.left = "0px";
    }

    // Q4. décalage automatique vers la gauche toutes les 2 secondes
    setInterval(function() {
        decaleGauche();
    }, 2000);

});