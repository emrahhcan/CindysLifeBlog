'use strict';

const active = document.querySelector('.dropdown');
const dropdownMenu = document.querySelector('.dropdown-content');
const dropdown = document.getElementById('dropdown');

const openMenu = () => {
    let menuToggler = dropdownMenu.classList;
    menuToggler.toggle('show');

    if(menuToggler.contains('show')) {
        active.style.backgroundColor = '#e83e8c';
    } else {
        active.style.backgroundColor = '#2c3e50';
    }
};

dropdown.addEventListener('click', openMenu);