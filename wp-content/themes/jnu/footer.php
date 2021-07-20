<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		
	<footer>
		<div class="container clearfix">
			<div class="Copyright">
				<div class="row">
					<div class="col-md-6"><p>Copyright © 2021 Jaipur National University. All Rights Reserved.</p></div>
					<div class="col-md-6">
						<p class="right">Website Design and Development by <a href="https://www.stercodigitex.com/" target="_blank">Sterco</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>	

<?php wp_footer(); ?>

        <!--------plugin js------>

        <script src="<?php echo bloginfo('template_url') ?>/assets/js/jquery-3.5.1.min.js"></script>
        <script src="<?php echo bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script src="<?php echo bloginfo('template_url') ?>/assets/js/script.js"></script>

</body>
</html>
