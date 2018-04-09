<?php
/**
	Template Name: Letters Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if(have_posts()) : 
		while ( have_posts() ) :
			the_post();


		endwhile; endif; // End of the loop.
		?>
		<?php

			$args = array(
				"post_type" => "user_letters"
			);

			$query = new WP_Query($args);

		?>

		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();?>

			<a class="letter_link" href=<?php the_permalink()?>>
			  	<div class="letter_container">
			        <div>
			            <h2><?php the_title() ?></h2>
			            <h4> <?php the_time( get_option( 'date_format' )) ?></h4>
			            <h3><?php the_field("situation_box") ?></h3>
			        </div>
	           	</div>
       		</a>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		</main><!-- #main -->
		

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
