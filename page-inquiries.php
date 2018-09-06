<?php 

	function __update_post_meta( $post_id, $field_name, $value = '' )
	{
	    if ( empty( $value ) OR ! $value )
	    {
	        delete_post_meta( $post_id, $field_name );
	    }
	    elseif ( ! get_post_meta( $post_id, $field_name ) )
	    {
	        add_post_meta( $post_id, $field_name, $value );
	    }
	    else
	    {
	        update_post_meta( $post_id, $field_name, $value );
	    }
	}

	if ( isset( $_POST['submitted'] ) ) {
		$post_information = array(
	    'post_title' => 'New inquiry from ' . $_POST['first'],
	    'post_type' => 'business_inquiries',
		);
 
		$post_id = wp_insert_post( $post_information );

		__update_post_meta( $post_id, 'first_name', $_POST['first'] );
		__update_post_meta( $post_id, 'last_name', $_POST['last'] );
		__update_post_meta( $post_id, 'company_name', $_POST['company-name'] );
		__update_post_meta( $post_id, 'company_title', $_POST['title'] );
		__update_post_meta( $post_id, 'email', $_POST['email'] );
		__update_post_meta( $post_id, 'message', $_POST['message'] );

		// if(isset($_POST['anonymous'])) {
		// 	__update_post_meta( $post_id, 'anonymous', true );
		// } else {
		// 	__update_post_meta( $post_id, 'anonymous', false );
		// }


		if ( $post_id ) {
		    wp_redirect( home_url() );
		    exit;
		}
	}

?>

<?php
/**
Template Name: Inquiries Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */
	wp_head();
	get_header();
?>

	<div style="max-width: 600px; margin: 0 auto; font-family: sans-serif; font-weight: 100;">
		<h1 style="text-align: center; font-weight: 100; border-bottom: 3px solid #ea8b88; width: 280px; margin: 10px auto; margin-top: 50px;">Business Inquiries</h1>
		<h3 style="font-weight: 100; text-align: center;">Select a topic below related to your inquiry</h3>
		<form action="" id="primaryPostForm" method="POST" class="email-form">

	  <!--   <div class="email_sub-container">
		    <h3>To:</h3>
		    <input
		    	id="to"
		        name="to"
		        type="text"
		        placeholder="LadyAnn@Pankaata.com"
		        disabled
			    />
		</div> -->
		<label class="inquiries-main-label">Name</label>
		 <div class="inquiries_sub-container">
	    <!-- <h3>From:</h3> -->
	    	
	    	<div class="inquiries-input-container">
			    <input
			    	class="required inquiries-input-1"
			        name="first"
			        id="first"
			        type="text"
			        placeholder=""
				    />
				    <label class="inquiries-small-bottom">First Name</label>
			</div>
			<div class="inquiries-input-container">
			    <input
		    	class="required"
		        name="last"
		        id="last"
		        type="text"
		        placeholder=""
			    />
			    <label class="inquiries-small-bottom">Last Name</label>
			</div>
		</div>
		<label class="inquiries-main-label">Company Information</label>
	 	<div class="inquiries_sub-container">
		    <!-- <h3>Subject:</h3> -->
		   <div class="inquiries-input-container">
			    <input
			    	class="required inquiries-input-1"
			        name="company-name"
			        id="company-name"
			        type="text"
			        placeholder=""
				    />
				    <label class="inquiries-small-bottom">Company Name</label>
			</div>
			<div class="inquiries-input-container">
			    <input
		    	class="required"
		        name="title"
		        id="title"
		        type="text"
		        placeholder=""
			    />
			    <label class="inquiries-small-bottom">Title</label>
			</div>
		</div>
		<label>Email Address</label>
		<div class="inquiries_sub-container">
		    <!-- <h3>Subject:</h3> -->
		   <div class="inquiries-input-container-2">
			    <input
			    	class="required inquiries-input-1"
			        name="email"
			        id="email"
			        type="text"
			        placeholder=""
				    />
			</div>
		</div>
		<label class="inquiries-main-label">Message</label>
		<div class="inquiries_sub-container-2">
		    <!-- <h3>Message Box:</h3> -->
		    <textarea class="required" id="message" placeholder="" name="message" rows="10"></textarea>
		</div>

		<!-- <div class="email_sub-container">
		    <div>Dear Lady. Ann, please keep me anonymous</div>
		    <input
		    	name="anonymous"
		    	style="width: 30px; height: 30px; marginTop: 5px"
		        type="checkbox"
		        checked
		    />
		</div> -->

		<div style="color: #000; opacity: 0.5; font-size: 10px;">
				By clicking send, you agree and acknowledge that the use of information sent to Lady. Ann is subject to the terms and conditions contained here on our <a style="text-decoration: none;" href="<?php get_home_url()?>/policy"><span style="color: #EA8B88; font-weight: bold; font-style: italic;">Terms of Use</span></a>, <a style="text-decoration: none;" href="<?php get_home_url()?>/policy"><span style="color: #EA8B88; font-weight: bold; font-style: italic;">Privacy Policy</span></a>, and <a style="text-decoration: none;" href="<?php get_home_url()?>/policy"><span style="color: #EA8B88; font-weight: bold; font-style: italic;">Cookie Policy</span></a>.
			</div>

		<div class="inquiries_sub-container button-container">
			
			<input type="hidden" name="submitted" id="submitted" value="true" />
			<div style="display: flex; justify-content: center; width: 100%;">
		    	<button type="submit" class="email-submit-btn">Send</button>
			</div>
	  	</div>
	  
  	</form>
	</div><!-- #primary -->

<?php
get_footer();

