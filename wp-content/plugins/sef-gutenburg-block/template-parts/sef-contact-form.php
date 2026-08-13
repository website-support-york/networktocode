<?php

/**
* Layout of sef Contact Form.
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

$sef_contact_form_bg = get_field('sef_contact_form_bg');
$sef_contact_form_heading = get_field('sef_contact_form_heading');
$sef_contact_form_content = get_field('sef_contact_form_content');
$ntc_contact_form_code = get_field('ntc_contact_form_code');



?>

<!-- user form sectoin -->
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> student-form" style="background-color:<?php echo $sef_contact_form_bg;?>;">
      <div class="container">
        <div class="row">
        <?php if (!empty($sef_contact_form_heading)) { ?>
          <div class="col-md-10 offset-md-1 title-box">
            <h2 class="section-title wow animate__animated animate__fadeInUp">
              <?php echo $sef_contact_form_heading;?>
            </h2>
            <h5 class="sub-title">
              <?php echo $sef_contact_form_content;?>
            </h5>
          </div>
          <?php } ?>
          <div
            class="col-lg-10 offset-lg-1 wow animate__animated animate__fadeInUp delay2"
          >
            <?php if ($ntc_contact_form_code): ?>
              <?php echo $ntc_contact_form_code; ?>
            <?php endif ?>
            <?php //echo do_shortcode( $ntc_contact_form_code ); ?>
               <?php  //if (preg_match('/\[(\w+)[^\]]*\]/', $ntc_contact_form_code)) : ?>
              <?php //echo do_shortcode( $ntc_contact_form_code ); ?>
            <?php //else: ?>
            <!-- Hubspot Form Start --->
            <!-- <div class="static-form test " >
              <div class="form-box">
                  <form  method="POST" id="nautobot-subscribe-form" class="nautobot-subscribe-form">
                      <div class="form-columns-1">
                          <div class="field-box">
                              <label for="email">Email</label>
                              <input type="email" name="email" placeholder="Email*">
                          </div>
                      </div>
                      <div class="submit-box">
                          <input class="submitBtn" type="submit" value="Submit">
                      </div>
                  </form>
                  <div class="thankyou-message-box">
                      <div class="thankyou-content">Thanks for submitting the form.</div>
                  </div>
              </div>
          </div> -->
          <!--- Form Code End --->
          <?php //endif ?>
          
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/why-bg.svg"
        class="cicle_bg wow animate__animated animate__fadeIn animate__slower"
        alt=""
      />
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/breadscrumb-bg.svg"
        class="gt_bg wow animate__animated animate__fadeIn delay animate__slower"
        alt=""
      />
    </section>