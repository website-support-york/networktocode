<?php

/**
* Layout of sef Case Study banner.
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
$study_detail_video = get_field('study_detail_video', get_the_ID());
$post_button_detail = get_field('post_button_detail', get_the_ID());
$post_button_secondary_detail = get_field('post_button_secondary_detail', get_the_ID());
$post_button_primary_detail = get_field('post_button_primary_detail', get_the_ID());
$hero_image = get_field('hero_image');

$post_name = get_post_type( get_the_ID() );
$case_study_logo = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()), 'thumbnail' )


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> case-studies-banner">
    <div class="cs-banner-bg" style="background-color: #EAF2F9;"></div>
    <div class="container">
        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
        <div class="cs-banner-img" style="background-image: url('<?php echo $hero_image['url']; ?>');">
            <div class="banner-info">
                <figure><img src="<?php echo $case_study_logo; ?>" alt=""></figure>
                <h1><?php echo esc_html( get_the_title(get_the_ID()) ); ?></h1>
            </div>
        </div>
        <div class="btn-wrap d-flex justify-content-between w-100">
            <?php if ($post_button_secondary_detail) { ?><a href="<?php echo $post_button_secondary_detail['url']; ?>" class="btn back-cs" target="<?php echo $post_button_secondary_detail['target']; ?>"><?php echo $post_button_secondary_detail['title']; ?></a><?php } ?>
            <?php if ($post_button_detail) { ?><a href="<?php echo $post_button_detail['url']; ?>" class="btn theme-btn" target="<?php echo $post_button_detail['target']; ?>"><?php echo $post_button_detail['title']; ?></a><?php } ?>
            <?php if ($post_button_primary_detail) { ?><a href="<?php echo $post_button_primary_detail['url']; ?>" class="btn secondary-btn" target="<?php echo $post_button_primary_detail['target']; ?>"><?php echo $post_button_primary_detail['title']; ?></a><?php } ?>
        </div>
    </div>
</div>