function registrarse(){
	let n;
	n = document.getElementById('nombre').value;
	alert("Bienvenid@ "+ n +"\nGracias por registrarse");
}
function iniciarsesion() {
   let n;
   n=document.getElementById('usuario').value;
   alert("Bienvenido " + n)
}
function Facebook() {
    var url = encodeURIComponent('index.html');
    var facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${'index.html'}`;
    window.open(facebookUrl, '_blank');
}

function Twitter() {
    var url = encodeURIComponent('index.html');
    var twitterUrl = 'https://twitter.com/intent/tweet?text=MINDSET&url=index.html';
    window.open(twitterUrl, '_blank');
}

function Instagram() {
    var url = encodeURIComponent('index.html');
    var instagramUrl = `https://www.instagram.com/?url=${'index.html'}`;
    window.open(instagramUrl, '_blank');
}

function volverArriba() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
const images = ['../Imagen/img.png', '../Imagen/img1.png', '../Imagen/img2.png'];
let currentIndex = 0;

function showImage(index) {
    const sliderImage = document.getElementById('preguntasim');
    preguntasim.src = images[index];
}

function siguienteImg() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

function anteriorImg() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
}

showImage(currentIndex);


function menu(){
const burger= document.querySelector(".burger");
const navLinks=document.querySelector(".nav-links");

    burger.addEventListener("click", () =>{
        navLinks.classList.toggle("active");
    })
}
