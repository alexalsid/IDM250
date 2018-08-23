var dropBox = document.getElementById('drop-box');


function expand () {

    var dropdown = document.getElementById('drop-down');
    var links = dropdown.children;
    var arrow = document.getElementById('down-arrow');

if (dropdown.classList.contains('no-display')) {
    dropdown.className = 'expand';
    for (i = 0; i < links.length; i++) {

        links[i].classList.add('display');
    }

    arrow.className = 'spin';


} else { 
    
    
dropdown.className = 'no-display';
    for (i = 0; i < links.length; i++) {

        links[i].classList.remove('display');
    }

    arrow.classList.remove('spin');
    arrow.classList.add('spin-out')

}};


    




dropBox.addEventListener('click', expand);


