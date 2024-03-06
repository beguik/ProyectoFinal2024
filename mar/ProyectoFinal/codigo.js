"use strict";

document.addEventListener('DOMContentLoaded', function () {

    var divLogo = document.getElementById('logo');
    divLogo.addEventListener('click', mostrarMenu);

});

function mostrarMenu() {
    var divsPequeños = document.querySelector('.menu');
    var estiloDisplay = window.getComputedStyle(divsPequeños).getPropertyValue('display');

    if (estiloDisplay === 'none') {
        divsPequeños.style.display = 'block';
        setTimeout(function() {
            divsPequeños.style.opacity = '10';
            divsPequeños.style.transform = 'translateX(0)';
        }, 80);
    } else {
        divsPequeños.style.opacity = '0';
        divsPequeños.style.transform = 'translateX(-25px)';
        setTimeout(function() {
            divsPequeños.style.display = 'none';
        }, 500);
    }
}