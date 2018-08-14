<?php
/**
Template Name: Inquiries Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lady-ann
 */

?>

	<div style="max-width: 600px; margin: 0 auto; font-family: sans-serif; font-weight: 100;">
		<h1 style="text-align: center; font-weight: 100; border-bottom: 7px solid #ea8b88; width: 280px; margin: 10px auto; padding-bottom: 10px; margin-top: 80px;">Business Inquiries</h1>
		<h3 style="font-weight: 100; text-align: center;">Select a topic below related to your inquiry</h3>
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
		<select class="select-custom" placeholder="*Select a topic" style="opacity: 0.6; border: none; font-size: 18px; background: none; width: 102%; margin-top: 20px; display: flex; margin-left: -8px;">
			<option disabled selected>*Select a topic</option>
			<option>Option 1</option>
			<option>Option 2</option>
		</select>
		<h3 style="opacity: 0.6; font-weight: 100; margin-top: 20px; font-size: 18px; border: none;">Comment</h3>
		<textarea style="width: 100%; height: 200px; border: 1px solid #d3d3d3;"></textarea>
		<div style="display: flex; justify-content: center;">
			<button style="box-shadow: 1px 1px 1px #d3d3d3; padding: 15px 50px; background: #d3d3d3; color: #ea8b88; font-size: 18px; margin: 10px auto; cursor: pointer;">Send</button>
		</div>
	</div><!-- #primary -->

<?php
