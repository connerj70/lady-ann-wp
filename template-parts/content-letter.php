<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img style="margin: 0 auto; display: flex; margin-bottom: 10px; width: 130px;" src="<?php bloginfo('template_url'); ?>/assets/logo.png" />
		<!-- <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<h4 class="letter-date"> <span class="span-line"></span><?php the_time( get_option( 'date_format' )) ?> <span class="span-line"></span></h4>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				lady_ann_posted_on();
				lady_ann_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?> -->
		<div style="display:flex; align-items:center; justify-content: center; font-size: 14.5px; color: #76828a; opacity: 0.8; font-weight: 100;">Re: <?php the_title(); ?></div>
	</header><!-- .entry-header -->

	<?php lady_ann_post_thumbnail(); ?>

	<div class="entry-content">
		<?php if(get_post_type() != 'post') : ?>
			<!-- <h3><b>To:</b> letters@iamladyann.com</h3> -->
			<!-- <h2><b>Subject:</b> <?php the_field('Subject');?></h2> -->
			<!-- <h3>
				<b>Subject: </b>
				<?php the_field("Subject");?>
			</h3> -->
			<!-- <?php if(get_field('anonymous')) : ?>
				<h3>
					<b>From:</b> 
					<?php the_field('From');?>
				</h3>
			<?php endif; ?> -->
			<h4 style="color: #76828a; font-size: 14px; font-family: sans-serif; font-weight: 100; opacity: 0.75;">Dear Lady. Ann:</h4>
			<p><?php the_field('situation_box'); ?> <p style="display:flex; justify-content: left; font-size: 14px;">- <?php the_field("From"); ?></p></p>

		<?php endif; ?>

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
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lady-ann'),
			'after'  => '</div>',
			'next_or_number' => 'number',
			'separator' => " ",
		) );
		?>

		


		
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php lady_ann_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
