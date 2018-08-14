<?php
/**
Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */
get_header();
?>

	<div>
		<div class="about-image-1-container">
			<img class="about-image-1" src="<?php bloginfo('template_url'); ?>/assets/aboutus_left.jpg" />
			<img class="about-image-1" src="<?php bloginfo('template_url'); ?>/assets/aboutus_center.jpg" />
			<img class="about-image-1" src="<?php bloginfo('template_url'); ?>/assets/aboutus_right.jpg" />
		</div>
		<h1 style="margin: 40px 0; text-align: center; font-family: sans-serif; font-weight: 100; opacity: 0.8;">About Lady. Ann</h1>
		<h3 style="font-weight: 100; text-align: center; font-size: 24px; opacity: 0.8;">Is a platform designed for you engage and share <br /> intimate information about your relationship without <br /> the fear of being judged.</h3>
		<h3 style="margin-bottom: 0; text-align: center; font-size: 25px; font-family: sans-serif; font-weight: 100; opacity: 0.8;"> #DearLadyAnn #WeLoveLetters</h3>
		<h1 style="margin: 50px 0; text-align: center; font-family: sans-serif; font-weight: 100; opacity: 0.8;">Our Values</h1>

		<!-- Carousel -->

		<div class="carousel-container">
			<span class="carousel-left-arrow"><</span>
			<div class="carousel-left-inner-container-1">
				<h1 style="margin: 40px 0; text-align: center; font-family: sans-serif; font-weight: 100; opacity: 0.8;">No man is an island</h1>
				<h3 style="font-weight: 100; text-align: center; font-size: 24px; opacity: 0.8;">We believe no man is an island, thus <br /> why we created a safe community <br /> and beautiful platform for our users to <br /> share and engage.</h3>
				<h3 style="margin-bottom: 0; text-align: center; font-size: 25px; font-family: sans-serif; font-weight: 100; opacity: 0.8;"> #DearLadyAnn #WeLoveLetters</h3>
			</div>
			<div class="carousel-right-inner-container-1">
				<img class="carousel-img" src="<?php bloginfo('template_url'); ?>/assets/ourvalues-1.jpg" />
			</div>
			<span class="carousel-right-arrow">></span>
		</div>

		<!-- End Carousel -->
		
		<h1 style="margin: 50px 0; text-align: center; font-family: sans-serif; font-weight: 100; opacity: 0.8;">Our Audience</h1>

		<h3 style="font-weight: 100; text-align: center; font-size: 24px; opacity: 0.8;">Our platform serves real people with real stories. <br /> Albeit, we take pride in keeping our writers <br /> anonymous.</h3>
		
		<div style="display: flex; height: 500px;">
			<img class="audience-img" src="<?php bloginfo('template_url'); ?>/assets/ouraudience.jpg" />
		</div>

		<div style="display: flex; justify-content: center;">
			<img style="width: 300px; margin: 40px auto;" src="<?php bloginfo('template_url'); ?>/assets/faded-logo.svg" />
		</div>

		<h1 style="margin: 50px 0; text-align: center; font-family: sans-serif; font-weight: 100; opacity: 0.8;">Spread The Word</h1>

		<h3 style="font-weight: 100; text-align: center; font-size: 24px; opacity: 0.8;">Don't forget to follow us on our social media handles and to tell a friend about <br /> us using the share button below. In addition, we encourage you to use these <br /> hashtags when sharing.</h3>

		<h3 style="margin-bottom: 0; text-align: center; font-size: 25px; font-family: sans-serif; font-weight: 100; opacity: 0.8;"> #DearLadyAnn #WeLoveLetters</h3>

	</div><!-- #primary -->

<?php
get_footer();
