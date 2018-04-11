<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */



?>


<div>
<a class="letter_link" href=<?php the_permalink()?>>
	<div class="letter_container">
	    <div>
	        <h2><?php the_title() ?></h2>
	        <h4> <?php the_time( get_option( 'date_format' )) ?></h4>
	        <h3><?php the_field('situation_box'); ?></h3>
	        <?php 
			wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lady-ann' ),
			'after'  => '</div>',
			) );
	        ?>
	    </div>
	</div>
</a>
	<footer class="entry-footer">
		<?php lady_ann_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div>