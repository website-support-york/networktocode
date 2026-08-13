<?php
/**
* Layout For Nautobot Apps Screenshot
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

$section_title            = get_field('section_title');
$nautobot_app_description = get_field('nautobot_app_description');
?>
<section id="<?php echo $id; ?>" class="nb-app-description <?php echo $className; ?>">
    <div class="container">
        <div class="row">
            
                <div class="col-3 blog-details">
                    
                    <div class="sidebar sticky-sidebar">
                        <div class="toc-card-body">
                          <h5 class="card-title">
                            <span class="title-text">Contents</span>
                            <span class="mobile-toc-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                              <path id="Vector 31" d="M1 1.5L5.5 5L1 8.5" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>
                          </h5>
                          <div class="title-list noListStyle">
                              <ul></ul>
                          </div>
                          <div id="toc" class="noListStyle"></div>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-9 blog_inner_detail">
                    <?php 
                    if(have_rows('nautobot_app_description_data')): 
                        while(have_rows('nautobot_app_description_data')): the_row(); 
                            $count = count(get_field('nautobot_app_description_data'));
                        ?>
                        <div class="<?php if(get_sub_field('highlight_the_section')): echo 'higligted-sec-desc'; else: echo 'ga-block'; endif; ?> <?php if( $count == get_row_index() ): echo 'last-block'; endif; ?>">
                            <div class="title-box">
                                <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
                            </div>
                            <div class="description">
                                <?php 
                                if( have_rows('datas') ):
                                    while(have_rows('datas', '')): the_row(); ?>
                                        <?php 
                                        if(get_sub_field('description')):
                                            echo get_sub_field('description'); 
                                        endif; ?>

                                        <?php 
                                        $image = get_sub_field('sreenshot');
                                        if( $image ) : ?>
                                        <div class="nb-app-ss">    
                                            <div class="ss-wrap"> 
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                                                    <figure>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                    </figure>
                                                    <div class="img-overlay-btn">
                                                        <span><i class="bi bi-arrows-fullscreen"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php 
                                        $sef_cta_content = get_sub_field('cta_content');
                                        $sef_cta_link = get_sub_field('cta_link');

                                        if( $sef_cta_content ) :
                                        ?>
                                        <section class="package-option pt_0 pb_0">
                                            <div class="cta_box">
                                                <div class="cta-content">
                                                    <div>
                                                        <?php if (!empty($sef_cta_content)) { ?><?php echo $sef_cta_content; ?><?php } ?>
                                                        <?php echo '<InnerBlocks apps_template_up="' . esc_attr( wp_json_encode( $template_cta ) ) . '" />'; ?>
                                                    </div>
                                                </div>
                                                <?php if (!empty($sef_cta_link)) { 
                                                  $href = $sef_cta_link['url'];
                                                  if (strpos($href, '#') === 0) {
                                                      $href = 'javascript:;';
                                                      $sef_cta_popup = true;
                                                  }

                                                  $lightbox = '';
                                                  if ( strpos( $href, 'youtube.com' ) !== false || strpos( $href, 'youtu.be' ) !== false ) {
                                                    $lightbox = ' data-fancybox="gallery"';
                                                  }

                                                ?>
                                                <a
                                                  <?php echo $lightbox; ?>
                                                  href="<?php echo $href; ?>"
                                                  target="<?php echo $sef_cta_link['target'] ? $sef_cta_link['target'] : '_self'; ?>"
                                                  data-cursor="-opaque"
                                                  <?php if ($sef_cta_popup): ?>
                                                  data-bs-toggle="modal"
                                                  data-bs-target="<?php echo $sef_cta_link['url']; ?>"
                                                  <?php endif; ?>
                                                  class="btn theme-btn">
                                                  <?php echo $sef_cta_link['title']; ?>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </section>
                                        <?php
                                        endif; ?>

                                <?php 
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>    

                    <?php 
                        endwhile; 
                    endif; ?>
                </div>
            
        </div>
    </div>
</section>

