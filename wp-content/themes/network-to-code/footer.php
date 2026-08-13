<?php

/* Global variables */
$footer_logo_image = get_field('footer_logo','options');
$footer_vanta_image = get_field('footer_vanta_image','options');
$footer_social_links = get_field('social_links','options');
$footer_one_title = get_field('footer_one_title','options');
$footer_one_links = get_field('footer_one_links','options');
$footer_second_title = get_field('footer_second_title','options');
$footer_second_links = get_field('footer_second_links','options');
$footer_third_title = get_field('footer_third_title','options');
$footer_third_links = get_field('footer_third_links','options');
$footer_fourth_title = get_field('footer_fourth_title','options');
$footer_fourth_links = get_field('footer_fourth_links','options');
$footer_fifth_title = get_field('footer_fifth_title','options');
$footer_fifth_links = get_field('footer_fifth_links','options');
$footer_sixth_title = get_field('footer_sixth_title','options');
$footer_sixth_links = get_field('footer_sixth_links','options');
$footer_contact_title = get_field('footer_contact_title','options');
$footer_contact_numbers = get_field('footer_contact_numbers','options'); 
$footer_contact_address_icon = get_field('footer_contact_address_icon','options');
$footer_contact_address_line_one = get_field('footer_contact_address_line_one','options');
$footer_contact_address_line_second = get_field('footer_contact_address_line_second','options');
$footer_contact_map = get_field('footer_contact_map');
$footer_copyright = get_field('footer_copyright','options');
$footer_copyright_links = get_field('footer_copyright_links', 'options');
$footer_subscription_title = get_field('footer_subscription_title', 'options');
$footer_subscription_form = get_field('footer_subscription_form', 'options');
$footer_subscription_form_html = get_field('footer_subscription_form_html', 'options');

// Popups Global Variables
$popup_close_image  = get_field('popup_close_image', 'options');
$popup_top_image    = get_field('popup_top_image', 'options');
$popup_title        = get_field('popup_title', 'options');
$popup_contents     = get_field('popup_contents', 'options');
$popup_form         = get_field('popup_form', 'options');

?>

<!--Contact Modal -->
<?php if ( !is_page('your-opportunities') ) { ?>
<div
class="cta-modal modal fade"
id="contact-us-form"
tabindex="-1"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-lg modal-dialog-centered">
  <div class="modal-content">
    <button
    type="button"
    class="btn-close"
    data-bs-dismiss="modal"
    aria-label="Close"
    >
    <img src="<?php echo $popup_close_image['url']; ?>" alt="<?php echo $popup_close_image['alt']; ?>" />
  </button>
  <div class="modal-body contact-content">
    <div class="title-box text-center">
      <img
      src="<?php echo $popup_top_image['url']; ?>"
      class="img-fluid"
      alt="<?php echo $popup_top_image['alt']; ?>"
      />
      <h2 class="section-title mt-3 d-block">
        <?php echo $popup_title; ?>
      </h2>
      <?php while( have_rows('popup_contents') ) : the_row(); 
        $popup_content = get_sub_field("popup_content");
        ?>
        <h5 class="sub-title">
          <?php echo $popup_content; ?>
        </h5>
      <?php endwhile; ?>
    </div>
    <div class="row">
      <?php //echo do_shortcode(get_field('popup_form', 'options')); ?>
      <?php echo do_shortcode(get_field('popup_form_script', 'options')); ?>
    </div>
  </div>
</div>
</div>
</div>
<?php } ?>

<!-- footer section -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 border-after-right">
        <div class="row gy-md-4">
          <div
          class="col-md-4 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp"
          >
          <div class="footer-tabs">
            <?php if (!empty($footer_one_title)) { ?><h6><?php echo $footer_one_title; ?></h6><?php } ?>
            <?php if (!empty($footer_one_links)) { ?>
              <?php 
              foreach ($footer_one_links as $footer_one_links) {            
                $footer_one_link = $footer_one_links['footer_one_link'];
                ?>
                <a href="<?php echo $footer_one_link['url']; ?>" target="<?php echo $footer_one_link['target'] ? $footer_one_link['target'] : '_self' ?>"><?php echo $footer_one_link['title']; ?></a>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
        <div
        class="col-md-4 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp delay1"
        >
        <div class="footer-tabs">
          <?php if (!empty($footer_second_title)) { ?><h6><?php echo $footer_second_title; ?></h6><?php } ?>
          <?php if (!empty($footer_second_links)) { ?>
            <?php 
            foreach ($footer_second_links as $footer_second_links) {            
              $footer_second_link = $footer_second_links['footer_second_link'];
              ?>
              <a href="<?php echo $footer_second_link['url'] ?>" target="<?php echo $footer_second_link['target'] ? $footer_second_link['target'] : '_self' ?>"><?php echo $footer_second_link['title'] ?></a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
      <div
      class="col-md-4 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp delay2"
      >
      <div class="footer-tabs">
        <?php if (!empty($footer_third_title)) { ?><h6><?php echo $footer_third_title; ?></h6><?php } ?>
        <?php if (!empty($footer_third_links)) { ?>
          <?php 
          foreach ($footer_third_links as $footer_third_links) {            
            $footer_third_link = $footer_third_links['footer_third_link'];
            ?>
            <a href="<?php echo $footer_third_link['url'] ?>" target="<?php echo $footer_third_link['target'] ? $footer_third_link['target'] : '_self' ?>"><?php echo $footer_third_link['title'] ?></a>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
    <div
    class="col-md-4 col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp delay3"
    >
    <div class="footer-tabs">
      <?php if (!empty($footer_fourth_title)) { ?><h6><?php echo $footer_fourth_title; ?></h6><?php } ?>
      <?php if (!empty($footer_fourth_links)) { ?>
        <?php 
        foreach ($footer_fourth_links as $footer_fourth_links) {            
          $footer_fourth_link = $footer_fourth_links['footer_fourth_link'];
          if ($footer_fourth_link) {
          ?>
          <a href="<?php echo $footer_fourth_link['url'] ?>" target="<?php echo $footer_fourth_link['target'] ? $footer_fourth_link['target'] : '_self' ?>"><?php echo $footer_fourth_link['title'] ?></a>
           <?php } ?>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
  <div
  class="col-md-4 col-lg-3 col-sm-6 pt-3 col-lg-3 wow animate__animated animate__fadeInUp delay3"
  >
  <div class="footer-tabs">
    <?php if (!empty($footer_fifth_title)) { ?><h6><?php echo $footer_fifth_title; ?></h6><?php } ?>
    <?php if (!empty($footer_fifth_links)) { ?>
      <?php 
      foreach ($footer_fifth_links as $footer_fifth_links) {            
        $footer_fifth_link = $footer_fifth_links['footer_fifth_link'];
        ?>
        <a href="<?php echo $footer_fifth_link['url'] ?>" target="<?php echo $footer_fifth_link['target'] ? $footer_fifth_link['target'] : '_self' ?>"><?php echo $footer_fifth_link['title'] ?></a>
      <?php } ?>
    <?php } ?>
  </div>
</div>
<div
class="col-md-4 col-lg-3 col-sm-6 pt-3 col-lg-3 wow animate__animated animate__fadeInUp delay3"
>
<div class="footer-tabs">
  <?php if (!empty($footer_sixth_title)) { ?><h6><?php echo $footer_sixth_title; ?></h6><?php } ?>
  <?php if (!empty($footer_sixth_links)) { ?>
    <?php 
    foreach ($footer_sixth_links as $footer_sixth_links) {            
      $footer_sixth_link = $footer_sixth_links['footer_sixth_link'];
      ?>
      <a href="<?php echo $footer_sixth_link['url'] ?>" target="<?php echo $footer_sixth_link['target'] ? $footer_sixth_link['target'] : '_self' ?>"><?php echo $footer_sixth_link['title'] ?></a>
    <?php } ?>
  <?php } ?>
</div>
</div>
<div
class="col-md-12 col-lg-6 col-sm-12 wow pt-3 slideInLeft wow animate__animated animate__fadeInUp delay3"
>
<div class="footer-logo">
  <div class="footer-cons">
      <img
      src="<?php echo $footer_logo_image['url']; ?>"
      alt="ntc img"
      class="img-fluid"
      />
      <img src="<?php the_field('company_image_2', 'options'); ?>" class="img-fluid" alt="2024" style=" width: 125px; " >
  </div>
  <?php if (!empty($footer_social_links)) { ?>
    <div class="social-logo footer-social-links mt-4">

      <?php 
      foreach ($footer_social_links as $footer_social_links) {            
        $footer_social_links_icon = $footer_social_links['social_icon'];
        $footer_social_links_link = $footer_social_links['social_link'];
        ?>
        <a href="<?php echo $footer_social_links_link['url']; ?>" target="<?php echo $footer_social_links_link['target'] ? $footer_social_links_link['target'] : '_self' ?>">
          <img src="<?php echo $footer_social_links_icon['url']; ?>" alt="ntc img" />
        </a>
      <?php } ?>

    </div>
  <?php } ?>
  <div class="ft-img">
    <img
    src="<?php echo $footer_vanta_image['url']; ?>"
    alt="ntc img"
    class="img-fluid vanta-image"
    />
    <img
    src="https://net2codestg.wpengine.com/wp-content/uploads/2023/05/Vanta_Compliance_GDPR_Ilma.png"
    alt="ntc img"
    class="img-fluid vanta-image"
    />
    <img src="<?php the_field('company_image', 'options'); ?>" class="img-fluid vanta-image" alt="2023" >
  </div>

</div>
</div>
</div>
</div>
<div class="col-lg-3 wow animate__animated animate__fadeInUp">
  <div class="row">
    <div class="col-lg-12 col-sm-6">
      <div class="footer-tabs footer-contact remove-effect">
        <?php if (!empty($footer_contact_title)) { ?><h6><?php echo $footer_contact_title; ?></h6><?php } ?>
        <?php if (!empty($footer_contact_numbers)) { ?>
          <?php 
          foreach ($footer_contact_numbers as $footer_contact_numbers) {            
            $footer_contact_number = $footer_contact_numbers['footer_contact_number'];
            $footer_contact_number_icon = $footer_contact_numbers['footer_contact_number_icon'];   
            ?>
            <a href="<?php echo $footer_contact_number['url']; ?>">
              <img src="<?php echo $footer_contact_number_icon['url']; ?>" alt="ntc img" /> <?php echo $footer_contact_number['title']; ?>
            </a>
          <?php } ?>
        <?php } ?>
        <a href="https://www.google.com/maps/place/500+7th+Ave,+New+York,+NY+10018,+USA/@40.7531426,-73.9916503,17z/data=!3m1!4b1!4m6!3m5!1s0x89c259ac7b941903:0xcb0a4d6a0e42963e!8m2!3d40.7531386!4d-73.9894616!16s%2Fg%2F11c5p70f10" target="_blank"
        ><?php if (!empty($footer_contact_address_icon)) { ?><img src="<?php echo $footer_contact_address_icon; ?>" alt="ntc img" /><?php } ?> 
        <?php if (!empty($footer_contact_address_line_one)) { ?><?php echo $footer_contact_address_line_one; ?><?php } ?>
        <br />
        <?php if (!empty($footer_contact_address_line_second)) { ?><?php echo $footer_contact_address_line_second; ?><?php } ?></a
        >
      </div>
    </div>
    <div class="col-lg-12 col-sm-6 footer-subscribe">
      <div class="footer-tabs footer-contact">
        <?php if (!empty($footer_subscription_title)) { ?><h6><?php echo $footer_subscription_title; ?></h6><?php } ?>
        <?php echo $footer_subscription_form; ?>
        <?php //echo $footer_subscription_form_html; ?>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12 footer_cerdits">
   <div class="row">
        <div class="col-md-4">
             <p class="footer-credit"><?php echo apply_filters('the_content', $footer_copyright);?></p>
        </div>
        <div class="col-md-8">
            <div class="policy-links">
                <?php if (!empty($footer_copyright_links)) { ?>
                  <?php 
                  foreach ($footer_copyright_links as $footer_copyright_links) {            
                    $footer_copyright_link = $footer_copyright_links['footer_copyright_link'];
                    ?>
                    <a href="<?php echo $footer_copyright_link['url']; ?>" target="<?php echo $footer_copyright_link['target'] ? $footer_copyright_link['target'] : '_self' ?>"><?php echo $footer_copyright_link['title']; ?></a>
                  <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</footer>
<?php wp_footer();?>


<script>
  function capitalizeFirstLetter(string){
      return string.charAt(0).toUpperCase() + string.slice(1);
  }
  $(document).ready(function() {

    $('.navbar').mouseout(function() {
      $('.desktop-dropdown-menu').removeClass('active');
    });
    
    $('nav:not(.mob-nav) li.menu-item-type-custom a').mouseover(function() {
      var link = $(this).html().replaceAll(' ','-');
      $('.desktop-dropdown-menu').removeClass('active');
      $(`[data-menu-parent=${link}] .column`).hide();
      $(`[data-menu-parent=${link}] .column`).fadeIn();
      $(`.desktop-dropdown-menu[data-menu-parent=${link}]`).addClass('active');
    });
    $('li.menu-item-type-custom').mouseover(function() {
      var link = $(this).find('a').html().replaceAll(' ','-');
      $('.desktop-dropdown-menu').removeClass('active');
      $(`.desktop-dropdown-menu[data-menu-parent=${link}]`).addClass('active');
    });
    $('.mobile-menu-title').click(function() {
      $('nav.mob-nav').fadeIn();
      $('.mobile-dropdown-menu').removeClass('active');
      $('.desktop-dropdown-menu').removeClass('active');
    });
    $('nav.mob-nav li.menu-item-type-custom a').click(function() {
      $('nav.mob-nav').hide();
      var link = $(this).html().replaceAll(' ','-');
      $('.mobile-dropdown-menu').removeClass('active');
      $(`[data-menu-parent=${link}] .column`).hide();
      $(`[data-menu-parent=${link}] .column`).fadeIn();
      $(`.mobile-dropdown-menu[data-menu-parent=${link}]`).addClass('active');
    });
    $('.desktop-dropdown-menu').mouseover(function(e) {
      e.preventDefault();
      $(this).addClass('active');
    });

    if (window.location.href.indexOf("#network-operations") > -1) { 
      setTimeout(function () {
        $('html, body').animate({
            scrollTop: $('#workflow-details').offset().top
        }, 2000);
      }, 2500);
    }
    var pathname = window.location.pathname; 
    var splitURL = pathname.toString().split("/");
    var newUrlVar1 = splitURL['1'];
    var newUrlVar2 = splitURL['2'];
    if (newUrlVar1 != "") {
      newUrlVar1 = capitalizeFirstLetter(newUrlVar1.replace(/\s+/g, '-'));
      $('#menu-desktop-header-menu li a.nav-link').removeClass('active');
      $('#menu-desktop-header-menu li a#sap-'+newUrlVar1).addClass('active');
    }
  });


  $(document).ready(function(){

   var current = window.location.hash;
   $('.nav-item .nav-link').each(function(){
    var link = $(this).attr('href');
    if (current == link){
      $(this).addClass('active');

      $(this).parent().siblings().children().removeClass('active');
    }
  }); 
   var current1 = window.location.hash.split('#');
   console.log('current1 => ',current1[1]);
   $('.tab-content .tab-pane').each(function(){
    var link1 = $(this).attr('id');
            //alert(current1[1]);
    if (current1[1] == link1){
      $(this).addClass('active show');
      $(this).siblings().removeClass('active show');
    }
  });

    $('.desktop-dropdown-menu .dropdown-menu').on('mouseover', function() {
      var parentDivId = $(this).closest(".desktop-dropdown-menu").prop("id");
      var idWithoutPrefix = parentDivId.substr(parentDivId.indexOf("-") + 1)
      jQuery('#menu-desktop-header-menu li a.nav-link').removeClass('active');
      jQuery('a#sap-'+idWithoutPrefix).addClass('active');
      
    }); 
     $('.desktop-dropdown-menu .dropdown-menu').on('mouseout', function() {
      var parentDivId = $(this).closest(".desktop-dropdown-menu").prop("id");
      var idWithoutPrefix = parentDivId.substr(parentDivId.indexOf("-") + 1)
      jQuery('#menu-desktop-header-menu li a.nav-link').removeClass('active');
      
      jQuery('a#sap-'+idWithoutPrefix).removeClass('active');
      
    });  

     jQuery('.desk-nav a').each(function(){
        if( $(this).attr('href') == window.location ){
            jQuery(this).addClass('item-active');
            jQuery(this).parent('li').addClass('menu-item-active');
            jQuery(this).parents('.has-sub').addClass('menu-item-active');
        }
    });

 });

//Add dynamic alt tag
jQuery(document).ready(function ($) {
    // Target all images within the content
    $('.blog_inner_detail .wp-block-image img, article .entry-content img').each(function () {
        var $img = $(this);

        // Check if the alt attribute is missing or empty
        if (!$img.attr('alt') || $img.attr('alt') === '') {
            // Extract the image file name from the src attribute
            var src = $img.attr('src');
            var fileName = src.substring(src.lastIndexOf('/') + 1, src.lastIndexOf('.'));

            // Replace underscores with spaces
            fileName = fileName.replace(/_/g, ' ');

            // Capitalize the first letter of each word
            fileName = fileName.replace(/\b\w/g, function (char) {
                return char.toUpperCase();
            });

            // Set the alt attribute to the formatted file name
            $img.attr('alt', fileName);
        }
    });
});

//Blog External Link add targer _blank
$(document).ready(function() {
    $('.single-blog .blog_inner_detail a').each(function() {
        var a = new RegExp('/' + window.location.host + '/');
        if (!a.test(this.href)) {
            $(this).attr('target', '_blank');
        }
    });
});


jQuery(".page-id-5511 div#flush-collapse1").addClass("show");
jQuery('.page-id-5511 button[data-bs-target="#flush-collapse1"]').removeClass('collapsed');

//Hide hubspot field
jQuery('.hbspt-form .hs-nerizzler').css('opacity', '0');
jQuery('.hbspt-form .hs-nerizzler').css('position', 'absolute !important');
jQuery('.hbspt-form .hs-nerizzler').css('left', '-9999px');
jQuery('.hbspt-form .hs-nerizzler').css('width', '0px !important');
jQuery('.hbspt-form .hs-nerizzler').css('height', '0px !important');


</script>
<style type="text/css">
  html {
  scroll-behavior: smooth;
}
</style>
</body>
</html>