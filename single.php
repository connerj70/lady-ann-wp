<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lady-ann
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-letter', get_post_type() );

			the_post_navigation(array('prev_text' => "<div style='display: flex; align-items: center; justify-content: flex-start;'><img style='margin-right: 10px; width: 25px; transform: rotate(180deg);' src='http://localhost:8888/lady-ann/wp-content/themes/lady-ann-theme/assets/arrow-point-to-right-black.png'/><span style='text-decoration: none; color: black; letter-spacing: 10px; opacity: 0.7;'>PREVIOUS</span></div>", 'next_text' => "<div style='display: flex; align-items: center; justify-content: flex-end;'><span style='text-decoration: none; opacity: 0.7;color: black; letter-spacing: 10px;'>NEXT</span><img style='margin-left: 10px; width: 25px;' src='http://localhost:8888/lady-ann/wp-content/themes/lady-ann-theme/assets/arrow-point-to-right-black.png'/></div>"));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
