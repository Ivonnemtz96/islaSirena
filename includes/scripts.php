<!-- jquery js -->
<script src="assets/js/plugins/jquery.min.js"></script>
<!-- jquery ui -->
<script src="assets/js/vendor/jqueryui.js"></script>
<!-- counter up -->
<script src="assets/js/plugins/counter-up.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<!-- twinmax -->
<script src="assets/js/vendor/twinmax.js"></script>
<!-- twinmax -->
<script src="assets/js/vendor/aos.js"></script>
<!-- twinmax -->
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<!-- split text js -->
<script src="assets/js/vendor/split-text.js"></script>
<!-- text plugins -->
<script src="assets/js/plugins/text-plugins.js"></script>
<!-- waypoint js -->
<script src="assets/js/plugins/metismenu.js"></script>
<!-- metismenu js -->
<script src="assets/js/plugins/waypoint.js"></script>
<!-- metismenu js -->
<script src="assets/js/vendor/metisMenu.min.js"></script>
<!-- waw -->
<script src="assets/js/vendor/wow.js"></script>
<!-- jquery ui js -->
<script src="assets/js/plugins/jquery-ui.js"></script>
<!-- jquery ui js -->
<script src="assets/js/plugins/jquery-timepicker.js"></script>
<!-- sal animation -->
<script src="assets/js/vendor/sal.min.js"></script>
<!-- bootstrap JS -->
<script src="assets/js/plugins/bootstrap.min.js"></script>
<!-- easing JS -->
<script src="assets/js/plugins/jquery-slideNav.js"></script>
<!-- easing JS -->
<script src="assets/js/vendor/hover-revel.js"></script>
<!-- easing JS -->
<script src="assets/js/plugins/swip-img.js"></script>
<!-- main js -->
<script src="assets/js/main2.js"></script>

<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<script>
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
</script>