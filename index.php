<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Childs_Photography
 * @since 1.0.0
 */

define( 'WP_USE_THEMES', false );
get_header(); 
?>

<main>
	<section>
		<h1>Hello world!</h1>
	</section>
</main>

<?php get_footer(); ?>