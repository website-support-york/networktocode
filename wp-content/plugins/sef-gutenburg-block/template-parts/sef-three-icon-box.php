<?php
/**
 * Three Icon Box Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sef-three-icon-box-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sef-three-icon-box';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Get the fields
$icon_boxes = get_field('icon_boxes') ?: array();
$icon_section_heading = get_field('icon_section_heading');

// If empty setup a default for preview
if ( empty( $icon_boxes ) && $is_preview ) {
    $icon_boxes = array(
        array(
            'icon' => array('url' => 'https://via.placeholder.com/80?text=Icon'),
            'title' => 'BUILT FOR SELF-MANAGED CONTROL'
        ),
        array(
            'icon' => array('url' => 'https://via.placeholder.com/80?text=Icon'),
            'title' => 'ADVANCED AUTOMATION INCLUDED'
        ),
        array(
            'icon' => array('url' => 'https://via.placeholder.com/80?text=Icon'),
            'title' => 'SUPPORT FROM THE CREATORS OF NAUTOBOT'
        )
    );
}

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if ($icon_section_heading): ?>
                <h2 class="section-title"><?php echo $icon_section_heading ?></h2>
            <?php endif ?>
            
        <div class="sef-three-icon-box-inner">
            <div class="row">
                <?php if( $icon_boxes ): ?>
                    <?php foreach( $icon_boxes as $box ): ?>
                        <div class="col-md-4">
                            <div class="sef-three-icon-box-item">
                                <div class="sef-three-icon-box-icon">
                                    <?php if( !empty($box['icon']['url']) ): ?>
                                        <img src="<?php echo esc_url($box['icon']['url']); ?>" alt="<?php echo esc_attr($box['icon']['alt'] ?? 'Icon'); ?>" />
                                    <?php endif; ?>
                                </div>
                                <?php if( !empty($box['title']) ): ?>
                                    <h4 class="sef-three-icon-box-title"><?php echo esc_html($box['title']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
