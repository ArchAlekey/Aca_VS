const btn__filtros = document.querySelector('.btn__filtros'); //Variable designada para el boton de los filtros
const menu_filtros = document.querySelector('.nav__bar_filtros'); //Variable designada para el menú desplegable

const btn__opciones = document.querySelector('.btn__config');
const menu_opcines = document.querySelector('.nav__bar_opciones');

btn__filtros.addEventListener('click', ()=>{
        menu_filtros.classList.toggle("show__bar_filtros");
})

btn__opciones.addEventListener('click', ()=>{
        menu_opcines.classList.toggle("show__bar_opciones");
})