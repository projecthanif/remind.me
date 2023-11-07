
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


let model = document.getElementsByClassName("btn-2")[0];

model.addEventListener("click", modelToggle);

function  modelToggle() 
{
    let model = document.getElementsByClassName("model")[0];
    model.style.display = "block";
}

let modelClose = document.getElementById("model-close");
modelClose.addEventListener("click", modelCollapse);

function modelCollapse()
{
    let model = document.getElementsByClassName("model")[0];
    model.style.display = "none";
}