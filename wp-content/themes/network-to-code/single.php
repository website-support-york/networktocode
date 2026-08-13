<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Network_To_Code
 */

get_header();

if ( in_category('event') || in_category('news') || in_category('sub-processors') || in_category('podcast') || in_category('blog') || in_category('webinars') ) {
    wp_redirect(home_url());
    exit;
}
?>



	<main id="primary" class="site-main container mt-5">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			// echo '<p>excerpt: (to be hide)</p>';
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'network-to-code' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'network-to-code' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<style type="text/css">nav.navigation.post-navigation { display: none; }.entry-meta { margin-bottom: 20px; }footer.entry-footer { display: none; }</style>
<?php
// get_sidebar();
get_footer();