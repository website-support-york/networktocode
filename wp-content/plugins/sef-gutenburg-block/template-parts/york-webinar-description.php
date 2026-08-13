<?php

/**
* Layout of Hero banner for video and podcast
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}
$video_case_study_title = get_field('video_case_study_title');
$title = get_field('title');
$want_to_add_podcast = get_field('want_to_add_podcast');
$podcast = get_field('podcast');
$author_headshot = get_field('author_headshot');
$heading = get_field('heading');
$long_heading = get_field('long_heading');
$podcast_authour = get_field('podcast_authour');
$podcast_miniuts = get_field('podcast_miniuts');
$podcast_date = get_field('podcast_date');
$podcast_minut = get_field('podcast_minut');
$video_case_study_youtube_video_id = get_field('video_case_study_youtube_video_id');
$video_description = get_field('video_description');
$video_case_study_read_full_case_study_link = get_field('video_case_study_read_full_case_study_link');
$podcast_miniuts = get_field('podcast_miniuts');
?> 
<?php if( $want_to_add_podcast ):?>
<section class="vcs2-banner">
    <div class="container">
        <div class="row">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <div class="col-lg-4 img-box">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" />
            </div>
            <?php endif;?>
            <div class="col-lg-8">
                <div class="pod-banner">
                    <?php if(!empty($author_headshotg) || !empty($podcast_authour) ):?>
                    <div class="author">
                        <div class="author-img">
                            <img src="<?php echo $author_headshot['url'];?>" alt="<?php echo $author_headshot['url'];?>" />
                        </div>
                        <div class="aut-name">
                            <?php echo $podcast_authour;?>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="pod-content">
                        <?php if(!empty($heading)):?>
                        <div class="heading">
                            <?php echo $heading;?>
                        </div>
                        <?php endif;?>
                        <?php if(!empty($long_heading)):?>
                            <div class="long-heading">
                                <?php echo $long_heading;?>
                            </div>
                        <?php endif;?>
                        <?php 
                            if( $podcast ) {
                                echo '<audio id="podcastPlayer" controls>';
                                echo '<source src="' . esc_url($podcast['url']) . '" type="audio/mpeg">';
                                echo '</audio>';
                            }
                        ?>
                        <div class="date-min">
                            <?php if(!empty($podcast_date)):?>
                            <div class="date">
                                <?php 
                                try {
                                    $date_obj = DateTime::createFromFormat('d/m/Y', $podcast_date);
                                    echo esc_html($date_obj->format('F j, Y')); // September 3, 2025
                                } catch (Exception $e) {
                                    // Fallback: just output raw value
                                    echo esc_html($podcast_date);
                                }
                                ?>
                            </div>
                            <?php endif;?>
                            <?php if(!empty($podcast_minut)):?>
                            <div class="pod-min">
                                <?php echo $podcast_minut;?>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 title-box vcs-content d-flex align-item-center">
                <div class="text-start">
                    <?php if(!empty($title)):?><h3 class="section-title sec-heading"><?php echo $title;?></h3><?php endif;?>
                    <?php if(!empty($video_description)):?><p class="sub-title"><?php echo $video_description; ?></p><?php endif;?>

                    <div class="single-study">
                        <div class="btn-wrap d-flex justify-content-between w-100 mt-3">
                            <!-- <a href="/resources/webinars/" class="btn back-cs" target="">Back to Webinars</a> -->
                        
                            <?php if(!empty($video_case_study_read_full_case_study_link)): ?>
                            <a href="<?php echo $video_case_study_read_full_case_study_link['url']; ?>" class="btn theme-btn" target="<?php echo $video_case_study_read_full_case_study_link['target']; ?>"><?php echo $video_case_study_read_full_case_study_link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php else:?>
<!-- Video Case Studies Banner -->
<section class="vcs-banner">
    <div class="container">
        <div class="row">
            <?php if(!empty($video_case_study_title)):?>
            <div class="col-md-12 title-box">
                <h1 class="section-title to-lower"><?php echo $video_case_study_title; ?></h1>
            </div>
            <?php endif;?>
            <div class="col-md-12">
                <div class="vcs-banner__iframe">
                    <div class="video-poster active" id="videoPoster" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
                        <i class="bi bi-play-circle-fill"></i>
                    </div>
                    <?php if(!empty($video_case_study_youtube_video_id)):?>
                        <iframe id="youtubePlayer" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_case_study_youtube_video_id; ?>;?enablejsapi=1" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
                    <?php endif;?>
                </div>
            </div>

            <div class="col-md-12 title-box vcs-content d-flex align-item-center">
                <div class="text-start">
                    <?php if(!empty($title)):?><h3 class="section-title sec-heading"><?php echo $title;?></h3><?php endif;?>
                    <?php if(!empty($video_description)):?><p class="sub-title"><?php echo $video_description; ?></p><?php endif;?>

                    <div class="single-study">
                        <div class="btn-wrap d-flex justify-content-between w-100 mt-3">
                            <!-- <a href="/resources/webinars/" class="btn back-cs" target="">Back to Webinars</a> -->
                        
                            <?php if(!empty($video_case_study_read_full_case_study_link)): ?>
                            <a href="<?php echo $video_case_study_read_full_case_study_link['url']; ?>" class="btn theme-btn" target="<?php echo $video_case_study_read_full_case_study_link['target']; ?>"><?php echo $video_case_study_read_full_case_study_link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
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
				// const wrapper = document.querySelector('.vcs-banner h1');
				// const rect = wrapper.getBoundingClientRect();
				// const offsetTop = window.pageYOffset + rect.top;
	
				// Define top offset based on screen width
				// const offsetPadding = window.innerWidth > 768 ? 50 : 60;
	
				window.scrollTo({
					behavior: 'smooth'
				});
				jQuery('.video-poster').removeClass('active');
				document.querySelector('.vcs-banner h1').scrollIntoView({ behavior: 'smooth' });
			}, 300);
		}
	}

   jQuery(document).ready(function($){
    window.jumpTo = function(seconds) {
        var player = document.getElementById("podcastPlayer");
        if (player) {
            player.currentTime = seconds;
            player.play();

            $('html, body').animate({
                scrollTop: $(".vcs2-banner").offset().top
            }, 800);
        }
    }
});
</script>
