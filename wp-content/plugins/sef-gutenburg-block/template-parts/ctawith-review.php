<?php

/**
 * Layout of Cta with Review.
 **/

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

$heading = get_field('heading');
$description = get_field('description');
$review_script = get_field('review_script');
$section_icon = get_field('section_icon_');

?>
<section id="<?php echo esc_attr($id); ?>" class="future-netdev <?php echo esc_attr($className); ?>"
  style="background-color: <?php echo $accordion_bg_color; ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12 title-box">

        <!--- Section Icon ---->
        <?php if ($section_icon): ?>
          <img src="<?php echo $section_icon['url']; ?>" alt="<?php echo $section_icon['alt']; ?>" class="sec-icon" />
        <?php endif ?>
        <!--- Section Icon ---->

        <?php if (!empty($heading)): ?>
          <h3 class="section-title no-lazy">
            <?php echo $heading; ?>
          </h3>
        <?php endif; ?>
        <?php if (!empty($description)): ?>
          <p>
            <?php echo $description; ?>
          </p>
          <?php if (have_rows('client_reviews')): ?>
            <div class="row clients-reviews">

              <?php while (have_rows('client_reviews')):
                the_row();

                // Get sub fields
                $logo = get_sub_field('client_review_logo'); // image array or ID
                $tagline = get_sub_field('client_review_tagline');
                $info = get_sub_field('client_review_info');

                // Get image URL safely
                $logo_url = '';
                if ($logo) {
                  if (is_array($logo)) {
                    $logo_url = $logo['url'];
                  } else {
                    $logo_url = wp_get_attachment_image_url($logo, 'full');
                  }
                }
                ?>

                <div class="col-xl-4 col-lg-6">
                  <div class="client-review">

                    <?php if ($logo_url): ?>
                      <i>
                        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($tagline); ?>">
                      </i>
                    <?php endif; ?>

                    <?php if ($tagline): ?>
                      <h6>
                        <?php echo $tagline; ?>
                      </h6>
                    <?php endif; ?>

                    <?php if ($info): ?>
                      <p>
                        <?php echo $info; ?>
                      </p>
                    <?php endif; ?>

                  </div>
                </div>

              <?php endwhile; ?>

            </div>
          <?php endif; ?>
        <?php endif; ?>
        <div id="gartner-widget"></div>
        <?php if(have_rows('client_review_block_links')): ?>
            <div class="client-review-links">
                
                <?php while(have_rows('client_review_block_links')): the_row(); 
                    $link = get_sub_field('client_review_link');
    
                    if($link): 
                        $url = $link['url'];
                        $title = $link['title'];
                        $target = $link['target'] ?: '_self';
                ?>
                    <a href="<?php echo esc_url($url); ?>" 
                      target="<?php echo esc_attr($target); ?>" 
                      <?php if ($url == "#contact-us-form"): ?>
                        data-bs-toggle="modal" data-bs-target="#contact-us-form"
                      <?php endif ?>
                      class="btn theme-btn">
                        <?php echo esc_html($title); ?>
                    </a>
                <?php endif; endwhile; ?>
    
            </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript"
	src="https://www.gartner.com/peer-insights/vendor-portal/public/Widget/js/widget.js">
</script>

<script type="text/javascript">
	GartnerPI_Widget({
		size: "line",
		theme: "light",
		sourcingLink: "https://gtnr.io/08LNDGJyQ",
		widget_id: "ZjczYzNiMzktNGZlNi00ZmZhLWE2ZmItZjFlNmY1Y2Q3OGFl",
		version: "2",
		container: document.querySelector("#gartner-widget")
	});
</script>