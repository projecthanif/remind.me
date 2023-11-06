
let navBar = document.getElementById("navbar");
let navClose = document.getElementById("close");

navBar.addEventListener("click", navToggle);
navClose.addEventListener("click", navCollapes)


function navToggle()
{
    let aside = document.getElementsByTagName("aside")[0];
    aside.style.display = "block";
    let close = document.getElementById("close");
    close.style.display = "block";
}

function navCollapes()
{
    let aside = document.getElementsByTagName("aside")[0];
    aside.style.display = "none";
}
