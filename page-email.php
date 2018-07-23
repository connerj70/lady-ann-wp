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
	    'post_title' => $_POST['title'],
	    'post_type' => 'user_letters',
	    'post_status' => 'pending'
		);
 
		$post_id = wp_insert_post( $post_information );

		__update_post_meta( $post_id, 'From', $_POST['from'] );
		__update_post_meta( $post_id, 'Subject', $_POST['title'] );
		__update_post_meta( $post_id, 'situation_box', $_POST['situation'] );

		if(isset($_POST['anonymous'])) {
			__update_post_meta( $post_id, 'anonymous', true );
		} else {
			__update_post_meta( $post_id, 'anonymous', false );
		}


		if ( $post_id ) {
		    wp_redirect( home_url() );
		    exit;
		}
	}

?>
<?php
/*
*Template Name: Email Page
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
*/
get_header();
?>

<div class="email-container">

	<img class="email-banner" src="<?php bloginfo('template_url'); ?>/assets/banner.png" />
	<div style="text-align:left; width: 100%; max-width: 700px; margin-top: 10px;">
		To send an email to Lady. Ann, fill out the form below and submit. All fields are required.
	</div>
	<!-- <div class="lady-ann-logo2-container">
   		<img class="lady-ann-logo2" src="<?php bloginfo('template_url'); ?>/assets/circular-logo.svg" />
    </div>
 -->
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
		
		 <div class="email_sub-container">
	    <!-- <h3>From:</h3> -->
		    <input
		    	class="required"
		        name="from"
		        id="from"
		        type="text"
		        placeholder="Enter Your Email Here"
			    />
		</div>

	 	<div class="email_sub-container">
		    <!-- <h3>Subject:</h3> -->
		    <input
		    	class="required"
		        name="title"
		        id="title"
		        type="text"
		        placeholder="Subject"
			    />
		</div>

		<div class="email_sub-container">
		    <!-- <h3>Message Box:</h3> -->
		    <textarea
		    	class="required"
		    	id="situation"
		        placeholder="Go ahead and tell it all..."
		        name="situation"
		        rows="10"
			    >
			</textarea>
		</div>

		<div class="email_sub-container">
		    <div>Dear Lady. Ann, please keep me anonymous</div>
		    <input
		    	name="anonymous"
		    	style="width: 30px; height: 30px; marginTop: 5px"
		        type="checkbox"
		        checked
		    />
		</div>

		<div style="color: #000;">
				By clicking submit, you agree and acknowledge that the use of information to Lady. Ann is subject to the terms and conditions contained here on our Terms of Service, Privacy Policy, and Copyright Policy.
			</div>

		<div class="email_sub-container button-container">
			
			<input type="hidden" name="submitted" id="submitted" value="true" />
			<div style="display: flex; justify-content: center; width: 100%;">
		    	<button type="submit" class="email-submit-btn">Submit Letter</button>
			</div>
	  	</div>
	  
  	</form>

  	
</div><!-- #primary -->

<?php
get_footer();
