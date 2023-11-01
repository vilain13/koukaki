


// EFFET PARALLAX VIDEO HEADER AVEC SIMPLE PARALLAXE ( décalré dans functions.php )

document.addEventListener('DOMContentLoaded', function () {
    const video = document.querySelector('.video-oscars');
    new simpleParallax(video, {
        orientation: 'right',
        scale: 1.15,
        delay: 0.5,
        transition: 'ease-in-out'
    });
});

// ANIMATION DES TITRES SECTIONS
	//Déclenchement Animation Titre Story et Studio au scroll 
	const observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
		const titre = entry.target.querySelector('h2 span');
	  		if (entry.isIntersecting) {
			titre.classList.add('animation-title');
			return; 
		}
	  	titre.classList.remove('animation-title');
	});
});
  
  observer.observe(document.querySelector('.story'));
  observer.observe(document.querySelector('#studio'));

	//Déclenchement Animation Titre personnages & lieu  au scroll */
	const observer2 = new IntersectionObserver(entries => {
		entries.forEach(entry => {
	  	const titre = entry.target.querySelector('h3 span');
	  		if (entry.isIntersecting) {
			titre.classList.add('animation-title')
			return; 
	  	}
	  	titre.classList.remove('animation-title');
	});
});
  
  observer2.observe(document.querySelector('#place'));
  observer2.observe(document.querySelector('.main-character'));
  
  	//Déclenchement Animation 2 Titre Studio  au scroll */
	const observer3 = new IntersectionObserver(entries => {
		entries.forEach(entry => {
		const titre = entry.target.querySelector('#title-koukaki');
			if (entry.isIntersecting) {
			titre.classList.add('animation-title2');
			return; 
		}
		titre.classList.remove('animation-title2');
	});
});
	 observer3.observe(document.querySelector('#studio'));
	

//SLIDER CHARACTERS AVEC SWIPER ( déclaré dans functions.php )
let swiper = new Swiper(".mySwiper", {
	effect: "coverflow",
	grabcursor: true,
	centeredSlides: true,
	coverflowEffect: {
		rotate: 60,
		stretch: 0,
		depth: 50,
		modifier: 1,
	},
	slidesPerView: "3",
	loop: true,
	autoplay:{
		delay:4000,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});



// DEPLACEMENT DES NUAGES DE DROITE A GAUCHE
window.addEventListener('scroll', function() {
	let scrollClouds = document.querySelector('.clouds');
	let topClouds = scrollClouds.offsetTop; 
  	let debutAnimClouds  = topClouds + 500;
	let scrollY = window.scrollY;
	if (scrollY >= debutAnimClouds) {
		limitMoveCloud = Math.min(300, scrollY  - debutAnimClouds );
		scrollClouds.style.transform = 'translateX(-' + limitMoveCloud  + 'px)';
	}
 });


// ANIMATION BURGER ET APPARITION DU MENU FULLSCREEN
const burger = document.querySelector(".menu-burger");
const main = document.getElementById("primary");
const footer = document.getElementById("colophon");
const fullmenu = document.getElementById("menu");
  //  Gestionnaire d'événements au clic sur menu Burger
burger.addEventListener('click',()=>{
	burger.classList.toggle('active');
	main.classList.toggle('desactive');
	footer.classList.toggle('desactive');
	fullmenu.classList.toggle('visible');
 });


// GESTION DES LIENS ET APPARITION PAGE PRINCIPALE
   // Sélection de tous les liens ayant la classe "lien"
	const liens = document.querySelectorAll('.link');
   //  Gestionnaire d'événements au clic à chaque lien
   liens.forEach(lien => {
		lien.addEventListener('click', () => {
			main.classList.remove('desactive');
			footer.classList.remove('desactive');
			burger.classList.remove('active');
			fullmenu.classList.remove('visible');
		 });
   });
 



