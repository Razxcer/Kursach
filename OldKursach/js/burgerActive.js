document.addEventListener('DOMContentLoaded', function() {

let burger = document.getElementById("burger");
let menu = document.getElementById("menu");

burger.addEventListener('click', ()=>{

    if(!menu.classList.contains("active"))
    {
        menu.style.left = "0%";
        menu.classList.add("active");
        console.log("Появилось");
    }
    else
    {
        menu.style.left = "-80%";
        menu.classList.remove("active");
        console.log("Убралось");
    }


});



});