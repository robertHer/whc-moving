<?php
/**
 * The template for displaying all pages
 * Template Name: Whc-home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-underscores
 */

get_header();
?>

	<div id="primary" class="content-area container">
    <div class="row">
    <div class="col-md-12">
    <?php 
    the_content();
    
    ?>
    </div>
    </div>
		<!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
