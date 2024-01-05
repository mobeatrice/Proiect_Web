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

if(document.querySelector(".user_btn")){
    const user_btn = document.querySelector(".user_btn");
    const user_menu = document.querySelector(".user_menu");
    const dropdown_arrow = document.querySelector(".fa-caret-down");

    user_btn.addEventListener("click", ()=>{
        user_menu.classList.toggle("expanded");
        dropdown_arrow.classList.toggle("upside_down");
    })
}

const addComment = document.querySelector("#add-comment");

addComment.addEventListener("click", ()=>{
    const commentText = document.querySelector("#comment-text");
    if(commentText.value.trim()!=''){
        const commentSection = document.querySelector("#comment-section");

        const newComment = document.createElement("div");
        newComment.classList.add("comment__content", "col", "bg-neutral100", "b-neutral800");
        commentSection.appendChild(newComment);

        const newH3 = document.createElement("h3");
        newH3.classList.add("comment__author", "text-dark");
        newH3.innerHTML = '<i class="fa-solid fa-user"> </i> Username <?php //echo username editor?>';
        newComment.appendChild(newH3);

        const commentContent = document.createElement("p");
        commentContent.classList.add("comment__text", "fs-text-lg", "text-dark");
        commentContent.innerText = commentText.value.trim();

        commentText.value = '';
        newComment.appendChild(commentContent);
    }
    else {
        const commentForm = document.querySelector("#comment-form");
        const commentError = document.createElement("p");
        commentError.classList.add("error", "fs-text", "text-dark", "bg-accent300-op");
        commentError.innerText="Campul continut nu poate fi gol!!";
        commentForm.insertBefore(commentError, addComment);
        setTimeout(() =>{
            commentForm.removeChild(commentError);
        }, 10000);
    }
})