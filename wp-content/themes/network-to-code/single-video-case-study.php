<?php
/**
 * The template for displaying all Single Video Case Studies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Network_To_Code
 */

get_header(); 
?>
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) : the_post();
	?>	

		<!-- Video Case Studies Banner -->
		<section class="vcs-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title-box">
						<h1 class="section-title to-lower"><?php echo get_field('video_case_study_title'); ?></h1>
					</div>
					<div class="col-md-12">
						<div class="vcs-banner__iframe">
							<div class="video-poster active" id="videoPoster" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
								<i class="bi bi-play-circle-fill"></i>
							</div>
							<iframe id="youtubePlayer" width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('video_case_study_youtube_video_id'); ?>;?enablejsapi=1" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-12 title-box vcs-content d-flex align-item-center">
	            		<div class="text-start">
	              			<h3 class="section-title sec-heading">Video Description</h3>
							<p class="sub-title"><?php echo get_field('video_description'); ?></p>

							<div class="single-study">
								<div class="btn-wrap d-flex justify-content-between w-100 mt-3">
	            					<a href="/case-studies/" class="btn back-cs" target="">Back to Case Studies</a>
	            				
	            					<?php if(get_field('video_case_study_read_full_case_study_link')): ?>
	            					<a href="<?php echo get_field('video_case_study_read_full_case_study_link')['url']; ?>" class="btn theme-btn" target="<?php echo get_field('video_case_study_read_full_case_study_link')['target']; ?>"><?php echo get_field('video_case_study_read_full_case_study_link')['title']; ?></a>
	            					<?php endif; ?>
	        					</div>
        					</div>
							
						</div>
	          		</div>
				</div>
			</div>
		</section>

		<?php
		the_content();
		?>

	<?php
	endwhile; // End of the loop.
	?>
</main><!-- #main -->

<script>

	jQuery('.video-poster i').on('click',function(){
		jQuery('.video-poster').removeClass('active');
		seekToTime(00,false);
	})
	window.seekToTime = function(seconds,doScroll = true) {
		const player = document.getElementById("youtubePlayer");
		const videoId = '<?php echo get_field('video_case_study_youtube_video_id'); ?>';
		const autoplay = 1;

		player.src = `https://www.youtube.com/embed/${videoId}?start=${seconds}&autoplay=${autoplay}`;

		if (doScroll) {
			setTimeout(() => {
	
				window.scrollTo({
					behavior: 'smooth'
				});
				jQuery('.video-poster').removeClass('active');
				document.querySelector('.vcs-banner h1').scrollIntoView({ behavior: 'smooth' });
			}, 300);
		}
	}
</script>


<?php
get_footer();