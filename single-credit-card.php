<?php
global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
 	 do_action( 'ava_after_main_title' );

	/* Run the loop to output the posts.
	* If you want to overload this in a child theme then include a file
	* called loop-page.php and that will be used instead.
	*/
						  
	get_template_part( 'includes/loop', 'credit-card-single' );
?>

	<!--end content-->

<?php get_footer(); ?>