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
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: 1000px; background-position: center top; background-repeat: no-repeat; background-color: #000;">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-sm-12 col-md-8 text-center intro-strap">
						<h1 class="underline text-white"><?php
							the_title();
							?>
						</h1>
						<p id="qualifications" >
						<?php
							the_content();
						?>
						</p>
					</div>

				</div>
			</div>
			<div class="container" style="padding-left: 100px; padding-right: 100px; margin-top: 140px; color: #fff;">
				<div class="row">
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit.svg" style="width:100px;"><br>
							<h3>INCREASED<br />
							PROFIT</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<div class="btn profitBtn">Read more</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency.svg" style="width:100px;">
							<h3>BETTER<br />
							CONSISTENCY</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<a href="#" class="consistencyBtn">Read more</a>
						</div>

					</div>
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste.svg" style="width:100px;">
							<h3>LESS<br />
							WASTE</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<a href="#" class="wasteBtn">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid profit-block">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit.svg" style="width:100px;"> INCREASED PROFIT</h2>
							<p>A significant improvement in the performance and consistency of the fermentations and a reduction in the fermentation times following the use of the Aber PerfectPitch could result in energy, cost and efficiency savings.</p>
							<a href="#">Close</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid contact-block">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<h2>REQUEST MORE INFORMATION</h2>
							<div class="tel-number"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tel-icon.svg" style="width: 40px;" align="middle">&nbsp; 866-213-1131</div>
							<div class="email-address"><a href="mailto:sales@gusmerenterprises.com">sales@gusmerenterprises.com</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bcg-parallax">
			<div class="bcg"></div>
			<div class="content-wrapper">
				<h1>TEXT HERE</h1>
				<p>Aber and Gusmer have a passion for our business and a desire to help drive our business forward. It’s not just selling us great equipment, it’s trying to optimise our process
			</div>
		</div>

		<div class="container-fluid case-study-block">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<h2>DON'T JUST TAKE OUR WORD FOR IT...</h2>
						</div>
					</div>
					<div class="row">
							<div class="col-md-6">
						        <a class="btn" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit.jpg">
								</a>
							</div>					
							<div class="col-md-6">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/meantime.jpg">
							</div>
						</div>
				</div>
			</div>
		</div>




</article><!-- #post-## -->
