


//========================== Header Menu ========================== //
let hamburgerMenu = document.getElementsByClassName("hamburger-menu")[0]
let navbarCollaspe = document.getElementsByClassName("navbar-collapse")[0]
let overlay = document.getElementsByClassName("overlay")[0]
let collaspeClose = document.getElementsByClassName("collapse-close")[0]

hamburgerMenu.addEventListener("click",openMobileMenu)
collaspeClose.addEventListener("click",closeModal)
overlay.addEventListener("click",closeModal)


//============== Mobile Navigation Open ==============
function openMobileMenu(){
    navbarCollaspe.classList.add("show")
    overlay.classList.add("show-overlay")
    document.body.classList.toggle("overflow-hidden")
}

//============== Mobile Navigation Close ==============
function closeModal(){
    navbarCollaspe.classList.remove("show")
    overlay.classList.remove("show-overlay")
    document.body.classList.toggle("overflow-hidden")
}


//======= Close Modal By Escape Key
document.addEventListener("keydown",function(event){
    if(event.key == "Escape"){
        navbarCollaspe.classList.remove("show")
        overlay.classList.remove("show-overlay")
        document.body.classList.toggle("overflow-hidden")
    }
})



//======= Header Search


let searchIcon = document.querySelector('.navber-action-search');
let searchForm = document.querySelector('.search-panel');
let searchClose = document.querySelector('.search-panel-close');

searchIcon.addEventListener("click", function () {
    searchForm.classList.toggle("search-panel-open");

})
searchClose.addEventListener("click", function () {
    searchForm.classList.toggle("search-panel-open");

})
