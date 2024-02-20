const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

// if(window.pageYOffset === 0){
// 	document.getElementById("navbar").style.display = 'none'
// }


// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if(currentScrollPos === 0){
//   	document.getElementById("navbar").style.display = 'none'
//   } else {
//   	document.getElementById("navbar").style.display = 'flex'
//   }

// }

if(window.pageYOffset === 0){
	document.getElementById("navbar").style.top = '-80px'
}

if(window.pageYOffset !== 0){
	document.getElementById("navbar").style.top = '0'
}


window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if(currentScrollPos === 0){
  	document.getElementById("navbar").style.top = '-80px'
  } else {
  	document.getElementById("navbar").style.top = '0'
  }

}

$("#down").click(function(e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop:        $("#quienes").offset().top-66
	}, 1000);
	return false;
});

$("#top").click(function(e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop:        $("#hero").offset().top-66
	}, 1000);
	return false;
});

$("#quienes-somos").click(function(e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop:        $("#quienes").offset().top-66
	}, 1000);
	return false;
});

$("#servicios").click(function() {
	$('html, body') .animate({
		scrollTop:        $("#serv").offset().top-112
	}, 1000);
	return false;
});

$("#proyectos").click(function() {
	$(' html,body') .animate({
		scrollTop:        $("#proy").offset().top-112
	}, 1000);
	return false;
});

$("#contacto").click(function() {
	$(this).addClass("active");
	$('html,body ') .animate({
		scrollTop:        $("#cont").offset().top-112
	}, 1000);
	return false;
});

