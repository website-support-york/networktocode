<?php

/**
 * Layout of Open Source - Network Belief.
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

$header  = get_field('header');
$content = get_field('content');
?>

<!-- OSNC Info Block starts -->
<div class="osnc-info <?php echo $className; ?>" id="<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="title-box">
            <?php if (!empty($header)): ?>
                <h2 class="section-title"><?php echo esc_html($header); ?></h2>
            <?php endif; ?>

            <?php if (!empty($content)): ?>
                <?php echo wp_kses_post($content); ?>
            <?php endif; ?>
        </div>

        <?php if (have_rows('box')): ?>
            <div class="row osnc-blocks">
                <?php while (have_rows('box')): the_row();

                    $number  = get_sub_field('number');
                    $prefix  = get_sub_field('prefix');
                    $postfix = get_sub_field('postfix');
                    $title   = get_sub_field('title');
                    $icon    = get_sub_field('icon');
                    $link    = get_sub_field('link');
                ?>
                    <div class="col-4">
                        <div class="osnc-item">

                            <?php if ($prefix || $number || $postfix): ?>
                                <div class="osnc-counter">
                                    <span class="osnc-counter-prefix"><?php echo esc_html($prefix); ?></span>
                                    <span class="osnc-counter-value"><?php echo esc_html($number); ?></span>
                                    <span class="osnc-counter-postfix"><?php echo esc_html($postfix); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($title)): ?>
                                <h5><?php echo esc_html($title); ?></h5>
                            <?php endif; ?>

                            <?php if (!empty($link) && !empty($icon)): ?>
                                <a 
                                    href="<?php echo esc_url($link['url']); ?>"
                                    target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                                >
                                    <img 
                                        src="<?php echo esc_url($icon['url']); ?>" 
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                    >
                                    <span><?php echo esc_html($link['title']); ?></span>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- OSNC Info Block Ends -->
