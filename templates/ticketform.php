<?php
/**
 * Template Name: Tickets

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

 /**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PerfectPitch
 */


get_header(); ?>



					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'ticketform' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
get_footer();
