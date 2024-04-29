"use strict";

document.addEventListener('DOMContentLoaded', function () {
    const boton = document.getElementById('boton');
    const menu = document.getElementById('menu');


    boton.addEventListener('click', function () {
        event.stopPropagation();
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function (event) {
        if (event.target !== menu && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });

    var map = L.map('map').setView([36.7211, -4.4214], 13); // Coordenadas aproximadas de Málaga
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Añadir marcadores para lugares importantes en Málaga
    var vialiaMarker = L.marker([36.7014, -4.4355]).addTo(map).bindPopup('Centro Comercial Vialia Málaga');
    var elPaloMarker = L.marker([36.7261, -4.3235]).addTo(map).bindPopup('El Palo Málaga');
    var calleLariosMarker = L.marker([36.7202, -4.4204]).addTo(map).bindPopup('Calle Larios');
    var catedralMarker = L.marker([36.7211, -4.4209]).addTo(map).bindPopup('Catedral de Málaga');
    var muelleUnoMarker = L.marker([36.7175, -4.4183]).addTo(map).bindPopup('Muelle Uno');


});
