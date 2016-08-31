<?php 

function get_json_data(){
	$json = file_get_contents('https://reddit.com/r/headertag.json');
	$obj = json_decode($json);

	return $obj->data->children[0]->data->subreddit;
}

function the_current_year(){

	$this_year = date('Y');


	return $this_year;

}


function complete_theme_styles(){
	//bootstrap theme
	wp_register_style('complete_theme_bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
	wp_enqueue_style('complete_theme_bootstrap' );

	wp_register_style('complete_theme_style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('complete_theme_style');
}



add_action( 'wp_enqueue_scripts', 'complete_theme_styles');

