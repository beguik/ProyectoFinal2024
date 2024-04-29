"use strict";

document.addEventListener('DOMContentLoaded', function () {
    var divLogo = document.getElementById('logo');
    var loginBtn = document.getElementById('login');
    var registroBtn = document.getElementById('registro');
    var volverBtn = document.getElementById('volver');
    var festividadesBtn = document.getElementById('festividades');
    var historiaBtn = document.getElementById('historia');

    if (divLogo) {
        divLogo.addEventListener('click', function () {
            mostrarMenu();
        });
    }

    if (loginBtn) {
        loginBtn.addEventListener('click', function () {
            window.location.href = 'login.php';
        });
    }

    if (registroBtn) {
        registroBtn.addEventListener('click', function () {
            window.location.href = 'registrarse.php';
        });
    }

    if (volverBtn) {
        volverBtn.addEventListener('click', function () {
            window.location.href = 'index.php';
        });
    }

    festividadesBtn.addEventListener('click',function (){
        window.location.href = 'festividades.php';
    });

    historiaBtn.addEventListener('click',function (){
        window.location.href = 'historia.php';
    });

})
function mostrarMenu() {
    var divsPequeños = document.querySelector('.menu');
    if (divsPequeños) {
        var estiloDisplay = window.getComputedStyle(divsPequeños).getPropertyValue('display');

        if (estiloDisplay === 'none') {
            divsPequeños.style.display = 'block';
            setTimeout(function () {
                divsPequeños.style.opacity = '10';
                divsPequeños.style.transform = 'translateX(0)';
            }, 80);
        } else {
            divsPequeños.style.opacity = '0';
            divsPequeños.style.transform = 'translateX(-25px)';
            setTimeout(function () {
                divsPequeños.style.display = 'none';
            }, 500);
        }
    }
}


