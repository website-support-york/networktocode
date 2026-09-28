<?php

/**
* Layout of top banner for webinars.
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
$blog_id = get_the_ID();
$newsletter_desc = get_field("newsletter_description");
$footer_subscription_form = get_field('footer_subscription_form', 'options');

?>
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> webinar-newsletter-section">
   
  <div class="container">
    <div class="newsletter__webinar">
      <div class="newsletter__inner">
        <p class="newsletter__text"><?php echo $newsletter_desc; ?></p>
        <?php echo $footer_subscription_form; ?>
    </div>
    </div>
    </div>
  </section>
<script>
window.addEventListener('load', function () {
    jQuery(".newsletter__webinar .hs-input")
        .attr("placeholder", "Email Address");
});
</script>