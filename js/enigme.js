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
    const filtre = document.querySelector('.filtres');
    const esR = document.querySelector('.EsRimg');
    // filtre.addEventListener('change', (event) => {
    //     const result = document.querySelector('.result');
    //     result.textContent = `You like ${event.target.value}`;
    // });

});