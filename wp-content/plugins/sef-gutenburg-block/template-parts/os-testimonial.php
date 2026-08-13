<?php

/**
 * Layout of Open Source - Testimonial.
 */

// Create id attribute
$id = 'iframe_' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>

<?php
$testimonials = get_posts(array(
"status" => "publish",
"post_type" => "testimonial",
"posts_per_page" => "25",
"testimonial-category" => 'open-source-projects',
"orderby"   => "ID",
"order"     => "ASC"
));

$bg_image = get_field('bg_image');

if( $testimonials ):
?>
<?php $testimonials_counter = 1 ?>
<!--OSNC Testimonial Block Starts-->
<section 
  id="<?php echo esc_attr($id); ?>" 
  class="<?php echo esc_attr($className); ?> osnc-testimonial"
>
    <div class="container">
        <div class="osnc-testimonial-wrap">
            <?php foreach( $testimonials as $testimonial ): 
            $featured_image_url = get_the_post_thumbnail_url($testimonial->ID, 'full');   
            $thumbnail_id = get_post_thumbnail_id($testimonial->ID);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $quote = get_field('quote',$testimonial->ID);
            $author_name = get_field('author_name',$testimonial->ID);
            $designation = get_field('designation',$testimonial->ID);
            ?>
            <div class="row">
                <div class="col-md-4">
                    <?php if ($featured_image_url) {
                        echo '<figure><img src="' . esc_url($featured_image_url) . '" alt="' . esc_url($alt_text) . '"></figure>';
                    }?>
                </div>
                <div class="col-md-8">
                    <?php if(!empty($quote)):?><h3 class="h2"><?php echo $quote;?></strong></h3><?php endif;?>
                    <div class="osnc-tst__author">
                        <?php if(!empty($author_name)):?><p><?php echo $author_name;?></p><?php endif;?>
                        <?php if(!empty($designation)):?><span><?php echo $designation;?></span><?php endif;?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--OSNC Testimonial Block Ends-->
