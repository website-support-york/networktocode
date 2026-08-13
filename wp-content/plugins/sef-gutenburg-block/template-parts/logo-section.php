<?php

/**
* Layout of Logo Section
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

$logo_select_style = get_field('logo_select_style');
$background_image = get_field('logo_section_background_image');
$brand_headeing = get_field('logo_heading');
$brand_desc = get_field('logo_description');
if ($logo_select_style == 'Simple'): ?>
    <section class=" pb-5 only-text brands-slide <?php echo $className; ?>" style="background: #fef7f0">
        <div class="container">
            <?php if ($brand_headeing): ?>
                <h3 class="  fs-34  wow animate__animated animate__fadeInUp"><?php echo $brand_headeing ?></h3>
            <?php endif ?>
            <?php if ($brand_desc): ?>
                <p class="wow animate__animated animate__fadeInUp delay1"><?php echo $brand_desc ?></p>
            <?php endif ?>
            <div class="pt-3 icons-slide">
                <?php 
                if( have_rows('add_logos') ):
                    echo '<div class="brands-slide">';
                    while( have_rows('add_logos') ) : the_row();
                        $add_logo = get_sub_field('add_logo');
                        ?>
                        <div class="item">
                            <img src="<?php echo $add_logo['url']; ?>" alt="<?php echo $add_logo['alt']; ?>" />
                        </div>
                        <?php
                    endwhile;?>
                    <?php while( have_rows('add_logos') ) : the_row();
                        $add_logo = get_sub_field('add_logo');?>
                        <div class="item">
                            <img src="<?php echo $add_logo['url']; ?>" alt="<?php echo $add_logo['alt']; ?>" />
                        </div>
                        <?php
                    endwhile;?>
                    <?php echo "</div>";
                endif; ?>
            </div>
        </div>
    </section>
<?php endif ?>


<?php if ($logo_select_style == 'With Background'): ?>
    <section class=" only-text with-white-bg brands-slide <?php echo $className; ?>" style="background: url(<?php echo $background_image['url']; ?>); background-size: cover; background-repeat: no-repeat; ">
        <div class="container">
            <div class="p-5 bg-white">
                <?php if ($brand_headeing): ?>
                    <h3 class="  fs-34  wow animate__animated animate__fadeInUp"><?php echo $brand_headeing ?></h3>
                <?php endif ?>
                <?php if ($brand_desc): ?>
                    <p class="wow animate__animated animate__fadeInUp delay1"><?php echo $brand_desc ?></p>
                <?php endif ?>
                <div class="pt-5 icons-slide">
                    <?php 
                    if( have_rows('add_logos') ):
                        echo '<div class="brands-slide">';?>
                        <?php while( have_rows('add_logos') ) : the_row();
                            $add_logo = get_sub_field('add_logo');
                            ?>
                            <div class="item">
                                <img src="<?php echo $add_logo['url']; ?>" alt="<?php echo $add_logo['alt']; ?>" />
                            </div>
                            <?php
                        endwhile;?>
                        <?php while( have_rows('add_logos') ) : the_row();
                            $add_logo = get_sub_field('add_logo');
                            ?>
                            <div class="item">
                                <img src="<?php echo $add_logo['url']; ?>" alt="<?php echo $add_logo['alt']; ?>" />
                            </div>
                            <?php
                        endwhile;?>
                        <?php echo "</div>";
                    endif; ?>
                </div>
            </div>  
        </div>
    </section>
<?php endif ?>