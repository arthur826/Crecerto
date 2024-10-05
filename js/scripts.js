//Menu Fixo

const header = document.getElementById('js-header');

function fixedMenu() {
    if (window.pageYOffset > 80) {
        header.classList.add('fixed-menu');
    } else {
        header.classList.remove('fixed-menu');
    }
}

document.addEventListener('scroll', fixedMenu);



//Menu Mobile
const btnMenu = document.getElementById('js-btn-menu-mobile');
const overlayMenu = document.querySelector('.js-overlay');

function openMenuMobile() {
    document.documentElement.classList.toggle('menu-opened');
}

btnMenu.addEventListener('click', openMenuMobile);
overlayMenu.addEventListener('click', openMenuMobile);



//Elemento filho

/*
//Submenu Dropdown
const btnDropdownInstitucional = document.querySelector('.js-btn-institucional'); //elemento que vai ser clicado
//console.log(btnDropdownInstitucional);

const btnDropdownLinhasDeCredito = document.querySelector('.js-btn-linhas-de-credito'); //elemento que vai ser clicado
//console.log(btnDropdownLinhasDeCredito);

const btnDropdownFaleConosco = document.querySelector('.js-btn-fale-conosco'); //elemento que vai ser clicado
//console.log(btnDropdownFaleConosco);

const allDropdownInstitucional = document.querySelector(".js-btn-institucional .sub-menu"); //local onde deve ser colocado a classe active e toggle
//console.log(allDropdownInstitucional);

const allDropdownLinhasDeCredito = document.querySelector(".js-btn-linhas-de-credito .sub-menu"); //local onde deve ser colocado a classe active e toggle
//console.log(allDropdownLinhasDeCredito);

const allDropdownFaleConosco = document.querySelector(".js-btn-fale-conosco .sub-menu"); //local onde deve ser colocado a classe active e toggle
//console.log(allDropdownFaleConosco);




function openDropdownInstitucional() {
    allDropdownInstitucional.classList.add('active');
}

function openDropdownlinhasDeCredito() {
    allDropdownLinhasDeCredito.classList.add('active');
}

function openDropdownFaleConosco() {
    allDropdownFaleConosco.classList.add('active');
}

function closeDropdownInstitucional() {
    allDropdownInstitucional.classList.remove('active');
}

function closeDropdownlinhasDeCredito() {
    allDropdownLinhasDeCredito.classList.remove('active');
}

function closeDropdownFaleConosco() {
    allDropdownFaleConosco.classList.remove('active');
}



btnDropdownInstitucional.addEventListener('mouseover', openDropdownInstitucional);
btnDropdownLinhasDeCredito.addEventListener('mouseover', openDropdownlinhasDeCredito);
btnDropdownFaleConosco.addEventListener('mouseover', openDropdownFaleConosco);

allDropdownInstitucional.addEventListener('mouseleave', closeDropdownInstitucional) && btnDropdownInstitucional.addEventListener('mouseout', closeDropdownInstitucional);
allDropdownLinhasDeCredito.addEventListener('mouseleave', closeDropdownlinhasDeCredito) && btnDropdownLinhasDeCredito.addEventListener('mouseout', closeDropdownlinhasDeCredito);
allDropdownFaleConosco.addEventListener('mouseleave', closeDropdownFaleConosco) && btnDropdownFaleConosco.addEventListener('mouseout', closeDropdownFaleConosco);


*/





//Modal Home Page

const btnModal = document.querySelector('.js-open-modal');
const btnCloseModal = document.querySelector('.js-close-modal');
const modal = document.getElementById('js-modal');

function openModal() {
    modal.classList.add('active');
}

function closeModal() {
    modal.classList.remove('active');
    stopVideo();
}



btnModal.addEventListener('click', openModal);
btnCloseModal.addEventListener('click', closeModal);




    