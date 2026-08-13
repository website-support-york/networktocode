<?php
/**
 * Layout of Table of Content
 */

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

$heading = get_field('heading');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">

        <?php if(!empty($heading)): ?>
            <div class="heading title-box text-start">
                <h3 class="section-title mt-3 sec-heading"><?php echo esc_html($heading); ?></h3>
            </div>
        <?php endif; ?>
        <?php if( have_rows('title_&_content') ): $i = 0;?>
            <div class="row">
                <!-- LEFT SIDE -->
                <div class="col-sm-5">
                    <?php while( have_rows('title_&_content') ): the_row(); 
                        $i++;
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $active1 = ($i === 1) ? "active" : "";
                        ?>
                        <div class="tabs">
                            <a class="icon <?php echo $active1; ?>" href="#tab-<?php echo $i; ?>">
                                <?php if ($icon): ?>
                                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                <?php endif; ?>
                                <span><?php echo esc_html($title); ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-sm-7">
                    <div class="orange-bg">
                        <?php 
                        // reset loop pointer
                        $j = 0;
                        reset_rows(); // important: restart repeater loop
                        while( have_rows('title_&_content') ): the_row(); 
                            $j++;
                            $active2 = ($j === 1) ? "active" : "";
                            ?>
                            <div id="tab-<?php echo $j; ?>" class="tab-content <?php echo $active2; ?>">

                                <?php 
                                // inner content
                                if( have_rows('inner_content') ):
                                    while( have_rows('inner_content') ): the_row();
                                        $content = get_sub_field('content');
                                        echo '<p>'.($content).'</p>';?>

                                        <?php // nested tab_content
                                        if( have_rows('tab_content') ):
                                            $c = 0;
                                            echo '<div class="sub-tabs">';
                                            while( have_rows('tab_content') ): the_row();
                                                $c++;
                                                $tab_title = get_sub_field('tab_title');
                                                $tab_short_content = get_sub_field('tab_short_content');
                                                $active3 = ($c === 1) ? "active" : "";
                                                $sub_id = 'tab-'.$j.'-'.$c;
                                                ?>
                                                <div id="<?php echo $sub_id; ?>" class="sub-tab <?php echo $active3; ?>">
                                                    <h4><?php echo esc_html($tab_title); ?></h4>
                                                    <span><?php echo esc_html($tab_short_content); ?></span>
                                                </div>
                                            <?php endwhile;
                                            echo '</div>';
                                        endif;?>

                                    <?php endwhile;
                                endif;
                                ?>

                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
