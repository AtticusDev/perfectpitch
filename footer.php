<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PerfectPitch
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
<!-- REMEMBER TO CHANGE BACKGROUND COLOR TO BLACK -->
		<div class="container-fluid" style="background-color: #000;">
			<div class="row">
				<div class="container"">
					<div class="row">
<!-- HIDDEN FOR THE HOLDING PAGE -->						
						<?php $footerImg = get_field('footer_image'); ?>
						<div class="col-sm-12 col-md-3 footerLeft" style="background-image: url('<?php echo $footerImg; ?>'); ">
						</div>
						<div class="col-sm-12 col-md-3 footerMiddle">
							<div class="form text-center">
								<h4>GET IN TOUCH</h4>
							<?php
								echo do_shortcode('[gravityform id=3 name=Enquiry title=false description=false]');
							?>
							</div>
						</div>

<!-- REMEMBER TO CHANGE BACK TO COL-MD-6 -->						
						<div class="col-sm-12 col-md-6 footerRight">

							<div class="geoip geoip-show-US">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/aber-logo.svg" class="footer-logo-us">&nbsp;&nbsp;&nbsp;
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/gusmer-logo.svg" class="footer-logo-us">
							</div>
							<div class="geoip-hide geoip-hide-US">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/aber-logo.svg" class="footer-logo">
							</div>

							<p class="contact-details">866-213-1131<br />
							<a href="mailto:sales@gusmerenterprises.com">sales@gusmerenterprises.com</a>
							</p>


							<a href="https://www.linkedin.com/company/aber-instruments-ltd/" class="c-link c-link--linkedin c-tooltip" aria-label="Linkedin">
							    <svg class="c-icon"><use xlink:href="#icon--linkedin"></use></svg>
							</a>

							<a href="https://twitter.com/AberInstruments" class="c-link c-link--twitter c-tooltip" aria-label="Twitter">
							    <svg class="c-icon"><use xlink:href="#icon--twitter"></use></svg>
							</a>

							<a href="https://www.facebook.com/aberinstruments/" class="c-link c-link--facebook c-tooltip" aria-label="Facebook">
							    <svg class="c-icon"><use xlink:href="#icon--facebook"></use></svg>
							</a>

							<div class="companyInfo">
							<p>Company Registration number 2213855. Registered in England and Wales. Registered Office: 5 Science Park, Aberystwyth, UK</p>
							<p>&copy; Aber Instruments <?php echo date("Y"); ?>
							&nbsp;|&nbsp; <a href="#">Privacy policy</a></p>


							</div>


<svg style="display: none">
	<symbol id="icon--linkedin" viewBox="0 0 50 50">
	<path d="M15.3,12.2c0-0.8,0-1.3,0-1.8c0-0.6-0.1-0.8-0.7-0.8c-1.4,0-2.7,0-4.1,0c-0.5,0-0.6,0.1-0.6,0.6
	c0,6.1,0,12.1,0,18.2c0,0.5,0.1,0.6,0.6,0.6c1.4,0,2.9,0,4.3,0c0.7,0,0.9-0.2,0.9-0.9c0-3.1,0-6.2,0-9.3c0-1,0.1-1.9,0.5-2.8
	c0.6-1.2,1.8-1.9,3.2-1.7c1.4,0.2,2.1,0.9,2.4,2.4c0.2,0.7,0.2,1.4,0.2,2.1c0,3.1,0,6.2,0,9.3c0,0.7,0.2,0.9,0.9,0.9
	c1.4-0.1,2.8,0,4.2,0c0.6,0,0.7-0.2,0.7-0.7c0-3.7,0-7.4,0-11.1c0-0.8-0.1-1.6-0.2-2.4c-0.4-2.9-1.9-4.8-4.3-5.4
	C20.1,8.7,17.4,9.1,15.3,12.2 M6.2,19.3c0-3,0-6,0-9c0-0.6-0.1-0.8-0.7-0.8c-1.5,0-2.9,0-4.4,0c-0.5,0-0.7,0.1-0.7,0.7
	c0,6,0,12.1,0,18.1c0,0.6,0.2,0.7,0.7,0.7c1.4,0,2.9,0,4.3,0c0.6,0,0.7-0.2,0.7-0.8C6.2,25.3,6.2,22.3,6.2,19.3 M6.6,3.6
	C6.7,1.6,5.2,0,3.4,0C1.6-0.1,0,1.6,0,3.5S1.5,7,3.3,7.1C5,7,6.6,5.5,6.6,3.6"/>
	</symbol>

	<symbol id="icon--facebook" viewBox="0 0 50 50">
	<path d="M0,9.5v5.2h2.7v14.5h5.7V14.6h3.9c0.2-1.7,0.3-3.4,0.5-5.1H8.4c0-0.9,0-1.8,0-2.7c0-1.4,0.3-1.7,1.7-1.7
	c0.3,0,0.6,0,0.9,0h1.7V0C10.8,0.1,9,0,7.2,0.2C5.1,0.4,3.7,1.7,3.1,3.9C2.9,4.7,2.8,5.7,2.7,6.5c-0.1,1,0,2,0,3H0z"/>
	</symbol>
	<symbol id="icon--twitter" viewBox="0 0 50 50">
	<path d="M11,28.2h-1c-0.1,0-0.3,0-0.4,0c-0.5,0-1-0.1-1.5-0.1c-0.5-0.1-1-0.1-1.5-0.2c-0.9-0.2-1.7-0.4-2.5-0.7
	c-1.4-0.5-2.8-1.2-4-2c0,0-0.1,0-0.1-0.1l0,0c0.9,0.1,1.7,0.1,2.6,0c0.9-0.1,1.7-0.2,2.6-0.5c0.8-0.3,1.7-0.6,2.4-1
	c0.8-0.4,2.1-1.3,2.2-1.5c-1.4,0-2.7-0.5-3.8-1.4c-1.1-0.9-1.9-2.1-2.4-3.5c0.5,0.1,1,0.1,1.5,0.1s1-0.1,1.5-0.2
	c-3.6-0.8-5.4-4.2-5.3-7c0.5,0.3,0.9,0.5,1.4,0.6s1,0.2,1.5,0.2C3.3,10.2,2.5,9.3,2,8.3C1.5,7.2,1.2,6.1,1.3,4.9
	c0-1.2,0.3-2.3,0.9-3.4c1.7,2.2,3.8,4,6.1,5.2c2.4,1.3,4.9,2,7.6,2.1c0,0,0,0,0-0.1c-0.2-0.8-0.2-1.5-0.1-2.3
	c0.1-0.6,0.2-1.3,0.4-1.9c0.5-1.2,1.2-2.2,2.1-3c1.2-0.9,2.5-1.4,3.9-1.5c0.1,0,0.3,0,0.4,0l0,0c0.4,0,0.8,0.1,1.2,0.2
	c1,0.2,1.9,0.7,2.7,1.4c0.2,0.2,0.4,0.4,0.6,0.6c0,0.1,0.1,0.1,0.2,0.1c0.4-0.1,0.9-0.2,1.3-0.4c1-0.3,1.9-0.7,2.7-1.3h0.1
	c-0.5,1.7-1.5,3-2.9,3.9c1.3-0.2,2.6-0.5,3.8-1.1l0,0c-0.6,0.9-1.2,1.7-1.9,2.4c-0.4,0.4-0.8,0.8-1.3,1.1L29,7c0,0.1,0,0.2,0,0.4
	c0,0.5,0,1,0,1.5s-0.1,1-0.1,1.5c-0.1,0.8-0.2,1.5-0.4,2.2c-0.3,1.5-0.8,2.9-1.5,4.2c-0.5,1.1-1.1,2.1-1.8,3.1
	c-0.8,1.2-1.8,2.3-2.8,3.2c-0.7,0.6-1.4,1.2-2.2,1.7s-1.7,1-2.5,1.4c-1.1,0.5-2.2,0.9-3.3,1.1c-0.6,0.1-1.1,0.2-1.7,0.3
	c-0.4,0-0.7,0.1-1.1,0.1C11.6,28.2,11.3,28.2,11,28.2L11,28.2"/>
	</symbol>
</svg>







						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div> <!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
