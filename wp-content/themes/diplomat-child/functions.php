<?php
/**
* The functions.php file of a child theme does not override its counterpart from the parent.
* Instead, it is loaded in addition to the parent’s functions.php
*
* @link https://codex.wordpress.org/Child_Themes
*
*/

// register and enqueue the stylesheet.
function register_child_theme_styles() {

	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'register_child_theme_styles', 9999 );

function create_projects_post() {
    $labels = array(
        'name'                  => _x( 'SDGoals', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'SDGoals', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'SDGoals', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'SDGoals', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
    );
 
    $args = array(
		'labels'             => $labels,
		'menu_position'      => 5,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'SDGoals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-customizer',
        'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' 		 => array('category'),
    );
 
    register_post_type( 'SDGoals', $args );
}
 
add_action( 'init', 'create_projects_post' ); 

add_action( 'wp_enqueue_scripts', 'register_child_theme_styles', 9999 );

function create_solutions_post() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Projects', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Projects', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
    );
 
    $args = array(
		'labels'             => $labels,
		'menu_position'      => 5,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-site-alt2',
        'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' 		 => array('category'),
    );
 
    register_post_type( 'Project', $args );
}
 
add_action( 'init', 'create_solutions_post' ); 

//email for user after post

// function authorNotification($post_id) {
//     $post = get_post($post_id);
//     $author = get_userdata($post->post_author);
  
//     $message = "
//        Hi ".$author->display_name.",
//        Your project, ".$post->post_title." has just been published at ".get_permalink( $post_id ).". Well done!
//     ";
//     wp_mail($author->user_email, "Your article is online", $message);
//  }
//  add_action('publish_post', 'authorNotification');