<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Network_To_Code
 */

get_header(); 
if (in_category('event')) {
    wp_redirect(home_url());
    exit;
}
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
			//get_template_part( 'template-parts/content', get_post_type() );
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();