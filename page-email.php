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

	<div class="lady-ann-logo2-container">
   		<img class="lady-ann-logo2" src="<?php bloginfo('template_url'); ?>/assets/circular-logo.svg" />
    </div>

    <form action="" id="primaryPostForm" method="POST" class="email-form">

	    <div class="email_sub-container">
		    <h3>To:</h3>
		    <input
		    	id="to"
		        name="to"
		        type="text"
		        placeholder="LadyAnn@Pankaata.com"
		        disabled
			    />
		</div>
		
		 <div class="email_sub-container">
	    <h3>From:</h3>
		    <input
		    	class="required"
		        name="from"
		        id="from"
		        type="text"
		        placeholder="Johndoe@gmail.com"
			    />
		</div>

	 	<div class="email_sub-container">
		    <h3>Subject:</h3>
		    <input
		    	class="required"
		        name="title"
		        id="title"
		        type="text"
		        placeholder="Hi Lady Ann."
			    />
		</div>

		<div class="email_sub-container">
		    <h3>Situation Box:</h3>
		    <textarea
		    	class="required"
		    	id="situation"
		        placeholder="Dear Lady. Ann"
		        name="situation"
		        rows="10"
			    >
			</textarea>
		</div>

		<div class="email_sub-container">
		    <h3>Dear Lady. Ann, please keep me anonymous</h3>
		    <input
		    	name="anonymous"
		    	style="width: 30px; height: 30px; marginTop: 5px"
		        type="checkbox"
		        checked
		    />
		</div>

		<div class="email_sub-container button-container">
			<input type="hidden" name="submitted" id="submitted" value="true" />
		    <button type="submit" class="email-submit-btn">Send</button>
	  	</div>
	  
  	</form>

  	
</div><!-- #primary -->

<?php
get_footer();
