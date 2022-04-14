document.addEventListener("DOMContentLoaded", function() {
    // Ajout d'une classe "active" à la div burger au clic
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('nav');
    var navOuvert = document.querySelector('.navOuvert');
    var esc = document.querySelector('input');
    var formulaire = document.querySelector('form');
    // demande qu'au clic, l'aspect de la navigation change
    navOuvert.style.display = "none";
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        nav.classList.toggle('ouvert');
        navOuvert.style.display = "block";
    });
    // formulaire.style.visibility = "hidden";
    // if (esc.value != "") {
    //     formulaire.style.visibility = "visible";
    // }
});