<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
* http://bioee.academicwebpages.com/wp-content/uploads/2017/04/colombia-ee-logo-header-1-e1491853115185.png
*/

/*Replaces "Blog - Latest News" with the post title :*/

add_filter('avf_title_args', 'fix_single_post_title', 10, 2);
function fix_single_post_title($args,$id)
{
    if ( $args['title'] == 'Blog - Latest News' )
    {
        $args['title'] = get_the_title($id);
        $args['link'] = get_permalink($id);
        $args['heading'] = 'h1';	
    }

    return $args;
}

/* ADDS FULL WIDTH BANNER ATOP ALL PAGES - OR INTERIOR ONLY */
function after_head_image_func($content){
	if ( !is_home() && !is_front_page() ) {
		//echo "<div  align='center'><img class='avia_image' src='/wp-content/uploads/2015/12/maize-breeding-statistical-genetics-logo-1500-wide-cropped-centered-e5cc00.png' width='100%' /></div>"; 
	} 
}
add_action('ava_before_bottom_main_menu', 'after_head_image_func');

/* Add widgets to header for university logo */
// additional logo
add_action('ava_before_bottom_main_menu','custom_things');
function custom_things() {
	echo '<strong class="logo bg-logo secondary-logo" style="right: 0 !important; top: 0; position: absolute;"><div class="logo-link-box" style="padding-top: 20px; max-width: 294px; right: 0; position: absolute;"><img src="/wp-content/uploads/2017/04/columbia-logo.png"></div></strong>';
}