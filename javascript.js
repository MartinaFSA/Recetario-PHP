//NAVIGATION BAR
//Hamburger menu
const navBar__hamburger = document.querySelector(".navBar__hamburger");
const navBar__menu = document.querySelector(".navBar__menu");

navBar__hamburger.addEventListener("click", openMenu);

function openMenu() {
    navBar__hamburger.classList.toggle("active");
    navBar__menu.classList.toggle("active");
    html.addEventListener('click', clickOutsideMenu);
}

//Search Box 
const lupita = document.querySelector(".navBar__search--lupita");
const inputBusqueda = document.querySelector(".navBar__search--input");
const submitBusqueda = document.querySelector(".navBar__search--submit");
const navBar__search = document.querySelector(".navBar__search");

function mostrarSearch() {
    inputBusqueda.classList.toggle("active");
    navBar__search.classList.toggle("active");
    submitBusqueda.classList.toggle("active");
};

//Modal inicie sesión
const modal = document.getElementById('modal__inicieSesion');
const modalClose = document.getElementById('close-modal');
var modalOpen = document.getElementsByClassName('modal__inicieSesion--button')[0];

modalOpen.addEventListener('click', openModalInicioSesion);

function openModalInicioSesion() {
    modal.style.display = 'block';
    document.body.style.overflowY = 'none';
}

modalClose.addEventListener('click', closeModal); 

function closeModal(){
    modal.style.display = "none";
    document.body.style.overflowY = "auto";
}

window.addEventListener('click', clickOutsideModal); 

function clickOutsideModal(evento){
    if(evento.target == modal){
        modal.style.display = "none";
    }
}