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
		<img style="margin: 0 auto; display: flex; margin-bottom: 10px; width: 130px;" src="<?php bloginfo('template_url'); ?>/assets/faded-logo.svg" />
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
		<div style="font-family: 'Montserrat', sans-serif; display:flex; align-items:center; justify-content: center; font-size: 20px; color: #000; opacity: 0.9; font-weight: 100;">Re: <?php the_title(); ?></div>
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
			<h4 style="color: #000; font-size: 14px; font-family: 'Montserrat', sans-serif; font-weight: 100; opacity: 0.9">Dear Lady. Ann:</h4>
			<p><?php the_field('situation_box'); ?> <p style="display:flex; justify-content: left; font-size: 14px; font-family: 'Montserrat', sans-serif;">- <?php the_field("From"); ?></p></p>
			
			<div style="position: relative; top: -30px; height: 50px; display: flex; align-items: center; justify-content: space-between; overflow-x: hidden; overflow-y: hidden; font-family: 'Montserrat', sans-serif;">
				<img style="width: 70px; position: relative; top: 10px; left: -14px;" src="<?php bloginfo('template_url'); ?>/assets/bow.png" />
			<!-- 	<ul class="city-list" style="list-style: none; font-size: 9px; opacity: 0.45;">
					<li>New York. Los Angeles.</li>
					<li>Washington DC.</li>
					<li>Baltimore. Boston.</li>
					<li>London.</li>
				</ul> -->
			</div>
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
