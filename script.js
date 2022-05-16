document.addEventListener("DOMContentLoaded", function() {
    // Ajout d'une classe "active" à la div burger au clic
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('nav');
    var navOuvert = document.querySelector('.navOuvert');
    // demande qu'au clic, l'aspect de la navigation change
    navOuvert.style.display = "none";
    burger.addEventListener('click', () => {
        navOuvert.style.display = "none";
        burger.classList.toggle('active');
        nav.classList.toggle('ouvert');

        if (burger.classList.contains('active')) {
            navOuvert.style.display = "block";
        }
    });

});

document.addEventListener("DOMContentLoaded", function() {

    var photosWrapper = document.querySelector('.js-photos');
    var photos = [...document.querySelectorAll('.js-photo')];
    var photoWidth = photos[0].offsetWidth;

    // position slide courante
    var position = 0;
    var minPosition = 0;
    var maxPosition = photos.length - 1;

    var btnDecaleGauche = document.querySelector('.arrowRight');
    var btnDecaleDroite = document.querySelector('.arrowLeft');

    // Q2. Décalage d'une image vers la gauche
    function decaleGauche() {
        position++;

        // Q3. Détection qu'on a atteint la photo la plus à droite
        if (position > maxPosition) {
            retourDebut();
            setTimeout(function() {
                document.querySelector('.js-photos').classList.remove('no-anime')
                decaleGauche()
            }, 20);
        } else {
            photosWrapper.style.left = position * -photoWidth + "px";
        }
    }

    function decaleDroite() {
        position--;

        // Q3. Détection qu'on a atteint la photo la plus à droite
        if (position < minPosition) {
            retourFin();
            setTimeout(function() {
                document.querySelector('.js-photos').classList.remove('no-anime')
                decaleDroite
            }, 20);
        } else {
            photosWrapper.style.left = position * -photoWidth + "px";
        }
    }

    function retourDebut() {
        position = minPosition;
        document.querySelector('.js-photos').classList.add('no-anime');
        photosWrapper.style.left = position * -photoWidth + "px";


    }

    function retourFin() {
        position = maxPosition;
        document.querySelector('.js-photos').classList.add('no-anime');
        photosWrapper.style.left = position * -photoWidth + "px";

    }


    btnDecaleGauche.addEventListener('click', decaleGauche);
    btnDecaleDroite.addEventListener('click', decaleDroite);
});