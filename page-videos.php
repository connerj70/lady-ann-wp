<?php
/**
Template Name: Videos Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php

			$args = array(
				"cat" => 3
			);

			$query = new WP_Query($args);

		?>

		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if(!has_category("advertisement")) {
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title">', '</h2>' );
				endif;
			}

				if ( !has_category("advertisement") ) :
					?>
					<div class="entry-meta">
						<span class="span-line"></span>
						<?php
						the_time( get_option( 'date_format' ))
						// lady_ann_posted_on();
						// lady_ann_posted_by();
						?>
						<span class="span-line"></span>
					</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php lady_ann_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lady-ann' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()

		) );

		

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lady-ann' ),
			'after'  => '</div>',
		) );
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lady_ann_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; endif; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
