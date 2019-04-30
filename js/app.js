window.addEventListener('scroll', function() {
	setNavbarBg();
});

function setNavbarBg() {
	var top  = window.pageYOffset || document.documentElement.scrollTop;
	var navbar = document.getElementById('header');

	if (top > 100) {
		navbar.classList.add('header-scrolled');
	}else{
		navbar.classList.remove('header-scrolled');
	}
}
