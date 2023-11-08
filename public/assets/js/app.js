
/** NAVBAR TOGGLE */
/** OPEN */
let navBar = document.getElementById("navbar");
navBar.addEventListener("click", navToggle);

function navToggle()
{
    let aside = document.getElementsByTagName("aside")[0];
    aside.style.display = "block";
    let close = document.getElementById("close");
    close.style.display = "block";
}

/** CLOSE */
let navClose = document.getElementById("close");
navClose.addEventListener("click", navCollapes);

function navCollapes()
{
    let aside = document.getElementsByTagName("aside")[0];
    aside.style.display = "none";
}


/** MODEL TOGGLE */
/** OPEN */
let model = document.getElementsByClassName("btn-2")[0];
model.addEventListener("click", modelToggle);

function  modelToggle() 
{
    let model = document.getElementsByClassName("model")[0];
    model.style.display = "block";
    console.log('Toggle model');
}

/** CLOSE */
let modelClose = document.getElementById("model-close");
modelClose.addEventListener("click", modelCollapse);

function modelCollapse()
{
    let model = document.getElementsByClassName("model")[0];
    model.style.display = "none";
    console.log('Collapse model');
}