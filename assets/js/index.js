const menuButton = document.querySelector('.menu-bttn');
let menuItem = document.querySelectorAll('.menu-item');

// add click event for menu items in mobile view
menuButton.addEventListener("click", function(){
    const menuNav = document.querySelector('nav')
    menuNav.classList.toggle('show-nav')
})


// Add chevron to nav list items with sub menu
const chevronSVGHTML = `<svg  height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 407.437 407.437" xml:space="preserve"> <polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/>
                    </svg>`
for (i = 0; i < menuItem.length; i++) {
    if (menuItem[i].classList.contains('menu-item-has-children')) {
        let menuLink = menuItem[i].childNodes[0]    
        menuLink.insertAdjacentHTML('beforeend',chevronSVGHTML)
    }
}