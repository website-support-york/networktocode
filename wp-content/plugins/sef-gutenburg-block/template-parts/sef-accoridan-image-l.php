<?php

/**
* Layout of sef Accordion with left image.
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

$sef_accordion_style = get_field('sef_accordion_style');
$accoridan_title = get_field('sef_accordian_title');
$accoridan_description = get_field('sef_accordion_description');
$accordion_bg_color = get_field('sef_accordion_bg_color');

$accoridan_bg_image = get_field('sef_accordion_bg_image');
$accoridan_bg_image_position = get_field("sef_accordion_bg_image_position");


$sef_accordian_content = get_field('sef_accordion_content');

$sef_accordian_innercontent = get_field('sef_accordion_content');
$sef_accordian_innercontent_s3 = get_field('sef_accordion_content');

$sef_accordion_cta_content = get_field('sef_accordion_cta_content');
$sef_accordion_cta_button = get_field('sef_accordion_cta_button');
$sef_accordion_cta_button_popup = get_field('sef_accordion_cta_button_popup');
$sef_image_position = get_field("sef_image_position");

$sef_image = get_field("sef_image");

$sef_description = get_field('sef_description');

?>

<?php if ($sef_accordion_style === 'Style 1') { ?>

<section id="<?php echo esc_attr($id); ?>" class="future-netdev <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
	<?php if (!empty($accoridan_bg_image)) {
    ?>
		<img
        src="<?php echo $accoridan_bg_image['url']; ?>"
        class="<?php if($accoridan_bg_image_position == "right"){ ?> img-bg-rgt<?php } ?> gt-bg wow animate__animated animate__slower animate__fadeIn"
        alt="Image Background"
      />
	<?php } ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12 title-box">
            <h3 class="section-title no-lazy">
              <?php echo $accoridan_title; ?>
            </h3>
            <?php if(!empty($accoridan_description)):?>
            <h5
              class="sub-title wow animate__ animate__fadeInUp delay1 animated sub-title"
            >
              <?php echo get_field('sef_accordion_description', false, false ); ?>
            </h5>
            <?php endif;?>
          </div>
          <div class="col-md-12 p-mb-0">
            <div class="future-content-box">
              <div class="row">
                <?php if (!empty($sef_accordian_content)) { ?>
                <div class="col-md-6 mh-600 <?php if($sef_image_position == "right"){ ?> order-1 order-md-2<?php } ?> ">
                  <?php 
                    $imgcounter = 1;
                    foreach ($sef_accordian_content as $sef_accordian_content) {            
                    $sef_accordian_content_image = $sef_accordian_content['sef_accordion_content_image'];
                  ?>
				  <?php if (!empty($sef_accordian_content_image)) {
            
            $alt = get_post_meta(
          $sef_accordian_content_image['ID'],
          '_wp_attachment_image_alt',
          true
      ); 
      
      ?>
                  <img
                    src="<?php echo $sef_accordian_content_image['url']; ?>"
                    alt="<?php  echo $alt ? $alt : 'Accordian Image' . $imgcounter; ?> "
                    class="abt-img"
                    id="acrdn-img-<?php echo $imgcounter;?>"
                  />
				  <?php } ?>
                  <?php $imgcounter++; ?>
                  <?php } ?>
                </div>
                <?php } ?>
                
                <div
                  class="col-md-6 d-flex justify-content-center align-item-center <?php if($sef_image_position == "right"){ ?> order-2 order-md-1<?php } ?>"
                >
                  <div
                    class="future-accordion w-90 wow animate__animated animate__fadeInUp"
                  >
                    <div
                      class="accordion accordion-flush"
                      id="accordionFlushExample1"
                    >
                      

                          <?php 
                            $counter = 1;
                              foreach ($sef_accordian_innercontent as $sef_accordian_innercontent) {            
                              $sef_accordian_innercontent_title = $sef_accordian_innercontent['sef_accordion_content_title'];
                              $sef_accordian_innercontent_description = $sef_accordian_innercontent['sef_accordion_content_description'];
                              $sef_accordian_innercontent_button = $sef_accordian_innercontent['sef_accordion_content_button'];
                              $sef_accordian_innercontent_button_popup = $sef_accordian_innercontent['sef_accordion_content_button_popup'];
                              $sef_accordian_innercontent_logo = $sef_accordian_innercontent['sef_accordion_content_logo'];
                            ?>
                              <div class="accordion-item">
                                <h2
                                  class="accordion-header"
                                  id="flush-heading<?php echo $counter;?>"
                                  data-cursor="-color-orange"
                                >
                                  <button
                                    class="accordion-button <?php if ($counter === 1) { echo ""; } else { echo "collapsed";} ?>"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse<?php echo $counter;?>"
                                    aria-expanded="false"
                                    aria-controls="flush-collapse<?php echo $counter;?>"
                                    id="acrdn-btn-<?php echo $counter;?>"
                                  >
                                    <?php if (!empty($sef_accordian_innercontent_logo)) { 
                                      $alt = get_post_meta(
                                        $sef_accordian_innercontent_logo['ID'],
                                        '_wp_attachment_image_alt',
                                        true
                                    );
                                    ?>
                                      <img
                                        src="<?php echo $sef_accordian_innercontent_logo['url']; ?>"
                                        alt="<?php echo $alt ? $alt : 'Accordian Logo'.$counter ; ?>"
                                      />
                                      <?php } ?>
                                    <?php echo $sef_accordian_innercontent_title; ?>
                                  </button>
                                </h2>
                                <div
                                  id="flush-collapse<?php echo $counter;?>"
                                  class="accordion-collapse collapse <?php if ($counter === 1) { echo "show"; } ?>"
                                  aria-labelledby="flush-heading<?php echo $counter;?>"
                                  data-bs-parent="#accordionFlushExample1"
                                >
                                  <div class="accordion-body">
                                    <p>
                                      <?php echo $sef_accordian_innercontent_description; ?>
                                    </p>
                                    <?php if (!empty($sef_accordian_innercontent_button)) { ?>
                                      <a
                                        href="<?php echo $sef_accordian_innercontent_button['url']; ?>"
                                        <?php if( $sef_accordian_innercontent_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_accordian_innercontent_button['url'] ?>" <?php endif; ?>
                                        class="btn btn-learn"
                                        data-cursor="-color-orange"
                                      >
                                      <?php echo $sef_accordian_innercontent_button['title']; ?> <i class="bi bi-arrow-right"></i>
                                      </a>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <?php $counter++; ?>
                              <?php } ?>

                    </div>

                    <?php if (!empty($sef_accordion_cta_button)) { ?>
                      <div class="w-100 d-flex align-item-center <?php if (!empty($sef_accordion_cta_content)) {echo "justify-content-end";} else {echo "justify-content-start";} ?>">
                        <a href="<?php echo $sef_accordion_cta_button['url']; ?>" target="<?php echo $sef_accordion_cta_button['target']; ?>" <?php if( $sef_accordion_cta_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_accordion_cta_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_accordion_cta_button['title']; ?></a>
                      </div>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

    <?php if ($sef_accordion_style === 'Style 2') { ?>


      <!-- neutobot use case -->
    <section id="<?php echo esc_attr($id); ?>" class="neutobot-use-case <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
      <div class="future-netdev">

        <?php 
            $imgcounter_style2 = 1;
            $hideacc = '';
            $maintitle = $sef_accordian_content[0]['sef_accordion_content_title'];
            $hideacc = $maintitle ? " " : 'd-none';
            foreach ($sef_accordian_content as $sef_accordian_content) {            
            $sef_accordian_content_image_style2 = $sef_accordian_content['sef_accordion_content_image'];
            $alt = get_post_meta(
                $sef_accordian_content_image_style2['ID'],
                '_wp_attachment_image_alt',
                true
                );
        ?>
        <img
          src="<?php echo $sef_accordian_content_image_style2['url']; ?>"
          alt="<?php echo $alt ? $alt : 'Accordian Image' . $imgcounter_style2; ?>"
          class="abt-img-click use-case-img"
          id="acrdn-click-img-<?php echo $imgcounter_style2; ?>"
        />
        <?php $imgcounter_style2++; ?>
        <?php } ?>
        
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="title-box text-start wow animate__animated animate__fadeInUp title-desc"
            >
              <?php if (!empty($accoridan_title)) { ?><h3 class="section-title text-white mt-3 sec-heading"><?php echo $accoridan_title; ?></h3><?php } ?>
              <?php if (!empty($accoridan_description)) { ?>
                    <?php echo $accoridan_description; ?>
              <?php } ?>
              <?php $accordionFlush = esc_attr($id) ? esc_attr($id).'1' : "accordionFlushExample2"; ?>
            </div>
            <div class="future-accordion w-100">
              <div
                class="accordion accordion-flush wow animate__animated animate__fadeInUp delay2 <?php echo $hideacc; ?>"
                id="<?php echo $accordionFlush; ?>"
              >

              <?php 
                $counter_style2 = 1;
                  foreach ($sef_accordian_innercontent as $sef_accordian_innercontent) {            
                  $sef_accordian_innercontent_title = $sef_accordian_innercontent['sef_accordion_content_title'];
                  $sef_accordian_innercontent_description = $sef_accordian_innercontent['sef_accordion_content_description'];
                  $sef_accordian_innercontent_button = $sef_accordian_innercontent['sef_accordion_content_button'];
                  //$sef_accordian_innercontent_button_popup = $sef_accordian_innercontent['sef_accordion_content_button_popup'];
                  $sef_accordian_innercontent_logo = $sef_accordian_innercontent['sef_accordion_content_logo'];
              ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading<?php echo $accordionFlush . '-'.$counter_style2;?>">
                    <button
                      class="accordion-button acrdn-click <?php echo ($counter_style2 === 1) ? '' : 'collapsed'; ?>"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapse<?php echo $accordionFlush . '-'.$counter_style2;?>"
                      aria-expanded="<?php echo ($counter_style2 === 1) ? 'true' : 'false'; ?>"
                      aria-controls="flush-collapse<?php echo $accordionFlush . '-'.$counter_style2;?>"
                      id="acrdn-btn-<?php echo $counter_style2;?>" data-imgid="<?php echo $counter_style2;?>"
                    >
                    <?php if (!empty($sef_accordian_innercontent_title)) { ?>
                      <?php echo $sef_accordian_innercontent_title; ?>
                    <? } ?>
                    </button>
                  </h2>
                  <div
                    id="flush-collapse<?php echo $accordionFlush . '-'.$counter_style2;?>"
                    class="accordion-collapse collapse <?php echo ($counter_style2 === 1) ? 'show' : ''; ?>"
                    aria-labelledby="flush-heading<?php echo $accordionFlush . '-'.$counter_style2;?>"
                    data-bs-parent="#<?php echo $accordionFlush; ?>"
                  >
                    <div class="accordion-body">
                      <p>
                      <?php if (!empty($sef_accordian_innercontent_description)) { ?>
                        <?php echo $sef_accordian_innercontent_description; ?>
                      <? } ?>
                      </p>
                    </div>
                  </div>
                </div>
                <?php $counter_style2++; ?>
              <?php } ?> 
                
              </div>

              <?php if (!empty($sef_accordion_cta_content || $sef_accordion_cta_button)) { ?>
              <div
                class="learn-use-case mt-5 wow animate__animated animate__fadeInUp delay4"
              >
              <?php if (!empty($sef_accordion_cta_content)) { ?>
                <div class="w-100">
                  <p><?php echo $sef_accordion_cta_content; ?></p>
                </div>
              <?php } ?>
              <?php if (!empty($sef_accordion_cta_button)) { ?>
                <div class="w-100 d-flex align-item-center <?php if (!empty($sef_accordion_cta_content)) {echo "justify-content-end";} else {echo "justify-content-start";} ?>">
                  <a href="<?php echo $sef_accordion_cta_button['url']; ?>" target="<?php echo $sef_accordion_cta_button['target']; ?>" <?php if( $sef_accordion_cta_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_accordion_cta_button['target'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_accordion_cta_button['title']; ?></a>
                </div>
                <?php } ?>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

    <?php if ($sef_accordion_style === 'Style 3') { ?>

      <!-- Transformation services focus on three key areas section starts -->
    <section id="<?php echo esc_attr($id); ?>" class="ts-focus <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
      <div class="container">
        <div class="row">
          <?php if (!empty($accoridan_title)) { ?>
          <div class="col-md-12 title-box">
            <h3
              class="section-title wow animate__animated animate__fadeInUp delay1"
            >
              <?php echo $accoridan_title; ?>
            </h3>
          </div>
          <?php } ?>
          <div class="col-md-12 mt-sm-5 mt-3 pt-1">
            <div class="row gx-5">
              <div class="col-lg-6 col-md-4">
                <div class="list-group" id="list-tab" role="tablist">

                <?php 
                            $titlecounter = 1;
                              foreach ($sef_accordian_innercontent as $sef_accordian_innercontent) {            
                              $sef_accordian_innercontent_title_style3 = $sef_accordian_innercontent['sef_accordion_content_title'];
                              
                            ?>
                  <?php if (!empty($sef_accordian_innercontent_title_style3)) { ?>
                  <a
                    class="list-group-item list-group-item-action <?php if ($titlecounter === 1) { echo "active"; } ?> wow animate__animated animate__fadeInUp"
                    id="list-<?php echo strtok ($sef_accordian_innercontent_title_style3, " "); ?>-list"
                    data-bs-toggle="list"
                    href="#list-<?php echo strtok ($sef_accordian_innercontent_title_style3, " "); ?>"
                    role="tab"
                    aria-controls="list-<?php echo strtok ($sef_accordian_innercontent_title_style3, " "); ?>"
                    >
                    <?php echo $sef_accordian_innercontent_title_style3; ?>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="39"
                      height="34"
                      viewBox="0 0 39 34"
                      fill="none"
                    >
                      <path
                        d="M22 2L37 17L22 32M2 17H37"
                        stroke="#161616"
                        stroke-width="4"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                  <?php } ?>
                  <?php $titlecounter++; ?>
                  <?php } ?>
                  
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-8">
                <div
                  class="tab-content wow animate__animated animate__fadeInUp"
                  id="nav-tabContent"
                >

                <?php 
                  $counter_style3 = 1;
                  foreach ($sef_accordian_innercontent_s3 as $sef_accordian_innercontent_s3) {            
                  $sef_accordian_innercontent_title_s3 = $sef_accordian_innercontent_s3['sef_accordion_content_title'];
                  $sef_accordian_innercontent_description_s3 = $sef_accordian_innercontent_s3['sef_accordion_content_description'];
                  $sef_accordian_innercontent_image_s3 = $sef_accordian_innercontent_s3['sef_accordion_content_image'];
                ?>
                  <div
                    class="tab-pane fade <?php if ($counter_style3 === 1) { echo "show active"; } ?>"
                    id="list-<?php echo strtok ($sef_accordian_innercontent_title_s3, " "); ?>"
                    role="tabpanel"
                    aria-labelledby="list-<?php echo strtok ($sef_accordian_innercontent_title_s3, " "); ?>-list"
                  >
                    <div class="ts-content">
                      <?php if (!empty($sef_accordian_innercontent_image_s3)) { ?>
                      <img
                        src="<?php echo $sef_accordian_innercontent_image_s3['url']; ?>"
                        class="mw-75"
                        alt=""
                      />
                      <?php } ?>
                      <?php if (!empty($sef_accordian_innercontent_title_s3)) { ?>
                        <h4 class="d-md-none"><?php echo $sef_accordian_innercontent_title_s3; ?></h4>
                      <?php } ?>
                      <?php if (!empty($sef_accordian_innercontent_description_s3)) { ?>
                      <p>
                        <?php echo $sef_accordian_innercontent_description_s3; ?>
                      </p>
                      <?php } ?>
                    </div>
                  </div>
                  <?php $counter_style3++; ?>
                  <?php } ?>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>


    <?php if ($sef_accordion_style === 'Style 4') { ?>

    <!-- training faq section stats -->
    <section id="<?php echo esc_attr($id); ?>" class="training-faq future-netdev <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-box">
              <?php if (!empty($accoridan_title)) { ?>
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $accoridan_title; ?>
              </h2>
              <?php } ?>
              <?php if (!empty($accoridan_description)) { ?>
              <h5
                class="sub-title wow animate__animated animate__fadeInUp delay1 sub-title"
              >
                <?php echo $accoridan_description; ?>
              </h5>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-12 future-content-box">
            <div
              class="future-accordion wow animate__animated animate__fadeInUp w-100"
            >
              <div class="accordion accordion-flush" id="accordionFlushExample4">

                <?php 
                  $counter_style4 = 1;
                  foreach ($sef_accordian_innercontent_s3 as $sef_accordian_innercontent_s3) {            
                  $sef_accordian_innercontent_title_s3 = $sef_accordian_innercontent_s3['sef_accordion_content_title'];
                  $sef_accordian_innercontent_description_s3 = $sef_accordian_innercontent_s3['sef_accordion_content_description'];
                ?>
                <div class="accordion-item">
                  <?php if (!empty($sef_accordian_innercontent_title_s3)) { ?>
                  <h2
                    class="accordion-header"
                    id="flush-heading<?php echo $counter_style4;?>"
                    data-cursor="-color-orange"
                  >
                    <button
                      class="accordion-button <?php if ($counter_style4 === 1) { echo ""; } else { echo "collapsed";} ?>"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapse<?php echo $counter_style4;?>"
                      aria-expanded="false"
                      aria-controls="flush-collapse<?php echo $counter_style4;?>"
                      id="acrdn-btn-<?php echo $counter_style4;?>"
                    >
                      <?php echo $sef_accordian_innercontent_title_s3; ?>
                    </button>
                  </h2>
                  <?php } ?>
                  <div
                    id="flush-collapse<?php echo $counter_style4;?>"
                    class="accordion-collapse collapse <?php if ($counter_style4 === 1) { echo "show"; } ?>"
                    aria-labelledby="flush-heading<?php echo $counter_style4;?>"
                    data-bs-parent="#accordionFlushExample4"
                  >
                    <?php if (!empty($sef_accordian_innercontent_description_s3)) { ?>
                    <div class="accordion-body">
                      <p>
                        <?php echo $sef_accordian_innercontent_description_s3; ?>
                      </p>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php $counter_style4++; ?>
                <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

    <?php if ($sef_accordion_style === 'Style 5') { ?>
       <!-- training faq section stats -->
    <section id="<?php echo esc_attr($id); ?>" class="training-faq future-netdev <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-box">
              <?php if (!empty($accoridan_title)) { ?>
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $accoridan_title; ?>
              </h2>
              <?php } ?>
              <?php if (!empty($sef_description)) { ?>
                <div class="short-content">
                  <h5 class="sub-title"><?php echo $sef_description;?></h5>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-12 future-content-box">
              <?php if (!empty($sef_image)) { ?>
              <div class="w-100 img">
                <img src="<?php echo $sef_image['url'];?>" alt="<?php echo $sef_image['url'];?>" />
              </div>
              <?php } ?>
              <?php if (!empty($sef_accordion_cta_button)) { ?>
                <div class="w-100 d-flex align-item-center <?php if (!empty($sef_accordion_cta_content)) {echo "justify-content-end";} else {echo "justify-content-start";} ?>">
                  <a href="<?php echo $sef_accordion_cta_button['url']; ?>" target="<?php echo $sef_accordion_cta_button['target']; ?>" <?php if( $sef_accordion_cta_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_accordion_cta_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_accordion_cta_button['title']; ?></a>
                </div>
              <?php } ?>

          </div>
        </div>
      </div>
    </section>
    <?php } ?>


    <?php if ($sef_accordion_style === 'Style 6') { ?>


      <!-- neutobot use case -->
    <section id="<?php echo esc_attr($id); ?>" class="neutobot-use-case <?php echo esc_attr($className); ?>" style="background-color: <?php echo $accordion_bg_color; ?>">
      <div class="future-netdev">

        <?php 
            $hideacc = '';
            $imgcounter_style2 = 1;
            $maintitle = $sef_accordian_content[0]['sef_accordion_content_title'];
            $hideacc = $maintitle ? " " : 'd-none';
            foreach ($sef_accordian_content as $sef_accordian_content) {            
            $sef_accordian_content_image_style2 = $sef_accordian_content['sef_accordion_content_image'];
            $alt = get_post_meta(
                $sef_accordian_content_image_style2['ID'],
                '_wp_attachment_image_alt',
                true
                );
        ?>
        <img
          src="<?php echo $sef_accordian_content_image_style2['url']; ?>"
          alt="<?php echo $alt ? $alt : $sef_accordian_content_image_style2['title']; ?>"
          class="abt-img-click use-case-img"
          id="acrdn-click-img-<?php echo $imgcounter_style2; ?>"
        />
        <?php $imgcounter_style2++; ?>
        <?php } ?>
        
      </div>
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <div class="title-box">
              <?php if (!empty($accoridan_title)) { ?>
              <h2 class="section-title wow animate__animated animate__fadeInUp">
                <?php echo $accoridan_title; ?>
              </h2>
              <?php } ?>
              <?php if (!empty($sef_description)) { ?>
                <div class="short-content">
                  <h5 class="sub-title"><?php echo $sef_description;?></h5>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="col-lg-6 training-text">
            <div
              class="title-box text-start wow animate__animated animate__fadeInUp title-desc"
            >
              <?php if (!empty($accoridan_description)) { ?>
                    <?php echo $accoridan_description; ?>
              <?php } ?>
              <?php $accordionFlush = esc_attr($id) ? esc_attr($id) : "accordionFlushExample2"; ?>
            </div>
            <div class="future-accordion w-100">
              <div
                class="accordion accordion-flush wow animate__animated animate__fadeInUp delay2 <?php echo $hideacc; ?>"
                id="<?php echo $accordionFlush; ?>"
              >

              <?php 
                $counter_style6 = 1;
                  foreach ($sef_accordian_innercontent as $sef_accordian_innercontent) {            
                  $sef_accordian_innercontent_title = $sef_accordian_innercontent['sef_accordion_content_title'];
                  $sef_accordian_innercontent_description = $sef_accordian_innercontent['sef_accordion_content_description'];
                  $sef_accordian_innercontent_button = $sef_accordian_innercontent['sef_accordion_content_button'];
                  //$sef_accordian_innercontent_button_popup = $sef_accordian_innercontent['sef_accordion_content_button_popup'];
                  $sef_accordian_innercontent_logo = $sef_accordian_innercontent['sef_accordion_content_logo'];
              ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading<?php echo $accordionFlush.'-'.$counter_style6;?>">
                    <button
                      class="accordion-button acrdn-click <?php echo ($counter_style6 === 1) ? '' : 'collapsed'; ?>"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapse<?php echo $accordionFlush.'-'.$counter_style6;?>"
                      aria-expanded="<?php echo ($counter_style6 === 1) ? 'true' : 'false'; ?>"
                      aria-controls="flush-collapse<?php echo $accordionFlush.'-'.$counter_style6;?>"
                      id="acrdn-btn-<?php echo $counter_style6;?>" data-imgid="<?php echo $counter_style6;?>"
                    >
                    <?php if (!empty($sef_accordian_innercontent_title)) { ?>
                      <?php echo $sef_accordian_innercontent_title; ?>
                    <? } ?>
                    </button>
                  </h2>
                  <div
                    id="flush-collapse<?php echo $accordionFlush.'-'.$counter_style6;?>"
                    class="accordion-collapse collapse <?php echo ($counter_style6 === 1) ? 'show' : ''; ?>"
                    aria-labelledby="flush-heading<?php echo $accordionFlush.'-'.$counter_style6;?>"
                    data-bs-parent="#<?php echo $accordionFlush; ?>"
                  >
                    <div class="accordion-body">
                      <p>
                      <?php if (!empty($sef_accordian_innercontent_description)) { ?>
                        <?php echo $sef_accordian_innercontent_description; ?>
                      <? } ?>
                      </p>
                    </div>
                  </div>
                </div>
                <?php $counter_style6++; ?>
              <?php } ?> 
                
              </div>

              <?php if (!empty($sef_accordion_cta_content || $sef_accordion_cta_button)) { ?>
              <div
                class="learn-use-case mt-5 wow animate__animated animate__fadeInUp delay4"
              >
              <?php if (!empty($sef_accordion_cta_content)) { ?>
                <div class="w-100">
                  <p><?php echo $sef_accordion_cta_content; ?></p>
                </div>
              <?php } ?>
              <?php if (!empty($sef_accordion_cta_button)) { ?>
                <div class="w-100 d-flex align-item-center <?php if (!empty($sef_accordion_cta_content)) {echo "justify-content-end";} else {echo "justify-content-start";} ?>">
                  <a href="<?php echo $sef_accordion_cta_button['url']; ?>" target="<?php echo $sef_accordion_cta_button['target']; ?>" <?php if( $sef_accordion_cta_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_accordion_cta_button['target'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_accordion_cta_button['title']; ?></a>
                </div>
                <?php } ?>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

<script type="text/javascript">
    jQuery("#acrdn-click-img-1").addClass("active");
    jQuery("#acrdn-click-img-1").css('opacity', '1');

    jQuery(".acrdn-click").click(function () {

      var imgid = jQuery(this).attr("data-imgid");
      
      jQuery(".abt-img-click").removeClass("active");
      jQuery(".abt-img-click").css('opacity', '0');

      jQuery("#acrdn-click-img-"+imgid+"").addClass("active");
      jQuery("#acrdn-click-img-"+imgid+"").css('opacity', '1');

    });
</script>