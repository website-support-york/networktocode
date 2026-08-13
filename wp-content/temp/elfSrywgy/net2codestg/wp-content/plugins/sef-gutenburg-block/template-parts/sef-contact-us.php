<?php

/**
* Layout of Sef Contact Us.
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

$phone_title = get_field('phone_title');
$phone_numbers = get_field('phone_numbers');
$address_title = get_field('address_title');
$address_lines = get_field('address_lines');
$email_title = get_field('email_title');
$emails = get_field('emails');
$title = get_field('title');
$contents = get_field('contents');
$form_title = get_field('form_title');
$form_code = get_field('form_code');


?>

<!-- contact section -->
    <section class="contact">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-bg.svg"
        class="contact-bg wow animate__animated animate__slower animate__fadeIn delay1"
        alt="ntc img"
      />
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 mb-txt-center contact-side-content">
            <div
              class="title-box text-start wow animate__animated animate__fadeInUp delay3"
            >
              <div class="divider d-flex flex-column">
                <?php if (!empty($phone_title)) { ?><h2 class="section-title text-white mt-2"><?php echo $phone_title;?></h2><?php } ?>
                <?php 
                  foreach ($phone_numbers as $phone_numbers) {            
                  $phone_number = $phone_numbers['phone_number'];
                ?>
                  <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
                <?php } ?>
              </div>
              <div class="divider">
                <?php if (!empty($address_title)) { ?><h2 class="section-title text-white mt-2"><?php echo $address_title;?></h2><?php } ?>
                <?php 
                  foreach ($address_lines as $address_lines) {            
                  $address_line = $address_lines['address_line'];
                ?>
                  <p class="text-white"><?php echo $address_line; ?></p>
                <?php } ?>
              </div>
              <div class="divider d-flex flex-column">
                <?php if (!empty($email_title)) { ?><h2 class="section-title text-white mt-2"><?php echo $email_title;?></h2><?php } ?>
                <?php 
                  foreach ($emails as $emails) {            
                  $email = $emails['email'];
                ?>
                  <a href="mailto:<?php echo $email;?>" class=""><?php echo $email;?></a>
                <?php } ?>
              </div>
              <div class="d-flex flex-column">
                <?php if (!empty($title)) { ?><h2 class="section-title text-white mt-2"><?php echo $title;?></h2><?php } ?>
                <?php 
                  foreach ($contents as $contents) {            
                  $content = $contents['content'];
                ?>
                  <?php echo $content;?>
                <?php } ?>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 col-md-8 form-box wow animate__animated animate__fadeInUp delay1"
          >
            <div class="row">
              <div class="col-md-12 title-box d-flex justify-content-left">
                <?php if (!empty($form_title)) { ?><h2 class="section-title text-white above-arrow">
                  <?php echo $form_title;?>
                </h2><?php } ?>
              <?php if (!empty($form_code)) { ?>
              </div>
              
              <?php echo $form_code;?>
              
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>