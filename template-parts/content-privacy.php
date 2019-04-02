<?php
/**
 * Template part for displaying page content in privacy.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerfectPitch
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-fluid" style="background-color: #000; padding: 4rem;">
	<div class="row">
		<div class="container mt-5" style="background-color: #fff; padding: 4rem;">
			<div class="row">
				<div class="backtohome text-center pt-2">
					<a href="/" class="btn historyBackBtn">BACK</a>
				</div>
				<div class="col-sm-12 col-md-12">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->
