const filtros = document.querySelector('.box_filtros'); //Variable designada para el boton de los filtros
const menu_filtros = document.querySelector('.bar'); //Variable designada para el menú desplegable

const opciones = document.querySelector('.opciones');
const menu_opcines = document.querySelector('.bar_opciones');

filtros.addEventListener('click', ()=>{
        menu_filtros.classList.toggle("click_filtros");
})

opciones.addEventListener('click', ()=>{
        menu_opcines.classList.toggle("click_opciones");
})