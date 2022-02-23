const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu-navegacion');

hamburger.addEventListener('click', () => {
    console.log('MENU DE HAMBURGESA ACTIVADO');
    menu.classList.toggle('spread');
});

window.addEventListener('click', (e) => {
    if (menu.classList.contains('spread') && e.target !== menu && e.target !== hamburger) {
        menu.classList.toggle('spread');
    }
})