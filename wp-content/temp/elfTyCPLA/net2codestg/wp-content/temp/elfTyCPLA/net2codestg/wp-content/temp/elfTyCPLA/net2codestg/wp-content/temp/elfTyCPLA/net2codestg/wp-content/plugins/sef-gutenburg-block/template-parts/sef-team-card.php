<?php

/**
* Layout of Team Card.
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
  $className .= '' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$sef_team_background_color = get_field("sef_team_background_color");
$sef_team_card_heading = get_field("sef_team_card_heading");
$sef_team_card_button_text = get_field("team_card_button_text");
$sef_team_category = get_field("sef_team_category");
$sef_card_column = get_field("sef_card_column");

$sef_team_category_names = get_term($sef_team_category);
$sef_team_category_name = $sef_team_category_names->slug;
 
?>

  <!-- team member section -->
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> our-team " style="background: <?php echo $sef_team_background_color; ?>">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-12 mb-1">
            <?php if (!empty($sef_team_card_heading)) { ?>
            <div class="title-box wow animate__animated animate__fadeInUp">
              <h2 class="section-title"><?php echo $sef_team_card_heading; ?></h2>
            </div>
            <?php } ?>
          </div>

          <?php 

                $teams = get_posts(array(
                "status" => "publish",
                "post_type" => "team",
                "posts_per_page" => "25",
                "team-category" => $sef_team_category_name,
                "orderby"   => "date",
                "order"     => "ASC"
                ));

                //echo "<pre> ";
                //print_r($teams);
                if( $teams ):
          ?>
          <?php $teams_counter = 1 ?>
          <?php foreach( $teams as $team ): ?>
            <?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  $team_designation = get_field('designation', $team->ID); 
                  $team_linked_in = get_field('linked_in', $team->ID);
                  $team_twitter = get_field('twitter', $team->ID);
                  $team_facebook = get_field('facebook', $team->ID);
                  $team_skype = get_field('skype', $team->ID);
                  
            ?>
          <div class=" <?php if (!empty($sef_card_column)) { ?><?php if ($sef_card_column === '4 Column' ) { ?>col-lg-3 col-md-4 col-sm-6<?php } ?> <?php if ($sef_card_column === '3 Column' ) { ?>col-sm-6 col-md-4<?php } ?> <?php if ($sef_card_column === '2 Column' ) { ?>col-md-6<?php } ?><?php } ?>">
            <div class="team-member">
              <div class="position-relative overflow-hidden">
                <img
                  src="<?php echo get_the_post_thumbnail_url($team->ID); ?>"
                  class="img-fluid wow animate__animated animate__fadeIn delay1 animate__slower"
                  alt=""
                />
                <div class="team-social <?php if ($sef_team_category_name == "board-member") { ?>board-member<?php }?>">
                  <?php if (!empty($team_linked_in)) { ?><a href="<?php echo $team_linked_in; ?>" target="_blank"><i class="bi bi-linkedin"></i></a><?php } ?>
                  <?php if (!empty($team_twitter)) { ?><a href="<?php echo $team_twitter; ?>" target="_blank"><i class="bi bi-twitter"></i></a><?php } ?>
                  <?php if (!empty($team_facebook)) { ?><a href="<?php echo $team_facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a><?php } ?>
                  <?php if (!empty($team_skype)) { ?><a href="<?php echo $team_skype; ?>" target="_blank"><i class="bi bi-skype"></i></a><?php } ?>
                </div>
              </div>
              <div class="wow animate__animated animate__fadeInUp delay1">
                <h4><?php echo get_the_title($team->ID); ?></h4>
                <?php if (!empty($team_designation)) { ?>
                  <h6><?php echo $team_designation; ?></h6>
                <?php } ?>
                <?php if (!empty($sef_team_card_button_text)) { ?>
                <a
                  href=""
                  class="btn btn-learn"
                  data-cursor="-color-orange"
                  data-bs-toggle="modal"
                  data-bs-target="#founder-msg-<?php echo $teams_counter; ?>"
                >
                  <?php echo $sef_team_card_button_text; ?> <i class="bi bi-arrow-right"></i>
                </a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $teams_counter++?>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          
        </div>
      </div>
    </section>

    <!-- all modal for taem member starts -->
    <?php 

        $sef_team_category_detail = get_field("sef_team_category");
        $sef_team_category_names_detail = get_term($sef_team_category_detail);
        $sef_team_category_name_detail = $sef_team_category_names_detail->slug;

        $teams_details = get_posts(array(
          "status" => "publish",
          "post_type" => "team",
          "posts_per_page" => "25",
          "team-category" => $sef_team_category_name_detail,
          "orderby"   => "date",
          "order"     => "ASC"
          ));

          //echo "<pre> ";
          //print_r($teams);
          if( $teams_details ):
    ?>
    <?php $teams_details_counter = 1 ?>
    <?php foreach( $teams_details as $team_detail ): ?>
      <?php
            //echo "<pre>";
            //print_r($current_opening);
            $team_quote = get_field('quote', $team_detail->ID);
            $popup_team_designation = get_field('designation', $team_detail->ID); 
      ?>
    <div
      class="modal modal-left fade founder-msg-modal"
      id="founder-msg-<?php echo $teams_details_counter; ?>"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" alt="" />
          </button>
          <div class="modal-body msg-content">
            <h4><?php echo get_the_title($team_detail->ID); ?></h4>
            <?php if (!empty($popup_team_designation)) { ?>
              <h6><?php echo $popup_team_designation; ?></h6>
            <?php } ?>
             <p><?php echo get_post_field('post_content', $team_detail->ID); ?></p>
            <?php if (!empty($team_quote)) { ?>
            <i
              ><b
                >“<?php echo $team_quote; ?>”</b
              ></i
            >
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php $teams_details_counter++ ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    
    
    <!-- all modal for taem member end -->