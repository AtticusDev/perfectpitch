<?php
/**
 * Template part for displaying page content in history.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerfectPitch
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="container-fluid history-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<div class="backtohome text-center pt-2">
				<a href="/" class="btn historyBackBtn">BACK</a>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 text-white text-center history-title">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background-color: #000;">
			<div class="row">
				<div class="container desktop-history" style="padding: 2rem;">
					<div class="row text-white">

						<div class="col scroll-text text-center mb-5">
							<h3>SCROLL TO READ OUR STORY</h2>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/scroll-arrow.svg" style="width:50px;margin-top: 30px;">
						</div>
						<?php if( have_rows('events') ): 
							$num = 0;
							 while( have_rows('events') ): the_row(); 
							// vars
							$date = get_sub_field('date');
							$description = get_sub_field('description');
							$image = get_sub_field('image');
							$num = $num + 1;
						?>

						<?php if( $num % 2 == 0 ){ ?>
							<div class="container history-event">
								<div class="row justify-content-center">
		 
									<div class="col-md-3 e-desc-l text-right">
										<?php echo $description; ?>
									</div>
									<div class="col-md-2 text-center e-date">
										<h2><?php echo $date; ?></h2>
									</div>
									<div class="col-md-3 text-left e-image-r">
										<img src="<?php echo $image; ?>">
									</div>
								</div>
							</div>
						<?php }else{?>
							<div class="container history-event">
								<div class="row justify-content-center">
									<div class="col-md-3 text-right e-image-l">
										<img src="<?php echo $image; ?>">
									</div>
									<div class="col-md-2 text-center e-date">
										<h2><?php echo $date; ?></h2>
									</div>
									<div class="col-md-3 e-desc-r">
										<?php echo $description; ?>
									</div>
								</div>
							</div>

						<?php } ?>
						<?php endwhile;
						endif; ?>

					</div> <!-- ROW -->
				</div> <!-- CONTAINER -->
			</div> <!-- ROW -->
		</div> <!-- CONTAINER FLUID -->


				<div class="container-fluid mobile-history" style="background-color: #000; padding: 2rem;">
					<div class="row text-white">
								<?php if( have_rows('events') ): 
									 while( have_rows('events') ): the_row(); 
									// vars
									$date = get_sub_field('date');
									$description = get_sub_field('description');
									$image = get_sub_field('image');
								?>

								<div class="container history-event">
									<div class="row">
			 
										<div class="col-md-2 text-center e-date">
											<h2><?php echo $date; ?></h2>
										</div>
										<div class="col-md-5 text-left e-image-l">
											<img src="<?php echo $image; ?>">
										</div>
										<div class="col-md-5 e-desc-l">
											<?php echo $description; ?>
										</div>
									</div>
								</div>
								<?php endwhile;
								endif; ?>
							</div>
						</div>
					</div>
				</div>



</article><!-- #post-## -->
