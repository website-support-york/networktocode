<?php

/**
* Layout of Sef Tab For Success Stories.
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

$heading = get_field('heading');
?>


<!-- new tab view of network automation platform development -->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> platform-development blog-media">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-box wow animate__animated animate__fadeInUp">
                <?php if(!empty($heading)):?><h3 class="section-title"><?php echo $heading;?></h3><?php endif;?>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <?php if( have_rows('tab') ):?>
                        <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
                            <?php $i = 0; while( have_rows('tab') ) : the_row();
                                $tab_heading = get_sub_field('tab_heading');
                                $slug = strtolower(str_replace(' ', '-', $tab_heading));
                            ?>
                                <?php if(!empty($tab_heading)): ?>
                                    <li class="nav-item nav-blog">
                                        <a class="nav-link <?php echo ($i === 0) ? 'active show' : ''; ?>" 
                                        data-bs-toggle="tab" 
                                        href="#<?php echo esc_attr($slug); ?>" 
                                        title="<?php echo esc_attr($tab_heading); ?>">
                                            <?php echo esc_html($tab_heading); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php $i++; endwhile; ?>
                        </ul>
                    <?php endif; ?>


                    <!-- Tab panes -->
                    <?php if( have_rows('tab') ):?>
                        <div class="tab-content">
                            <?php $i = 0; while( have_rows('tab') ) : the_row();
                                $tab_heading = get_sub_field('tab_heading');
                                $slug = strtolower(str_replace(' ', '-', $tab_heading));
                            ?>
                                <div class="tab-pane container fade <?php echo ($i === 0) ? 'active show' : ''; ?>" id="<?php echo esc_attr($slug); ?>">
                                    <?php if( have_rows('tab_content') ): ?>
                                        <?php while( have_rows('tab_content') ) : the_row();
                                            $icon = get_sub_field('icon');
                                            $title = get_sub_field('title');
                                            $content = get_sub_field('content');
                                        ?>
                                        <div class="slider-box-content">
                                            <div class="icon-nt">
                                            <?php if(!empty($icon)): ?>
                                                <img src="<?php echo esc_url($icon['url']);?>" alt="<?php echo esc_attr($icon['alt']);?>" />
                                            <?php endif; ?>
                                            </div>
                                            <div class="bx-content">
                                                <?php if(!empty($title)): ?>
                                                    <h3><?php echo esc_html($title);?></h3>
                                                <?php endif; ?>
                                            </div>
                                            <?php if(!empty($content)): ?>
                                                <p><?php echo esc_html($content);?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            <?php $i++; endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>