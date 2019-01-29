// onclick to add pull down menu when on mobile screens
let menuActive = () => {
    let element = document.getElementById('header__nav');
    element.classList.toggle("header__active");
}

let hiddenEdit = () => {
    let element = document.getElementById('hidden-edit');
    element.classList.toggle("hidden-edit-active");
}

document.getElementById("hidden-info-page").addEventListener("click", () => {
    document.getElementById("hidden-info").classList.toggle('hidden-info-active');
}, false);