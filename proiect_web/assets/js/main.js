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

const user_btn = document.querySelector(".user_btn");
const user_menu = document.querySelector(".user_menu");
const dropdown_arrow = document.querySelector(".fa-caret-down");

user_btn.addEventListener("click", ()=>{
    user_menu.classList.toggle("expanded");
    dropdown_arrow.classList.toggle("upside_down");
})