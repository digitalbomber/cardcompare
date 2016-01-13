<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/**Linking the shortcode folde in the child theme*/
add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
	$template_url = get_stylesheet_directory();
    	array_unshift($paths, $template_url.'/config-templatebuilder/shortcodes/');

	return $paths;
}

/**Adding the custom class field on the content editor*/
add_theme_support('avia_template_builder_custom_css');

/**Adding the custom builder into the custom post types
add_filter('avf_builder_boxes', 'avia_register_meta_boxes', 10, 1); //Add meta boxes to custom post types
function avia_register_meta_boxes($boxes)
{
	if(!empty($boxes))
{
	foreach($boxes as $key => $box)
{
	$boxes[$key]['page'][] = 'card';
}
}
return $boxes;
}*/

/**Adding the template setting into the custom post type**/
add_filter( 'avf_builder_boxes', 'enfold_customization_posts_builder' );
function enfold_customization_posts_builder( $b ){
	$b[1]['page'] = array( 'portfolio', 'page', 'post', 'article', 'card' );
	return $b;
}