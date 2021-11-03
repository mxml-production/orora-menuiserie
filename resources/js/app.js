require('./bootstrap');
require('alpinejs');

// header__menu__burger
const headerBurger = document.querySelector('.header__burger');
const headerMenu = document.querySelector('.header__menu');

headerBurger.addEventListener('click', ()=> {
    headerMenu.classList.toggle('active');
    document.querySelector('body').classList.toggle('noscroll')
});

// informations switch
const infoButtons = document.querySelectorAll('.informations__button');
const infoContent = document.querySelectorAll('.informations__content');
if(infoButtons && infoContent) {
    for(let i in infoButtons) {
        infoButtons[i].addEventListener('click', ()=> {
            // tous les button    
            for(let button of infoButtons) {
                button.classList.remove('active');
            }    
    
            // tous les contents
            for(let content of infoContent) {
                content.classList.remove('active');
            }
    
            //ajouter les class active
            infoButtons[i].classList.add('active');
            infoContent[i].classList.add('active'); 
        });
    }
}
