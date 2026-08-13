<?php
/**
 * FAQ Layout
 */

// Block ID
$id = 'iframe_' . $block['id'];

if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Classes
$className = '';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// ACF Fields
$bg_color   = get_field('bg_color');
$heading    = get_field('heading');
$description = get_field('description');
$faq_items  = get_field('faq');
$button  = get_field('button');

// Default background
$bg_style = !empty($bg_color) ? 'background-color:' . esc_attr($bg_color) . ';' : '';

$headingtag = 'h2';
if ( is_single() ) {
    $headingtag = 'h5';
}

?>

<section id="<?php echo esc_attr($id); ?>"
    class="training-faq future-netdev <?php echo esc_attr($className); ?>"
    style="<?php echo $bg_style; ?>">

    <div class="container">
        <div class="row">

            <div class="col-md-12 blog-pad">
                <div class="title-box">

                    <?php if (!empty($heading)) : ?>
                        <h2 class="section-title wow animate__animated animate__fadeInUp">
                            <?php echo esc_html($heading); ?>
                        </h2>
                    <?php endif; ?>



                    <?php if (!empty($description)) : ?>
                        <div class="sub-title wow animate__animated animate__fadeInUp delay1">
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <?php if (!empty($faq_items) && is_array($faq_items)) : ?>

                <div class="col-md-12 future-content-box">
                    <div class="future-accordion wow animate__animated animate__fadeInUp w-100">

                        <div class="accordion accordion-flush"
                            id="<?php echo esc_attr($id); ?>-accordion">

                            <?php
                            $counter = 1;

                            foreach ($faq_items as $faq_item) :

                                $title       = $faq_item['title'] ?? '';
                                $content     = $faq_item['content'] ?? '';
                                $parent_title = $faq_item['parent_title'] ?? '';
                                $faq_button = $faq_item['faq_button'] ?? '';
                                $is_first = ($counter === 1);
                            ?>

                                <div class="accordion-item">

                                    <?php if (!empty($parent_title)) : ?>
                                        <h5>
                                            <?php echo esc_html($parent_title); ?>
                                        </h5>
                                    <?php endif; ?>

                                    <?php if (!empty($title)) : ?>

                                        <<?php echo $headingtag; ?> class="accordion-header"
                                            id="<?php echo esc_attr($id); ?>-heading-<?php echo $counter; ?>"
                                            data-cursor="-color-orange">

                                            <button
                                                class="accordion-button <?php echo !$is_first ? 'collapsed' : ''; ?>"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo esc_attr($id); ?>-collapse-<?php echo $counter; ?>"
                                                aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                                aria-controls="<?php echo esc_attr($id); ?>-collapse-<?php echo $counter; ?>">

                                                <?php echo esc_html($title); ?>

                                            </button>

                                        </<?php echo $headingtag; ?>>

                                    <?php endif; ?>

                                    <div
                                        id="<?php echo esc_attr($id); ?>-collapse-<?php echo $counter; ?>"
                                        class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>"
                                        aria-labelledby="<?php echo esc_attr($id); ?>-heading-<?php echo $counter; ?>"
                                        data-bs-parent="#<?php echo esc_attr($id); ?>-accordion">

                                        <?php if ( ! empty( $content ) || ! empty( $faq_button ) ) : ?>
    
                                            <div class="accordion-body">

                                                <?php if ( ! empty( $content ) ) : ?>
                                                    <?php echo wp_kses_post( $content ); ?>
                                                <?php endif; ?>

                                                <?php if ( ! empty( $faq_button ) ) : ?>
                                                    <div class="acc-cta-btn">
                                                        <a 
                                                            class="btn theme-btn mt-2"
                                                            href="<?php echo esc_url( $faq_button['url'] ); ?>"
                                                            target="<?php echo esc_attr( $faq_button['target'] ); ?>"
                                                            rel="noopener noreferrer"
                                                        >
                                                            <?php echo esc_html( $faq_button['title'] ); ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>

                                            </div>

                                        <?php endif; ?>

                                    </div>
                                    
                                </div>

                            <?php
                                $counter++;
                            endforeach;
                            ?>
                            
                            
                        </div>

                    </div>
                </div>

            <?php endif; ?>

            <?php if(!empty($button)):?>
            <div class="cta-btn">
                <a href="<?php echo $button['url'];?>" data-bs-target="<?php echo $button['target'];?>" class="btn theme-btn mt-2" target="<?php echo $button['target'];?>"><?php echo $button['title'];?></a>
            </div>
            <?php endif;?>

        </div>
    </div>

</section>