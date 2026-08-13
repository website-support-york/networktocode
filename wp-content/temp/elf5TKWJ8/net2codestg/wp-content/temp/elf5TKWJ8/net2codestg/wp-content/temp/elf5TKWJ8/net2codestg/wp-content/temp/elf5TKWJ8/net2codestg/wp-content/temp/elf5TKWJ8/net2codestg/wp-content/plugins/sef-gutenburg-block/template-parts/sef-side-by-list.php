<?php

/**
* Layout of sef Side by list.
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

$side_list_heading = get_field("side_list_heading");
$Side_list_text = get_field("Side_list_text");
$side_list_post = get_field("side_list_post");
$section_background_color = get_field('section_background_color');

?>


<section class="industries-main offering" style="background: <?php if( $section_background_color ) { ?> <?php echo $section_background_color; ?> <?php } else { ?> #dd3333; <?php } ?>">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12">
            <div class="main-box bg-light">
              <div class="row">
                <div class="col-lg-6 d-flex align-item-center">
                  <div class="offering-content">
                    <div class="title-box text-start">

                    	<? if( $side_list_heading ) { ?>
                      	<h2 class="section-title wow animate__animated animate__fadeInUp"><?php echo $side_list_heading; ?></h2>
                    	<?php } ?>

                    	<? if( $Side_list_text ) { ?>
                      <p class="wow animate__animated animate__fadeInUp delay1"><?php echo $Side_list_text; ?></p>
                    <?php } ?>

									<?php 
									$side_list_url = get_field('side_list_url');
									if( $side_list_url ): 
									    $side_list_url_url = $side_list_url['url'];
									    $side_list_url_title = $side_list_url['title'];
									    $side_list_url_target = $side_list_url['target'] ? $side_list_url['target'] : '_self';
									    ?>
									    <a class="button btn theme-btn wow animate__ animate__fadeInUp delay3 animated"  href="<?php echo $side_list_url_url; ?>" target="<?php echo $side_list_url_target; ?>" <?php if( $side_list_post ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $side_list_url_url; ?>" <?php endif; ?>><?php echo $side_list_url_title; ?></a>
										<?php endif; ?>

                    </div>
                  </div>
                </div>

                <?php if( have_rows('add_list') ): ?>
                <div class="col-lg-6 d-flex">
                  <div class="main-list wow animate__animated animate__fadeInUp">

                  	<?php while( have_rows('add_list') ) : the_row();
			                $list_link = get_sub_field('list_link'); 
                      if( $list_link ):
									    $list_link_url = $list_link['url'];
									    $list_link_title = $list_link['title'];
									    $list_link_target = $list_link['target'] ? $list_link['target'] : '_self';

			                $link_list_con = get_sub_field("link_list_con");
			              ?>
                    <div class="main-single">
                    	<? if( $list_link ) { ?>
                      <a href="<?php echo $list_link_url; ?>" target="<?php echo $list_link_target; ?>"><?php echo $list_link_title; ?></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="" />
                      <?php } ?>

                      <? if( $link_list_con ) { ?>
                      <p><?php echo $link_list_con; ?></p>
                      <?php } ?>
                    </div> 
                    <?php endif; ?>

                    <?php endwhile; ?>  
                    
                  </div>
                </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>