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
<section class="nc-plans <?php echo $className; ?>">
    <div class="pricing-cards-container">
        <div class="container">
            <div class="row g-4">
                <?php if( have_rows('nc_plan') ): ?>
                    <?php while( have_rows('nc_plan') ): the_row(); ?>

                        <?php
                            $plan_title = get_sub_field('nc_plan_title');
                            $plan_description = get_sub_field('nc_plan_description');
                            $plan_cta = get_sub_field('nc_plan_cta');
                            $plan_key_feature_title = get_sub_field('nc_plan_key_feature_title');
                            $plan_offer_badge = get_sub_field('nc_plan_offer_badge');
                        ?>
                        <!-- Plan Card -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="pricing-card">
                                <?php if( $plan_offer_badge ): ?> <span class="popular-badge"><?php echo esc_html( $plan_offer_badge ); ?></span> <?php endif; ?>

                                <?php if( $plan_title ): ?> <h4 class="card-title"><?php echo esc_html( $plan_title ); ?></h4> <?php endif; ?>
                                
                                <?php if( $plan_description ): ?> <?php echo wp_kses_post( $plan_description ); ?> <?php endif; ?>
                                
                                <?php if( $plan_cta ): ?>
                                    <a href="<?php echo esc_url($plan_cta['url']); ?>"
                                    target="<?php echo esc_attr($plan_cta['target']); ?>"
                                    class="btn btn-primary">
                                        <?php echo esc_html($plan_cta['title']); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if( $plan_key_feature_title ): ?>
                                    <div class="features-heading"><?php echo esc_html( $plan_key_feature_title ); ?></div>
                                <?php endif; ?>

                                <?php if( have_rows('nc_plan_benefits') ): ?>
                                    <ul class="features-list">
                                        <?php while( have_rows('nc_plan_benefits') ): the_row(); ?>
                                            <?php $benefit = get_sub_field('nc_plan_benefit'); ?>
                                            <?php if( $benefit ): ?>
                                                <li class="feature-item"><i class="bi bi-check-circle"></i><span><?php echo esc_html( $benefit ); ?></span></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
</section>