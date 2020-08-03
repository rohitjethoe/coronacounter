function openNav() {
    const navList = document.querySelector(".nav");

    if (!document.body.classList.contains("active")) {
        document.body.classList.add("active");
        document.body.classList.remove("unactive");
    } else {
        document.body.classList.remove("active");
        document.body.classList.add("unactive");
    }
}

const announcement = document.querySelector(".announcement-bar");
const header = document.querySelector("#header");
const nav = document.querySelector(".header");
const scroll = nav.offsetTop;

function stickyNav() {
    if (window.scrollY >= scroll) {
        announcement.style.paddingTop = (nav.offsetHeight) + "px";
        document.body.classList.add("sticky");
    } else {
        announcement.style.paddingTop = 5 + "px";
        document.body.classList.remove("sticky");
    }
}

window.addEventListener("scroll", stickyNav);

console.log(nav.offsetHeight + announcement.offsetHeight + 27.5);

var ansBtn1 = document.querySelector(".ans-1");
var ansBtn2 = document.querySelector(".ans-2");
var ansBtn3 = document.querySelector(".ans-3");
var ansBtn4 = document.querySelector(".ans-4");

function quizAns() {
    ansBtn1.classList.add("true-ans");
    ansBtn2.classList.add("false-ans");
    ansBtn3.classList.add("false-ans");
    ansBtn4.classList.add("false-ans");
}