<?php
/**
 * Webinar Detail block template.
 *
 * The block's InnerBlocks are rendered into $content by WordPress.
 *
 * @var array  $attributes Block attributes.
 * @var string $content    Rendered InnerBlocks content.
 */


$id = 'iframe_' . $block['id'];
$footer_subscription_form = get_field('footer_subscription_form', 'options');

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

?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> webinar__detail">
    <aside class="sidebar">
      <nav class="toc" id="toc" aria-label="Page contents">
        <h2>Contents</h2>
      </nav>
      
      
        <div class="newsletter__webinar_detail">
          <div class="newsletter__inner">
            <h3>Never Miss a Webinar</h3>
            <p class="newsletter__text">
              From live technical deep dives to product announcements, we'll let you know when new webinars and educational content are available.
            </p>
           <?php echo $footer_subscription_form; ?>
           </div>
        </div>
    
    </aside>

    <main class="main">
        <div class="webinar-detail__content">
		    <?php echo '<InnerBlocks />'; ?>
	    </div> 
    </main>
  </div>


</section>
<script>
window.addEventListener('load', function () {
    jQuery(".newsletter__webinar_detail .hs-input")
        .attr("placeholder", "Email Address");
});
</script>
