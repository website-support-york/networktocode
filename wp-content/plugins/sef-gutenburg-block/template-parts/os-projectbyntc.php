<?php

/**
* Layout of Open Source - Project by NTC.
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
$sub_content = get_field('sub_content');
$description = get_field('description');

?>
<!--OS NTC Block Starts-->
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> osntc">
    <div class="container">
        <div class="title-box">
            <?php if(!empty($heading)):?><h2 class="section-title"><?php echo $heading;?></h2><?php endif;?>
            <?php if(!empty($sub_content)):?><h5><?php echo $sub_content;?></h5><?php endif;?>
        </div>
        <div class="row">
            <?php if( have_rows('our_projects') ):?> 
            <?php while( have_rows('our_projects') ) : the_row();
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
            ?>
            <div class="col-12 col-lg-6">
                <div class="osntc-block">
                    <?php if(!empty($icon)):?><i><img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"></i><?php endif;?>
                    <div class="osntc-block__info">
                        <?php if(!empty($heading)):?><h5><?php echo $heading;?></h5><?php endif;?>
                        <?php if(!empty($content)):?><p><?php echo $content;?></p><?php endif;?>
                        <?php if(!empty($button)):?>
                            <?php $popup = $button['url'] == "#contact-us-form" ? 'data-bs-toggle="modal" data-bs-target="#contact-us-form"' : ""; ?>
                            <a <?php echo $popup; ?> target="<?php echo $button['target'];?>" href="<?php echo $button['url'];?>"><?php echo $button['title'];?></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php endif;?>
            <?php if(!empty($description)):?>
            <div class="col-12">
                <p><?php echo $description;?></p>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
<!--OS NTC Block Ends-->