<?php
/**
* Layout of NautobotGPT CTA.
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

$background_image = get_field('background_image');
$left_image = get_field('left_image');
$heading = get_field('heading');
$link = get_field( 'product_cta' );
?>
<section id="<?php echo $id; ?>" class="nc-table <?php echo $className; ?>">
    <div class="container">
        <?php if( have_rows('nc_offer_table') ): ?>
            <?php while( have_rows('nc_offer_table') ): the_row(); ?>
                
                <?php 
                    $title = get_sub_field('nc_table_title');
                    $content = get_sub_field('nc_table_content');
                ?>

                <div class="section">
                    <?php if( $title ): ?>
                        <h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
                    <?php endif; ?>

                    <?php if( $content ): ?>
                        <?php echo wp_kses_post( $content ); ?>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>

</section>