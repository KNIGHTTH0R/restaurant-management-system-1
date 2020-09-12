function getChildren(n, skipMe){
    var r = [];
    for ( ; n; n = n.nextSibling ) 
       if ( n.nodeType == 1 && n != skipMe)
          r.push( n );        
    return r;
};

function getSiblings(n) {
    return getChildren(n.parentNode.firstChild, n);
}


function changeActiveLink(ev) {
	const scrollBarPos = document.body.scrollTop || document.documentElement.scrollTop;	

	navlinks.forEach(function(link){
		let sectionOffsetTop = document.querySelector(link.hash).offsetTop;

		if(sectionOffsetTop < (scrollBarPos + 400) ){
			let parent = link.parentElement;
			let siblings = getSiblings(parent);
			parent.classList.add('active');

			siblings.forEach(function(sibling){
				sibling.classList.remove('active');
			});

		}	

	});
}


function smoothScroll(event) {
	event.preventDefault();

	const navHeight = document.querySelector('nav').offsetHeight; 
	let targetLink = event.target.hash;
	let targetPosition = document.querySelector(targetLink).offsetTop - navHeight;;

	window.scrollTo({
		top: targetPosition,
		left: 0,
		behavior: 'smooth'
	});

}