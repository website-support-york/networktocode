<?php
/**
 * Layout of FAQ Banner
 */

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

// Fields
$heading = get_field('heading');
$short_content = get_field('short_content');
$image  = get_field('image');

?>
<section id="<?php echo esc_attr($id); ?>" class="faq_banner_sec <?php echo esc_attr($className); ?>" -style="background: linear-gradient(rgb(22, 22, 22), rgb(9, 56, 225));" >    
    <div class="hero-banner"><?php echo get_hansel_and_gretel_breadcrumbs();?></div>
    
    <?php if($heading): ?>
        <div class="heading"><h1><?php echo $heading;?></h1></div>
    <?php endif; ?>
    
    <div class="short-content">
        <?php if($short_content): ?>
            <p><?php echo $short_content;?></p>
        <?php endif; ?>
        <?php 
            $cta = get_field('faq_banner_cta');
            $cta_secondary = get_field('faq_banner_cta_2');

            if ($cta): 
                $url = $cta['url'];
                $title = $cta['title'];
                $target = $cta['target'] ? $cta['target'] : '_self';
        ?>
            <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>" class="btn theme-btn">
                <?php echo esc_html($title); ?>
            </a>
        <?php endif; 

          if ($cta_secondary): 
            
                $url = $cta_secondary['url'];
                $title = $cta_secondary['title'];
                $target = $cta_secondary['target'] ? $cta_secondary['target'] : '_self';

                // $href = $sef_cta_link['url'];
                if (strpos($url, '#') === 0) {
                    $url = 'javascript:;';
                    $sef_popup = true; 
                }
        ?>
            <a href="<?php echo esc_url($url); ?>" 
            <?php if ($sef_popup): ?>
                  data-bs-toggle="modal"
                  data-bs-target="<?php echo $cta_secondary['url']; ?>"
                  <?php endif; ?>
                  target="<?php echo esc_attr($target); ?>" class="btn theme-btn btn-2">
                <?php echo esc_html($title); ?>
            </a>
            
        <?php endif; ?>
    </div>
    <?php if($image): ?>
        <div class="img"><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"></div>
    <?php endif; ?>
</section>