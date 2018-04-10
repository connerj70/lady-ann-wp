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

    <form method="post" class="email-form">

	    <div class="email_sub-container">
		    <h3>To:</h3>
		    <input
		        name="to"
		        type="text"
		        placeholder="LadyAnn@Pankaata.com"
		        disabled
			    />
		</div>
		
		 <div class="email_sub-container">
	    <h3>From:</h3>
		    <input
		        name="cptFrom"
		        type="text"
		        placeholder="Johndoe@gmail.com"
			    />
		</div>

		 <div class="email_sub-container">
	    <h3>Subject:</h3>
	    <input
	        name="cptTitle"
	        type="text"
	        placeholder="Hi Lady Ann."
		    />
		</div>

		<div class="email_sub-container">
	    <h3>Situation Box:</h3>
	    <textarea
	        value={this.state.situation}
	        placeholder="Dear Lady. Ann"
	        name="cptContent"
	        rows="10"
		    ></textarea>
		</div>

		<div class="email_sub-container">
	    <h3>Dear Lady. Ann, please keep me anonymous</h3>
	    <input
	    	name="cptAnon"
	    	style="width: 30px; height: 30px; marginTop: 5px"
	        type="checkbox"
	    />
		</div>

		<div class="email_sub-container button-container">
	    	<button type="submit" class="email-submit-btn">Send</button>
	  	</div>

	  	<input type="hidden" name="user_letters" id="post_type" value="user_letters" />
	  	<?php wp_nonce_field( ‘cpt_nonce_action’, ‘cpt_nonce_field’ ); ?>
	  	<?php 
			if (isset( $_POST[‘cpt_nonce_field’] )

			&& wp_verify_nonce( $_POST[‘cpt_nonce_field’], ‘cpt_nonce_action’ ) ) {

			// create post object with the form values

			$my_cptpost_args = array(

			‘post_title’    => $_POST[‘cptTitle’],

			‘post_content’  => $_POST[‘cptContent’],

			‘post_status’   => ‘pending’,

			‘post_type’ => $_POST[‘post_type’]

			);

			// insert the post into the database

			$cpt_id = wp_insert_post( $my_cptpost_args, $wp_error);

			}
  		?>
  	</form>

  	
</div><!-- #primary -->

<?php
get_footer();