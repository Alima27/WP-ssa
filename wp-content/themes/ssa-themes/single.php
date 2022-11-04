<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ssa-themes
 */

get_header();
?>
	<main class="wrapper">
		    <?php the_content(); ?>
		</main>

		<?php 
		get_footer( ) 
		?>