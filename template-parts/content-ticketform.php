<?php
/**
 * Template part for displaying page content in ticketform.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerfectPitch
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-fluid" style="background-color: #00a586; padding: 4rem;">
	<div class="row">
		<div class="container mt-5" style="background-color: #fff; padding: 4rem; margin-bottom: 20rem;">
			<div class="row">
				<div class="col-sm-12 col-md-12 text-center">
					<p><a href="https://aberinstruments.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/aber-logo.svg" class="footer-logo-us"></a></p>
					<p><?php the_content(); ?></p>

				</div>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->
