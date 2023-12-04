//CLICK HAMBURG MENU
const headerSecIcon = document.querySelector('.header__section-ham-menu')
const mobImg = document.querySelector('.icon-menu--big');
const crossIcon = document.querySelector('.icon-menu--cross');
const header = document.querySelector('.header__section');
const crossImg = document.querySelector('.crossIcon');
const menuMovil = document.querySelector('.header__mob-menu');

function expandirHeader() {
    header.classList.add('header-expand');
    menuMovil.classList.remove('inactive')
}
function cerrarHeader() {
    header.classList.remove('header-expand');
    menuMovil.classList.add('inactive')
}
const clickHeaderSecIcon = headerSecIcon.addEventListener('click', () => {
    mobImg.classList.toggle('inactive');
    crossIcon.classList.toggle('inactive');

    const hambInact = mobImg.classList.contains('inactive');
    const crossInact = crossIcon.classList.contains('inactive');

    if (hambInact) {
        expandirHeader()
    } else {
        cerrarHeader()
    }
})

let isMouseNearTop = false;
let isMouseOverHeader = false;

// Escuchar el evento de movimiento del ratón
window.addEventListener('mousemove', (e) => {
    // Verificar si el ratón está cerca de la parte superior de la ventana
    if (e.clientY < 20 || isMouseOverHeader) {
        isMouseNearTop = true;
    } else {
        isMouseNearTop = false;
    }
    toggleHeader();
});

header.addEventListener('mouseover', () => {
    isMouseOverHeader = true;
    toggleHeader();
});

header.addEventListener('mouseout', () => {
    isMouseOverHeader = false;
    toggleHeader();
});

// Función para mostrar u ocultar el header según la posición del ratón
function toggleHeader() {
    if (isMouseNearTop && window.scrollY > 0) {
        header.classList.add('show');
    } else {
        header.classList.remove('show');
    }
}


//Cambiar estilos cuando la navegacion cambia de una ruta a otra
// Obtén la URL de la página actual
var currentPage = window.location.pathname;

// Mapea la URL de la página actual a la etiqueta <a> correspondiente
var pageToLinkMap = {
    '/about': 'aboutLink',
    '/rooms-grid': 'roomsLink',
    '/offers': 'offersLink',
    '/contact': 'contactLink'
};

// Obtén el ID de la etiqueta <a> correspondiente a la página actual
var currentLinkId = pageToLinkMap[currentPage];

// Agrega la clase 'active' a la etiqueta <a> de la página actual
if (currentLinkId) {
    document.getElementById(currentLinkId).classList.add('active');
}