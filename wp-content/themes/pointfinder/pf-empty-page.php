<?php 
/*
Template Name: Empty Page
*/

get_header();
	if (have_posts()){ 
		while (have_posts()) : the_post();
		the_content();
		endwhile;
	};
get_footer();
?>