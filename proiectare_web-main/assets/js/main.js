const header = document.querySelector("header");
const menuToggler = document.querySelector(".menu-toggler");
const menu = document.querySelector(".menu__list");

const main = document.querySelector("main");


menuToggler.addEventListener("click", ()=>{
    menu.classList.toggle("opened");
    menuToggler.classList.toggle("active");
    header.toggleAttribute("data-overlay");

    if(window.scrollY>55){
        header.classList.toggle("scrolled");
    }
})

document.addEventListener("scroll", ()=>{
    if(window.scrollY>55){
        if(!menuToggler.classList.contains("active")){
            header.classList.add("scrolled");
        }
    }
    else {
        header.classList.remove("scrolled");
    }
})

const cat_btn = document.querySelector(".cat_btn");
const cat_menu = document.querySelector(".cat_menu");
const dropdown_arrow = document.querySelectorAll(".fa-caret-down");

cat_btn.addEventListener("click", ()=>{
    cat_menu.classList.toggle("expanded");
    dropdown_arrow[0].classList.toggle("upside_down");
})

const arhiva_btn = document.querySelector(".arhiva_btn");
const arhiva_menu = document.querySelector(".arhiva_menu");

arhiva_btn.addEventListener("click", ()=>{
    arhiva_menu.classList.toggle("expanded");
    dropdown_arrow[1].classList.toggle("upside_down");
})  







