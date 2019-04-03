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
<meta name="twitter:image" content="http://yeastpitching.com/wp-content/uploads/2019/04/screenshot.png">

		<div class="container-fluid conf-banner">
			<div class="col text-center text-white">See us at the <a href="https://www.craftbrewersconference.com/" target="_blank">Craft Brewers Conference</a> - Stand XXX</div>
		</div>
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
		
		<div class="container profit-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profit-black.svg" style="width:100px;"> INCREASED&nbsp;PROFIT</h2>
					<p><?php the_field('profit_text'); ?></p>
					<div class="btn closeBtn">Close</a></div>
				</div>
			</div>
		</div>
		<div class="container consistency-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/consistency-black.svg" style="width:100px;"> BETTER&nbsp;CONSISTENCY</h2>
					<p><?php the_field('consistency_text'); ?></p>
					<div class="btn closeBtn">Close</a></div>
				</div>
			</div>
		</div>
		<div class="container waste-block">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-10 text-center benefit-text">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/waste-black.svg" style="width:100px;"> LESS&nbsp;WASTE</h2>
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
							<div class="email-address">The Aber Perfectpitch is distributed in the US by Gusmer Enterprises</div>
							<div class="form-wrapper">

									<div class="geoip geoip-show-US">
										<?php
											echo do_shortcode('[gravityform id=4 name=Enquiry US title=false description=false]');
										?>
									</div>
									<div class="geoip-hide geoip-hide-US">
										<?php
											echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
										?>
									</div>

								<p>This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy">Privacy Policy</a> and
    <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
							
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

		<div class="container case-study-block">
			<div class="row">
				<div class="col text-center case-study-title mb-2">
					<h2>DON'T JUST TAKE OUR WORD FOR IT...</h2>
				</div>
			</div>
			<div class="row justify-content-center">
					<div class="col-md-6 text-center video-block">
						<script src="https://fast.wistia.com/embed/medias/hvylamh6ex.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_hvylamh6ex popover=true popoverAnimateThumbnail=true popoverContent=link" style="display:inline;position:relative"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/summit-new.jpg"></a></span>
						<p style="margin-top: 1rem;">
							<a href="<?php bloginfo('stylesheet_directory'); ?>/images/pp_cs_summit_2019.pdf" target="_blank" class="p-link p-link--pdf" aria-label="Pdf">
							    <svg class="c-icon"><use xlink:href="#icon--pdf"></use></svg> Download the Summit case study
							</a>
						</p>
					</div>					
					<div class="col-md-6 text-center video-block">
						<script src="https://fast.wistia.com/embed/medias/vxtoqxzc5m.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_vxtoqxzc5m popover=true popoverAnimateThumbnail=true popoverContent=link" style="display:inline;position:relative"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/meantime-new.jpg"></a></span>
						<p style="margin-top: 1rem;">
							<a href="<?php bloginfo('stylesheet_directory'); ?>/images/pp_cs_meantime_2017.pdf" target="_blank" class="p-link p-link--pdf" aria-label="Pdf">
							    <svg class="c-icon"><use xlink:href="#icon--pdf"></use></svg> Download the Meantime case study
							</a>
						</p>
						



<svg style="display: none">
	<symbol id="icon--pdf" viewBox="0 0 382.5 512">
	<path d="M182.1,44.8L159.8,6H48.7v38.8H12.3v354.3L119.9,506h250.4V44.8H182.1z M63.9,140.5c3.3-4.3,9-4.7,12.7-0.9
		l17.9,18.2V75.2c0-5.7,4-10.4,9-10.4s9,4.6,9,10.4v82.6l17.9-18.2c3.7-3.8,9.4-3.4,12.7,0.9c3.3,4.3,3,10.8-0.8,14.6l-32.8,33.4
		l0,0l-0.1,0.1c-0.2,0.2-0.4,0.4-0.7,0.6c-0.1,0.1-0.2,0.1-0.2,0.2c-0.2,0.1-0.3,0.3-0.5,0.4c-0.1,0.1-0.2,0.1-0.3,0.2
		c-0.2,0.1-0.3,0.2-0.5,0.3c-0.1,0.1-0.2,0.1-0.3,0.1c-0.2,0.1-0.4,0.2-0.5,0.2s-0.2,0.1-0.3,0.1c-0.2,0.1-0.4,0.1-0.6,0.2
		c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0-0.4,0.1-0.6,0.1c-0.1,0-0.2,0-0.2,0c-0.3,0-0.6,0.1-0.9,0.1l0,0l0,0c-0.3,0-0.6,0-0.9-0.1
		c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4-0.1-0.6-0.1c-0.1,0-0.2,0-0.3-0.1c-0.2-0.1-0.4-0.1-0.6-0.2c-0.1,0-0.2-0.1-0.3-0.1
		c-0.2-0.1-0.4-0.1-0.5-0.2c-0.1,0-0.2-0.1-0.3-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.1-0.4-0.3-0.5-0.4
		c-0.1-0.1-0.2-0.1-0.2-0.2c-0.2-0.2-0.5-0.4-0.7-0.6l-0.1-0.1l0,0l-32.8-33.4C60.9,151.3,60.6,144.8,63.9,140.5z M351.2,486.9
		H128.9v-97.1H31.4V63.9h17.3v121.5l55.5,50.3l55.5-50.3V63.9h191.4v423H351.2z"/>
	<rect x="191.3" y="114.5" class="st0" width="132.6" height="21.3"/>
	<rect x="191.3" y="187.1" class="st0" width="132.6" height="21.3"/>
	<rect x="56.9" y="332.4" class="st0" width="267" height="21.3"/>
	<rect x="56.9" y="259.7" class="st0" width="267" height="21.3"/>
	<path class="st0" d="M190.2,394.6h-22.4v58.5h9.8v-22.2h12.7c6.5,0,11.5-1.7,15.2-5s5.5-7.7,5.5-13.2c0-5.4-1.8-9.8-5.5-13.2
		C201.7,396.2,196.7,394.6,190.2,394.6z M198.4,420.2c-1.8,1.9-4.5,2.9-8.2,2.9h-12.7v-20.7h12.7c3.6,0,6.3,1,8.2,3
		c1.8,2,2.7,4.5,2.7,7.4C201.1,415.8,200.2,418.2,198.4,420.2z"/>
	<path d="M242,394.6h-19.3v58.5H242c7.4,0,13.5-2.3,18.1-6.9c4.6-4.6,7-10.6,7-17.9v-8.9c0-7.3-2.3-13.3-7-17.9
		C255.5,396.9,249.4,394.6,242,394.6z M257.3,428.3c0,5-1.4,9.1-4.1,12.2c-2.8,3.2-6.5,4.8-11.2,4.8h-9.6v-42.9h9.6
		c4.7,0,8.4,1.6,11.2,4.8c2.8,3.2,4.1,7.2,4.1,12.2V428.3z"/>
	<polygon points="280.3,453.1 290.1,453.1 290.1,428.1 313.7,428.1 313.7,420.3 290.1,420.3 290.1,402.4 317.8,402.4 
		317.8,394.6 280.3,394.6 	"/>
	</symbol>
</svg>


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
								<div class="easy-line">&nbsp;</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Easy to<br />connect</div>
								<div class="easy-description"><?php the_field('connect_text'); ?></div>
								<div class="easy-line">&nbsp;</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3 text-center" style="padding:0px;">
							<div class="easy-block">
								<div class="easy-title">Intuitive<br />touchscreen</div>
								<div class="easy-description"><?php the_field('touchscreen_text'); ?></div>
								<div class="easy-line">&nbsp;</div>
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
