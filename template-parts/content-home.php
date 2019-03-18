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
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: 600px; background-position: center top; background-repeat: no-repeat; background-color: #000;">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-sm-12 col-md-4 text-center intro-strap">
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

</article><!-- #post-## -->
