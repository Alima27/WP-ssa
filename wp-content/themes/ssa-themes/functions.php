<?php

/**
 * ssa-themes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ssa-themes
 */

add_action( 'wp_enqueue_scripts', 'ssa_assets' );
add_action( 'after_setup_theme', 'ssa_setup_theme' );
add_filter( 'show_admin_bar', '__return_false' );

function ssa_assets() {
	// style
	wp_enqueue_style('maincss',  get_template_directory_uri( ). '/assets/styles/style.css');
	wp_enqueue_style('swiper1',  get_template_directory_uri( ). '/assets/styles/swiper.css');
	wp_enqueue_style('fontawesome',  get_template_directory_uri( ). '/assets/fontawesome/css/all.css');
	wp_enqueue_style('animate-min',  get_template_directory_uri( ). '/assets/styles/animate.min.css');
	wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/js/jquery.min.js');
	// js
	wp_enqueue_style( 'bootstrap',  get_template_directory_uri( ). '/assets/styles/bootstrap.min.css');
	wp_enqueue_style( 'swiper',  get_template_directory_uri( ). '/assets/styles/swiper-bundle.min.css');
	wp_enqueue_script( 'index.js', get_template_directory_uri() . '/js/index.js');
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/js/swiper-bundle.min.js');
	wp_enqueue_script( 'wow.js', get_template_directory_uri() . '/js/wow.min.js');
}

function ssa_setup_theme(){
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menu('menu-header', 'Menu in header');
}

function ssa_images( $name ){
	echo get_template_directory_uri() .'/assets/img/'.$name;
}
function ssa_images__img( $name ){
	echo get_template_directory_uri() .'/assets/img/img/'.$name;
}
