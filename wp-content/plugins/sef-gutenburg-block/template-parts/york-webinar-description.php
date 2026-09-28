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
$recording_poster_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
$recording_poster_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
$video_preview = get_field('webinar_video_preview_image');

if ( empty( $recording_poster_alt ) ) {
    $recording_poster_alt = __( 'Webinar recording');
}
?> 

<!-- Video Case Studies Banner -->
<section id="<?php echo esc_attr($id); ?>" class="-vcs-banner webinar_video_wrapper <?php echo esc_attr($className); ?>" >
    <div class="container">
        <div class="row">
            <?php if(!empty($video_case_study_title)):?>
            <div class="col-md-12 title-box">
                <h1 class="section-title to-lower"><?php echo $video_case_study_title; ?></h1>
            </div>
            <?php endif;?>
            <div class="col-md-12">
                <div class="vcs-banner__iframe" style="background-image: url('<?php echo esc_url( $video_preview['url'] ); ?>'); background-size: cover; background-position: center;">
                    <h2 style="display:none;">Webinar Recording</h2>
                <?php if ( ! empty( $video_case_study_youtube_video_id ) || ! empty( $recording_poster_url ) ) : ?>
                        <section class="player" id="recording">
                            <?php if ( ! empty( $recording_poster_url ) ) : ?>
                                <img class="player-img" src="<?php echo esc_url( $recording_poster_url ); ?>" alt="<?php echo esc_attr( $recording_poster_alt ); ?>" width="881" height="496" />
                            <?php endif; ?>
                            <?php if ( ! empty( $video_case_study_youtube_video_id ) ) : ?>
                                <button class="play-btn" type="button" aria-label="<?php esc_attr_e( 'Play webinar', 'sef-boilerplate' ); ?>" data-video-id="<?php echo esc_attr( $video_case_study_youtube_video_id ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/play-icon.svg' ); ?>" alt="" width="95" height="94" />
                                </button>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-12 title-box vcs-content d-flex align-item-center">
                <div class="text-start">
                    <?php if(!empty($title)):?><h2 class="section-title sec-heading"><?php echo $title;?></h2><?php endif;?>
                    <?php if(!empty($video_description)):?>
                        <div class="webinar_description_content">
                            <?php echo wp_kses_post( $video_description ); ?>
                        </div>
                    <?php endif;?>

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

<script>

	function normalizeTimeToSeconds(value) {
		if (typeof value === 'number') {
			return value;
		}

		if (typeof value !== 'string') {
			return 0;
		}

		var cleanValue = value.trim();
		if (!cleanValue) {
			return 0;
		}

		if (/^\d+$/.test(cleanValue)) {
			return parseInt(cleanValue, 10);
		}

		var parts = cleanValue.split(':').map(function(part) {
			return parseInt(part, 10) || 0;
		}).reverse();

		var seconds = 0;
		if (parts[0] !== undefined) {
			seconds += parts[0];
		}
		if (parts[1] !== undefined) {
			seconds += parts[1] * 60;
		}
		if (parts[2] !== undefined) {
			seconds += parts[2] * 3600;
		}

		return seconds;
	}

	document.querySelectorAll('.webinar_video_wrapper .play-btn').forEach(function (button) {
		button.addEventListener('click', function () {
			var player = button.closest('.player');
			var videoId = button.getAttribute('data-video-id');
			var iframe = document.createElement('iframe');

			iframe.id = 'youtubePlayer';
			iframe.src = 'https://www.youtube.com/embed/' + encodeURIComponent(videoId) + '?autoplay=1&rel=0';
			iframe.title = 'Webinar recording';
			iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
			iframe.allowFullscreen = true;

			player.replaceChildren(iframe);
		});
	});

    window.seekToTime = function(seconds, doScroll = true) {

        const timeInSeconds = normalizeTimeToSeconds(seconds);
        const videoId = '<?php echo get_field('video_case_study_youtube_video_id'); ?>';

        let iframe = document.getElementById('youtubePlayer');

        // Create iframe if it hasn't been initialized yet
        if (!iframe) {
            const player = document.querySelector('.webinar_video_wrapper .player');

            if (!player) {
                return;
            }

            iframe = document.createElement('iframe');

            iframe.id = 'youtubePlayer';
            iframe.title = 'Webinar recording';
            iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
            iframe.allowFullscreen = true;

            player.replaceChildren(iframe);
        }

        // Set the video and timestamp
        iframe.src =
            'https://www.youtube.com/embed/' +
            encodeURIComponent(videoId) +
            '?autoplay=1&rel=0&start=' +
            timeInSeconds;

        if (doScroll) {
            setTimeout(() => {

                jQuery('.video-poster').removeClass('active');

                const webinarTitle =
                    document.querySelector('.webinar_video_wrapper h1');

                if (webinarTitle) {
                    webinarTitle.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

            }, 300);
        }
    };

   jQuery(document).ready(function($){
    window.jumpTo = function(seconds) {
        var player = document.getElementById("youtubePlayer") || document.getElementById("podcastPlayer");
        var timeInSeconds = normalizeTimeToSeconds(seconds);

        if (!player) {
            return;
        }

        if (typeof player.currentTime !== 'undefined') {
            player.currentTime = timeInSeconds;
            if (typeof player.play === 'function') {
                player.play();
            }
        } else if (player.tagName === 'IFRAME') {
            var iframeSrc = new URL(player.src || 'https://www.youtube.com/embed');
            iframeSrc.searchParams.set('start', String(timeInSeconds));
            iframeSrc.searchParams.set('autoplay', '1');
            player.src = iframeSrc.toString();
        }

        var banner = $('.vcs2-banner, .webinar_video_wrapper');
        if (banner.length) {
            $('html, body').animate({
                scrollTop: banner.offset().top
            }, 800);
        }
    }
});
</script>
