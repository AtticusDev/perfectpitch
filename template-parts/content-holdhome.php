<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerfectPitch
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@AberInstruments">
<meta name="twitter:title" content="BREW ALL YOU CAN BREW - PerfectPitch">
<meta name="twitter:description" content="See the Aber Perfectpitch at the Craft Brewers Conference - Gusmer Enterprises booth 12085 ">
<meta name="twitter:image" content="http://perfectpitch/wp-content/uploads/2019/04/screenshot.png">

		<div class="container-fluid hold-home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-sm-12 col-md-12 text-right intro-strap">
						<h1 class="text-white" style="margin-bottom: 0px; padding-bottom: 0px;"><?php
							the_title();
							?>
						</h1>
						<?php
							the_content();
						?>
					</div>

				</div>
			</div>
		</div>

		<div class="container-fluid contact-block">
				<div class="container fade-up">
					<div class="row justify-content-center">
						<div class="col text-center">
							<h2>REQUEST MORE INFORMATION</h2>
							<div class="tel-number">
								<a href="tel: 866-213-1131"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tel-icon.svg" style="width: 40px;" align="middle">&nbsp; 866-213-1131</a></div>
							<div class="email-address"><a href="mailto:sales@gusmerenterprises.com">sales@gusmerenterprises.com</a></div>
							<div class="form-wrapper">
							<?php
								echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
							?>
							</div>
						</div>
					</div>
				</div>
		</div>
		


</article><!-- #post-## -->
