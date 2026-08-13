<?php
/**
 * Layout of Sef Two video box 
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

$heading                   = get_field('heading');
$title                     = get_field('title');
$bullets_content           = get_field('bullets_content'); // ✅ removed "title;bullets_content"
$explore_support_offerings = get_field('explore_support_offerings');
$video                     = get_field('video');
$thumbnail_image           = get_field('thumbnail_image'); 
?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?>" style="background-color: <?php echo $sef_richtext_bg_color; ?>">
    <div class="container">
        <div class="row">
            <?php if ( ! empty( $heading ) ) : ?>
            <div class="col-md-12 title-box wow animate__animated animate__fadeInUp">
                <h3 class="section-title"><?php echo $heading;?></h3>
            </div>
            <?php endif; ?>
            
            <div class="col-lg-6">
                <?php if ( ! empty( $title ) ) : ?>
                    <span><?php echo esc_html( $title ); ?></span>
                <?php endif; ?>
            
                <?php if ( ! empty( $bullets_content ) ) : ?>
                    <p><?php echo  $bullets_content; ?></p>
                <?php endif; ?>
                
                <?php if ( ! empty( $explore_support_offerings ) ) : ?>
                    <a href="<?php echo esc_url( $explore_support_offerings['url'] ); ?>" class="btn theme-btn wow animate__ animate__fadeInUp delay4" target="<?php echo esc_attr( $explore_support_offerings['target'] ); ?>">
                        <?php echo esc_html( $explore_support_offerings['title'] ); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <div class="card-video">
                    <?php if(!empty($video)):?><a href="<?php echo $video;?>" data-fancybox="" data-caption="<?php echo $title;?>">
                    <?php if(!empty($thumbnail_image)):?><img src="<?php echo $thumbnail_image['url'];?>" alt="<?php echo $thumbnail_image['alt'];?>" title="<?php echo $thumbnail_image['title'];?>"><?php endif;?>
                    <span>
                        <svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.4525 0.729492C36.4823 0.729492 38.5121 0.729492 40.5419 0.729492C42.2673 0.958527 43.9926 1.11599 45.6745 1.54543C59.7528 5.10978 68.9595 13.7415 73.3092 27.4264C74.0196 29.6881 74.3386 32.0214 74.614 34.369C74.614 36.373 74.614 38.3771 74.614 40.3811C74.3821 42.0846 74.2226 43.788 73.7876 45.4485C70.1774 59.3338 61.4347 68.4379 47.5738 72.718C45.283 73.4194 42.9197 73.7343 40.5419 74.0063C38.5121 74.0063 36.4823 74.0063 34.4525 74.0063C32.7271 73.7773 31.0018 73.6198 29.3199 73.1904C15.2416 69.6403 6.03489 61.0086 1.68526 47.3238C0.97482 45.062 0.670346 42.7287 0.380371 40.3811C0.380371 38.3771 0.380371 36.373 0.380371 34.369C0.612351 32.6655 0.771838 30.9621 1.2068 29.3016C4.81699 15.402 13.5597 6.31222 27.4206 2.01781C29.7114 1.31639 32.0747 1.01579 34.4525 0.729492ZM27.4061 37.3321C27.4061 42.3136 27.4061 47.3094 27.4061 52.291C27.4061 53.1642 27.4061 53.1785 28.1455 52.7633C36.8883 47.7818 45.631 42.8003 54.3738 37.8045C55.0552 37.418 55.0697 37.3321 54.3883 36.9456C45.6455 31.9641 36.9028 26.9683 28.16 21.9868C27.4206 21.5717 27.4206 21.5717 27.4206 22.4449C27.4061 27.412 27.4061 32.3792 27.4061 37.3321Z" fill="white"/>
                        </svg>    
                    </span>
                    </a><?php endif;?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
