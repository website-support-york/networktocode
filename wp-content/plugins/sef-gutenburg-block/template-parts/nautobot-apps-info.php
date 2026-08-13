<?php
/**
* Layout For Nautobot App Info
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

$title   = get_field('section_title');
$icon    = get_field('app_icon');
$type    = get_field('app_type');
$initial = get_field('initial_app_relese');
$latest  = get_field('latest_app_relese');
$link    = get_field('app_link');
?>
<section id="<?php echo $id; ?>" class="nb-app-info <?php echo $className; ?>">
    <div class="container">
        <div class="row">
            <?php if ($title) : ?>
                <div class="col-md-12 title-box">
                    <h2 class="section-title"><?php echo $title; ?></h2>                                  
                </div>
            <?php endif; ?>
            <div class="info-box">
                <?php if($icon): ?>
                    <i><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"></i>
                <?php endif; ?>

                <?php if($type): ?>
                    <p>
                        <span>Availability</span> 
                        <span><?php echo esc_html($type); ?></span>
                    </p>
                <?php endif; ?>

                <?php if($initial): ?>
                    <p>
                        <span>Initial Release</span> 
                        <span><?php echo esc_html($initial); ?></span>
                    </p>
                <?php endif; ?>

                <?php if($latest): ?>
                    <p>
                        <span>Latest Release</span> 
                        <span><?php echo esc_html($latest); ?></span>
                    </p>
                <?php endif; ?>

                <?php if($link): ?>
                    <a class="btn theme-btn" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                        <?php echo esc_html($link['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>