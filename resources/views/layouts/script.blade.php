<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="assets/plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="assets/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="assets/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="assets/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="assets/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="assets/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="assets/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="assets/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="assets/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
<script src="assets/plugins/scroll/scrollbar.min.js"></script><!-- scroll -->
<script src="assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="assets/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="assets/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="assets/js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="assets/plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="assets/plugins/switcher/switcher.js" ></script><!-- Switcher -->
<script src="assets/js/jquery.lazy.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/rev.slider.js"></script>
<script>
    async function addingDonwloadBook($id){
        fetch('/download/'+$id, {
    method: 'GET'
        })
        .then(response => console.log(response))
        .catch(error => {
            console.error(error);
        });
    }
jQuery(document).ready(function() {
	'use strict';
    dz_rev_slider_13();
    dz_rev_slider_12();
	$('.lazy').Lazy();
});	/*ready*/
</script>
