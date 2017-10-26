/*! Bootstrap Carousel Swipe jQuery plugin v1.1 | https://github.com/maaaaark/bcSwipe | MIT License */ ! function(t) {
    t.fn.bcSwipe = function(e) {
        var n = { threshold: 50 };
        return e && t.extend(n, e), this.each(function() {
            function e(t) {
            	1 == t.touches.length && (u = t.touches[0].pageX, c = !0, this.addEventListener('touchmove', o, !1))
            }

            function o(e) {
                if (c) {
                    var o = e.touches[0].pageX,
                        i = u - o;
                    Math.abs(i) >= n.threshold && (h(), t(this).carousel(i > 0 ? 'next' : 'prev'))
                }
            }

            function h() { this.removeEventListener('touchmove', o), u = null, c = !1 }
            var u, c = !1;
            'ontouchstart' in document.documentElement && this.addEventListener('touchstart', e, !1)
        }), this
    }
}(jQuery);

$(document).ready(function() {
	function stripTrailingSlash(str) {
		if (str.substr(-1) == '/') {
			return str.substr(0, str.length - 1);
		}
		return str;
	}

	function getHTMLfile(str) {
		return str.substr(str.lastIndexOf('/') + 1);
	}

	var url = window.location.pathname;
	var activePage = stripTrailingSlash(url);
	var activeFile = getHTMLfile(activePage);

	console.log("active file is:" + activeFile);

	$('#myNavbar a').each(function() {
		var currentPage = $(this).attr("href");

			if (activeFile == currentPage) {
				console.log("setting active " + activeFile + "==" + currentPage);
				$(this).parent().addClass('active');
				$(this).closest('.toActive').addClass('active');
			}
	});

	$('.carousel').bcSwipe({threshold: 50});
	console.log("carousel on mobile devices");
});