var hamburger = document.getElementById('hamburger');
var exit = document.getElementById('exit');
var exitSearch = document.getElementById('exit-search');
var search = document.getElementById('search');



function openMenu () {
    var menu = document.getElementById('nav-mobile');
    menu.classList.remove('close');
    menu.classList.add('open');
    body[0].classList.add('menu-open')
};




function closeMenu () {
    var menu = document.getElementById('nav-mobile');
    var body = document.getElementsByTagName('body');
    menu.classList.remove('open');
    menu.classList.add('close');
    body[0].classList.remove('menu-open')

};

function openSearch () {

    var searchScreen = document.getElementById('search-screen');
    var body = document.getElementsByTagName('body');
    searchScreen.classList.remove('search');
    searchScreen.classList.add('open-search');
    body[0].classList.add('menu-open')

};


function closeSearch() {

    var searchScreen = document.getElementById('search-screen');
    searchScreen.classList.remove('open-search');
    searchScreen.classList.add('search');
    body[0].classList.remove('menu-open')


};


hamburger.addEventListener('click', openMenu);
exit.addEventListener('click',closeMenu );

search.addEventListener('click', openSearch);
exitSearch.addEventListener('click', closeSearch);

