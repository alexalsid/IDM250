var hamburger = document.getElementById('hamburger');
var exit = document.getElementById('exit');
var exitSearch = document.getElementById('exit-search');
var search = document.getElementById('search');


function openMenu () {
    var menu = document.getElementById('nav');
    menu.classList.remove('close');
    menu.classList.add('open');
};




function closeMenu () {
    var menu = document.getElementById('nav');
    menu.classList.remove('open');
    menu.classList.add('close');

};

function openSearch () {

    var searchScreen = document.getElementById('search-screen');
    searchScreen.classList.remove('search');
    searchScreen.classList.add('open-search');

};


function closeSearch() {

    var searchScreen = document.getElementById('search-screen');
    searchScreen.classList.remove('open-search');
    searchScreen.classList.add('search');


};


hamburger.addEventListener('click', openMenu);
exit.addEventListener('click',closeMenu );

search.addEventListener('click', openSearch);
exitSearch.addEventListener('click', closeSearch);

