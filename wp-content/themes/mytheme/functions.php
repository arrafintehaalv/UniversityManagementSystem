<?php

function calling_resources()
{
	wp_enqueue_style('style',get_stylesheet_uri(),'','1.0.0');
	wp_enqueue_style('comment_style',get_template_directory_uri().'/css/comments.css','','1.0.0');
}
add_action('wp_enqueue_scripts','calling_resources');


function our_theme_setup()
{
	register_nav_menus(array(
	'primary' => __('Primary Menu'),	

));
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','our_theme_setup');

function ourWidgetInit()
{
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="sidebar_single_area clear">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="wid_heading">',
		'after_title' => '</h2>',
	)
	);
}
add_action('widgets_init','ourWidgetInit');

function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class=''.readmore.''>Continue Reading &raquo;</a>";
	echo $excerpt;
}

function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}

