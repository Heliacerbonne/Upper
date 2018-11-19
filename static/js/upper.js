window.addEventListener ("load", function load (event) {
	window.removeEventListener ("load", load, false);
	SmoothScrolling.init ();
//	SuperBalloon.init ();
}, false);

var SmoothScrolling = {
	init: function () {
		var anchors = document.getElementsByTagName ("a");
		for (var i = 0; i < anchors.length; i++) {
			var a = anchors[i];
			if ( location.hostname == a.hostname && location.pathname == a.pathname && a.href.indexOf ("#") >= 0 )
				a.addEventListener ('click', SmoothScrolling.action, false);
		}
	},
	action: function () {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 400);
			return false;
		}
	}
};

var SuperBalloon = {
	bottom: 2*17 + 17 + 5 + 75 + 6;
	basis:  3*17 + 20;
	init: function() {
		document.addEventListener("scroll", SuperBalloon.anim, false);
console.log(getScroll());	}
	anim: function() {
		var balloon = document.getElementById("balloon");
		console.log (getScroll());
		var vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
		var scrollQuotient = (100 / 2000);
		balloon.top = basis + scrollQuotient * (vh - bottom - basis)
		return false;
	}
//		at   0%, top = (0%   - bottom || 0)
//		at 100%, top = 100% - bottom
}

function getScroll() {
	return (document.documentElement && document.documentElement.scrollTop) || window.pageYOffset || self.pageYOffset || document.body.scrollTop;
	//  ((document.height !== undefined) ? document.height : document.body.offsetHeight);
}
