<?php

/**
* Layout of sef Achieve Card.
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

$sef_achieve_card_bg_color = get_field('sef_achieve_card_bg_color');
$sef_achieve_card_heading = get_field('sef_achieve_card_heading');
$sef_achieve_cards_rows = get_field('sef_achieve_cards_row');
$sef_achieve_card_button = get_field('sef_achieve_card_button');
$sef_achieve_card_button_popup = get_field('sef_achieve_card_button_popup');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> cardSection" style="background-color: <?php echo $sef_achieve_card_bg_color; ?>">
    <div class="container">
        <div class="row">
            <div class="titleBox col-md-12">
                <?php if (!empty($sef_achieve_card_heading)) { ?><h4><?php echo $sef_achieve_card_heading; ?></h4><?php } ?>
            </div>
        </div>

        <?php 
            $i = 1;
            foreach ($sef_achieve_cards_rows as $sef_achieve_cards_rows) {            
            $sef_achieve_cards = $sef_achieve_cards_rows['sef_achieve_cards'];
        ?>
        <div class="cardParent row">

            <?php 
                $j = 1;
                foreach ($sef_achieve_cards as $sef_achieve_cards) {            
                $sef_achieve_card_title = $sef_achieve_cards['sef_achieve_card_title'];
                $sef_achieve_inner_cards = $sef_achieve_cards['sef_achieve_inner_cards'];
            ?>
            <div class="cardBox col-md-6 col-lg-4">
                <?php if (!empty($sef_achieve_card_title)) { ?>
                <div class="cardTitle">
                    <?php echo $sef_achieve_card_title; ?>
                </div>
                <?php } ?>
                <div class="cardInnerBox">

                    <?php 
                        $k = 1;
                        foreach ($sef_achieve_inner_cards as $sef_achieve_inner_cards) {            
                        $sef_achieve_inner_card_image = $sef_achieve_inner_cards['sef_achieve_inner_card_image'];
                        $sef_achieve_inner_card_title = $sef_achieve_inner_cards['sef_achieve_inner_card_title'];
                        $sef_achieve_inner_card_content = $sef_achieve_inner_cards['sef_achieve_inner_card_content'];
                    ?>
                    <div class="cardContentGroup">
                    <div class="cardContentBox">
                        <div class="contentParent">
                            <?php if (!empty($sef_achieve_inner_card_image)) { ?>
                            <div class="iconBox">
                                <img src="<?php echo $sef_achieve_inner_card_image['url'] ?>" alt="<?php echo $sef_achieve_inner_card_image['alt'] ?>">
                            </div>
                            <?php } ?>
                            <div class="iconContent">
                                <?php if (!empty($sef_achieve_inner_card_title)) { ?>
                                <div class="contentTitle">
                                    <?php echo $sef_achieve_inner_card_title; ?>
                                </div>
                                <?php } ?>
                                <?php if (!empty($sef_achieve_inner_card_content)) { ?>
                                <div class="detailBox">
                                    <?php echo $sef_achieve_inner_card_content; ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php
                      $k++;
                    } ?>


                </div>
            </div>
            <?php
              $j++;
            } ?>

        </div>
        <?php
          $i++;
        } ?>

    
        <?php if (!empty($sef_achieve_card_button)) { ?>
        <div class="row">
            <div class="btnBox d-md-flex gap-4 mt-2 justify-content-center text-center">
                <a href="<?php echo $sef_achieve_card_button['url']; ?>" <?php if( $sef_achieve_card_button_popup ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $sef_achieve_card_button['url'] ?>" <?php endif; ?> class="btn theme-btn"><?php echo $sef_achieve_card_button['title']; ?></a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>