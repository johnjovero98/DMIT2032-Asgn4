const menuButton = document.querySelector('.menu-bttn');
let menuItem = document.querySelectorAll('.menu-item')

console.log(menuItem)


menuButton.addEventListener("click", function(){
    const menuNav = document.querySelector('nav')
    menuNav.classList.toggle('show-nav')
})
