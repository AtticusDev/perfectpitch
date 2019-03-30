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
			<div class="container benefit-wrapper">
				<div class="row">
					<div class="d-flex flex-column col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit.svg" class="benefit-icon"><br>
							<h3>INCREASED<br />PROFIT</h3>
							<p><?php the_field('profit_summary'); ?></p>
						</div>
						<div class="btn profitBtn mt-auto">Read more</div>
					</div>
					<div class="d-flex flex-column col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency.svg" class="benefit-icon">
							<h3>BETTER<br />CONSISTENCY</h3>
							<p><?php the_field('consistency_summary'); ?></p>
						</div>
						<div class="btn consistencyBtn mt-auto">Read more</div>
					</div>
					<div class="d-flex flex-column col-sm-12 col-md-4 text-center">
						<div class="benefit-panel">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste.svg" class="benefit-icon">
							<h3>LESS<br />WASTE</h3>
							<p><?php the_field('waste_summary'); ?></p>
						</div>
						<div class="btn wasteBtn mt-auto">Read more</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid profit-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit-black.svg" style="width:100px;"> INCREASED PROFIT</h2>
					<p><?php the_field('profit_text'); ?></p>
					<div class="btn closeBtn">Close</a></div>
				</div>
			</div>
		</div>
		<div class="container-fluid consistency-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency-black.svg" style="width:100px;"> BETTER CONSISTENCY</h2>
					<p><?php the_field('consistency_text'); ?></p>
					<div class="btn closeBtn">Close</a></div>
				</div>
			</div>
		</div>
		<div class="container-fluid waste-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste-black.svg" style="width:100px;"> LESS WASTE</h2>
					<p><?php the_field('waste_text'); ?></p>
					<div class="btn closeBtn">Close</a></div>
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
							<div class="email-address">The Aber PerfectPitch is distributed in the US by Gusmer Enterprises</div>
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
			<?php $caseImg = get_field('case_study_img'); ?>
			<div class="bcg" style="background-image: url('<?php echo $caseImg; ?>')"></div>
			<div class="content-wrapper">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit-logo.png"><br />
				<div class="caseStudyIntro">"Aber and Gusmer have a passion for our business and a desire to help drive our business forward. It’s not just selling us great equipment, it’s trying to optimise our process"</div>
				<div class="btn caseStudyBtn">VIEW ALL CASE STUDIES</div>

			</div>
		</div>

		<div class="container-fluid case-study-block">
			<div class="row">
				<div class="col text-center case-study-title mb-2">
					<h2>DON'T JUST TAKE OUR WORD FOR IT...</h2>
				</div>
			</div>
			<div class="row justify-content-center">
					<div class="col-md-6 text-right video-block">
				        <a class="btn" href="//www.youtube.com/watch?v=kLvcgWBTVYE" data-lity>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit.jpg">
						</a>
					</div>					
					<div class="col-md-6 text-left video-block">
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

			
		<?php $easyImg = get_field('easy_img'); ?>
		<div class="container-fluid easy-wrapper" style="background-image: url('<?php echo $easyImg; ?>');">
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
								<div class="easy-description"><?php the_field('manoeuvre_text'); ?></div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Easy to<br />connect</div>
								<div class="easy-description"><?php the_field('connect_text'); ?></div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Intuitive<br />touchscreen</div>
								<div class="easy-description"><?php the_field('touchscreen_text'); ?></div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block-end">
								<div class="easy-title">
<script src="https://fast.wistia.com/embed/medias/mbv0oul015.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_mbv0oul015 popover=true popoverContent=link" style="display:inline;position:relative"><a href="#">

<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vid-play-icon.svg" style="width: 80px;"><br />
Don't just take our word for it
</a></span>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

		<?php $historyImg = get_field('history_img'); ?>
		<div class="container-fluid history-wrapper" style="background-image: url('<?php echo $historyImg; ?>');">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col text-center history-block">
						<h2>OUR HISTORY</h2>
						<a href="/our-history/" class="btn historyBtn">SEE OUR HISTORY</a>
					</div>


				</div>
			</div>
		</div>


</article><!-- #post-## -->
