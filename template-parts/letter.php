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
	<a class="letter_link" href="<?php the_permalink()?>">
		<div class="letter_container">
		    <div>
		        <a class="letter_link" href="<?php the_permalink()?>"><h1 class="letter-title"><?php the_title() ?></h1></a>
		        	<a class="letter_link" href="<?php the_permalink()?>">
					<h4 class="letter-date"> <span class="span-line"></span><?php the_time( get_option( 'date_format' )) ?> <span class="span-line"></span></h4>
					</a>
		        	<a class="letter_link" href="<?php the_permalink()?>">
						<?php echo advanced_custom_field_excerpt(); ?>
					</a>
		        <?php 
				wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lady-ann' ),
				'after'  => '</div>',
				) );
		        ?>
		    </div>
		    <footer class="letter-footer">
		    	<?php get_comments();?>
			</footer><!-- .entry-footer -->
		</div>
	</a>
</div>