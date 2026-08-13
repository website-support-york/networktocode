<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Network_To_Code
 */

get_header();
?>
<section class="error-404 not-found">
       <div class="page-notfound">
            <h1>404</h1>
            <h5>Page Not Found</h5>
            <p>The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.</p>
            <div class="pg-btn">
                <div class="button-box wow fadeInUp  delay-9 animated" style="visibility: visible; animation-name: fadeInUp;">
                  <span class="text-container">
                    <a href="https://retextiondev.wpengine.com/">Go Home</a>
                  </span>
                </div>
                <div class="button-box wow fadeInUp  delay-9 animated" style="visibility: visible; animation-name: fadeInUp;">
                  <span class="text-container">
                    <a href="https://retextiondev.wpengine.com/contact-us/" class="btn-red">Contact Us</a>
                  </span>
                </div>
            </div>
        </div>			
</section><!-- .error-404 -->
<?php
get_footer();