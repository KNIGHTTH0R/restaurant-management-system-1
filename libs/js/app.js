
let navlinks = document.querySelectorAll('ul.sidenav li a[href], ul.top-nav li a[href]');  

navlinks.forEach(function(link){ 
	link.addEventListener('click', smoothScroll);
});

window.addEventListener('scroll', changeActiveLink);

	