<?php

/**
* Layout of sef Case Studies Detail.
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

$template = array(
  
);

$study_detail_video = get_field('study_detail_video', get_the_ID());

?>

<!-- case study detail section start -->
<section class="case-study-detail">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <?php if ( empty ($study_detail_video) ) { ?>
          <?php if ( has_post_thumbnail( get_the_ID() ) ) { ?>
            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-fluid cs-detail' ) ); ?>
          <?php } ?>
        <?php } else {?>
          <iframe class="post-detail-video" src="<?php echo $study_detail_video; ?>"> </iframe>
        <?php } ?>
        <h2 class="cs-title"><?php echo esc_html( get_the_title(get_the_ID()) ); ?></h2>
        <span class="cs-date">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.svg" alt="" /> <?php echo esc_html( get_the_date('F j, Y') ); ?>
        </span>

        <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>

        <?php
              //echo "<pre>";
              //print_r($current_opening);
        //print_r(get_the_ID() . 'Post ID');
        $study_detail_quote_content = get_field('study_detail_quote_content', get_the_ID());
        $study_detail_quote_title = get_field('study_detail_quote_title', get_the_ID());
        $study_detail_social_title = get_field('study_detail_social_title', get_the_ID());
        $study_detail_social_accounts = get_field('study_detail_social_accounts', get_the_ID());
        ?>

        <?php if (!empty($study_detail_quote_content || $study_detail_quote_title)) { ?>
          <div class="cs-quote bg_secondary">
            <?php if (!empty($study_detail_quote_content)) { ?><p><?php echo $study_detail_quote_content; ?></p><?php } ?>
            <?php if (!empty($study_detail_quote_title)) { ?><h6><?php echo $study_detail_quote_title; ?></h6><?php } ?>
          </div>
        <?php } ?>
        <!-- <?php if (!empty($study_detail_social_accounts)) { ?>
          <div class="cs-share">
            <?php if (!empty($study_detail_social_title)) { ?><span><?php echo $study_detail_social_title; ?>:</span><?php } ?>
            
            <?php
              $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
              ?>

              <a target="_blank" class="share-button share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>" title="Linkedin this">
                <img alt="ntc img" data-src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/linkedin.svg" class=" ls-is-cached lazyloaded" src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/linkedin.svg">
              </a>

              <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this">
                <img alt="ntc img" data-src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/twitter.svg" class=" ls-is-cached lazyloaded" src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/twitter.svg">
              </a>

              <a target="_blank" class="share-button share-youtube" href="" title="Share on Youtube">
                <img alt="ntc img" data-src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/youtube.svg" class=" ls-is-cached lazyloaded" src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/youtube.svg">
              </a>

              <a target="_blank" class="share-button share-github" href="" title="Share on Youtube">
                <img alt="ntc img" data-src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/git-gray.svg" class=" ls-is-cached lazyloaded" src="https://net2codestg.wpengine.com/wp-content/uploads/2022/12/git-gray.svg">
              </a>
              
              <?php echo do_shortcode('[save_as_pdf_pdfcrowd]'); ?>
          </div>
        <?php } ?> -->
      </div>
    </div>
  </div>
</section>