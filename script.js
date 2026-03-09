window.addEventListener("scroll", function(){
    let navbar = document.querySelector(".navbar");
    navbar.style.background = window.scrollY > 50 ? "#ffffff" : "transparent";
});