<?php
/**
 * Template Name: Template for elementor page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="main">

	<?php 
	
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				the_content();
			}
		}

	 ?>

</main>

<?php get_footer(); 
