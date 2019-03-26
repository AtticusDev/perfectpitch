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

		<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-sm-12 col-md-8 text-center intro-strap">
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
			<div class="container benefit-wrapper">
				<div class="row">
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit.svg" class="benefit-icon"><br>
							<h3>INCREASED<br />PROFIT</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<div class="btn profitBtn">Read more</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency.svg" class="benefit-icon">
							<h3>BETTER<br />CONSISTENCY</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<div class="btn consistencyBtn">Read more</div>
						</div>

					</div>
					<div class="col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste.svg" class="benefit-icon">
							<h3>LESS<br />WASTE</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
							<div class="btn wasteBtn">Read more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="container profit-block">
					<div class="row">
						<div class="col text-center benefit-text">
							<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit-black.svg" style="width:100px;"> INCREASED PROFIT</h2>
							<p>A significant improvement in the performance and consistency of the fermentations and a reduction in the fermentation times following the use of the Aber PerfectPitch could result in energy, cost and efficiency savings.</p>
							<div class="btn closeBtn">Close</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="container consistency-block">
					<div class="row">
						<div class="col text-center benefit-text">
							<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency-black.svg" style="width:100px;"> BETTER CONSISTENCY</h2>
							<p>A significant improvement in the performance and consistency of the fermentations and a reduction in the fermentation times following the use of the Aber PerfectPitch could result in energy, cost and efficiency savings.</p>
							<div class="btn closeBtn">Close</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="container waste-block">
					<div class="row">
						<div class="col text-center benefit-text">
							<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste-black.svg" style="width:100px;"> LESS WASTE</h2>
							<p>A significant improvement in the performance and consistency of the fermentations and a reduction in the fermentation times following the use of the Aber PerfectPitch could result in energy, cost and efficiency savings.</p>
							<div class="btn closeBtn">Close</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid contact-block">
				<div class="container fade-up">
					<div class="row justify-content-center">
						<div class="col text-center">
							<h2>REQUEST MORE INFORMATION</h2>
							<div class="tel-number"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tel-icon.svg" style="width: 40px;" align="middle">&nbsp; 866-213-1131</div>
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
		
		<div class="bcg-parallax">
			<div class="bcg"></div>
			<div class="content-wrapper">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit-logo.png"><br />
				<div class="caseStudyIntro">Aber and Gusmer have a passion for our business and a desire to help drive our business forward. It’s not just selling us great equipment, it’s trying to optimise our process</div>
				<div class="btn caseStudyBtn">VIEW ALL CASE STUDIES</div>

			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="container case-study-block">
					<div class="row">
						<div class="col text-center case-study-title">
							<h2>DON'T JUST TAKE OUR WORD FOR IT...</h2>
						</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6 text-center video-block">
						        <a class="btn" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit.jpg">
								</a>
							</div>					
							<div class="col-md-6 text-center video-block">
						        <a class="btn" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/meantime.jpg">
								</a>
							</div>
					</div>
					<div class="row justify-content-center">
						<div class="col text-center mt-3">
							<div class="btn closeCaseBtn">Close</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid easy-wrapper" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/pp-image.jpg');">
			<div class="container">
				<div class="row text-white">
					<div class="col text-center">
						<h2>EASY TO USE</h2>
					</div>
				</div>
				<div class="row text-white align-items-center">
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Easy to<br />manoeuvre</div>
								<div class="easy-description">This is the description for the manoeuvre title</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Easy to<br />connect</div>
								<div class="easy-description">This is the description for the manoeuvre title</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Intuitive<br />touchscreen</div>
								<div class="easy-description">This is the description for the manoeuvre title</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block-end">
								<div class="easy-title">
									<a class="btn" href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vid-play-icon.svg" style="width: 80px;"><br />
								Don't just take our word for it</a>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

		<div class="container-fluid" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/shed.jpg'); height: 1000px; background-position: center center; background-repeat: no-repeat; background-color: #000; height: 600px; background-size: cover;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col text-center history-block">
						<h2>OUR HISTORY</h2>
						<div class="btn historyBtn">SEE OUR HISTORY</div>
					</div>


				</div>
			</div>
		</div>


</article><!-- #post-## -->
