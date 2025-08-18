// Barra desplegable en mobil 

const menuBoton = document.getElementById('menuPrincipal');
const menuDesplegable = document.getElementById('menuDesplegable');

menuBoton.addEventListener('click', () => {
    menuDesplegable.classList.toggle('hidden');
});
