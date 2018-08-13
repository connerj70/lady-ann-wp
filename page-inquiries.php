<?php
/**
Template Name: Inquiries Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */

?>

	<div style="max-width: 600px; margin: 0 auto;">
		<h1 style="text-align: center;">Business Inquiries</h1>
		<h3 style="text-align: center;">Select a topic below related to your inquiry</h3>
		<div style="display: flex; justify-content: space-between;">
			<div style="width: 50%; display: flex; flex-direction: column;">
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*First Name" type="text"/>
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*Organization" type="text"/>
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*Job Title" type="text"/>
			</div>
			<div style="width: 50%; display: flex; flex-direction: column;">
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*Last Name" type="text"/>
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*Work Email" type="text"/>
				<input style="margin-top: 20px; font-size: 18px; border: none; width: 50%;" placeholder="*Phone Number" type="text"/>
			</div>
		</div>
		<select placeholder="*Select a topic" style="border: none; font-size: 18px; background: none; width: 85%; margin-top: 20px; display: flex;">
			<option disabled selected>*Select a topic</option>
			<option>Option 1</option>
			<option>Option 2</option>
		</select>
		<h3 style="margin-top: 20px; font-size: 18px; border: none;">Comment</h3>
		<textarea style="width: 100%; height: 200px; border: 1px solid #d3d3d3;"></textarea>
		<button>Send</button>
	</div><!-- #primary -->

<?php
