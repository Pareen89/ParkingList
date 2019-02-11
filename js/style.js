// click events
let menuActive = () => {
    let element = document.getElementById('nav_menu');
    element.classList.toggle("nav__active");
}

let hiddenEdit = () => {
    let element = document.getElementById('hidden-edit');
    element.classList.toggle("hidden-edit-active");
}
window.onload = function () {
    document.getElementById("nav__menu-profile").addEventListener("click", () => {
        console.log('clicked')
        document.getElementById("nav__menu-dropdown").classList.toggle("nav__menu-dropdown-active");
        document.getElementById("nav__menu-profile").classList.toggle("nav__menu-profile-active");
    }, false)
}
document.getElementById("hidden-info-page").addEventListener("click", () => {
    document.getElementById("hidden-info").classList.toggle('hidden-info-active');
}, false);

// Map
mapboxgl.accessToken = 'pk.eyJ1IjoicGFyZWVuODkiLCJhIjoiY2pyODJjN3RyMDF5ZzN5bnY3OWVlM2wxeSJ9.7l8SyueQjSZLipWSrxBR7Q';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/outdoors-v10',
    center: [-121.873157, 37.2589992],
    zoom: 15
});

// Slideshow for result page
let glide = new Glide('.glide', {
    type: 'slider',
    perView: 4,
    gap: 5

})
glide.mount();

