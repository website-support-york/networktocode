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
<style>
section.nautobot-gpt-cta {
    color: #fff;
    /*padding-bottom:0*/
    padding-top:0
}
.btn-outline { border: 1px solid #e07807 !important; padding: 5px !important; }
section.nautobot-gpt-cta .row {
    max-width: 1266px;
    margin: 0 auto;
    background:  #212529;
    border-radius: 15px;
    /* background: linear-gradient(90deg, #0033ff 0%, #000000 100%); */
    background-size:cover;
    background-repeat:no-repeat;
    align-items:center;

}

section.nautobot-gpt-cta .row img {
    height: 16.94rem;         /* 271px */
    width: auto;
    margin-left: 2.56rem;     /* 41px */
}

section.nautobot-gpt-cta .content {
    padding: 3.69rem 0.56rem; /* 59px 9px */
}

section.nautobot-gpt-cta h2 {
    font-family: 'Zilla Slab';
    font-weight: 600;
    font-size: 2.09rem;       /* 33.48px */
    line-height: 2.79rem !important; /* 44.64px */
    margin-bottom: 0.31rem;   /* 5px */
}

section.nautobot-gpt-cta a.btn.btn-learn {
    color: #fff !important;
    font-family: 'Roboto';
    font-weight: 600;
    font-size: 1.395rem;      /* 22.32px */
    line-height: 1.673rem;    /* 26.78px */
}

section.nautobot-gpt-cta a.btn.btn-learn i {
    font-size: 1.375rem;      /* 22px */
}

@media (max-width: 1200px) { /* 1200px */
    section.nautobot-gpt-cta .content {
        padding: 1rem 0; /* 16px 0 */
    }

    section.nautobot-gpt-cta .row img {
        height: auto;
        margin-left: 0;
    }

    section.nautobot-gpt-cta h2 {
        font-size: 1.75rem;         /* 28px */
        line-height: 2.375rem !important; /* 38px */
        margin-bottom: 0;
    }

    section.nautobot-gpt-cta a.btn.btn-learn {
        font-size: 1.125rem;        /* 18px */
    }
}

@media (max-width: 767px) { /* 767px */
    section.nautobot-gpt-cta .row {
        background-image: linear-gradient(180deg, #0033ff 0%, #000000 62%) !important;
    }
    section.nautobot-gpt-cta a.btn.btn-learn {
        font-size: 1rem;            /* 16px */
    }

    section.nautobot-gpt-cta h2 {
        font-size: 1.5rem;          /* 24px */
        line-height: 2.125rem !important; /* 34px */
    }
    section.nautobot-gpt-cta .content {
        padding: 1.5rem; /* 16px 0 */
    }
}
</style>

<section class="nautobot-gpt-cta <?php echo $className; ?>">



 
    <div class="container">
        <div class="row" style="background-image:url(<?php echo esc_url( $background_image['url'] ); ?>)">
        	<div class="col-md-6">
            <?php
                if ( $left_image ) : ?>
                    <img src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <?php if ( $heading ) : ?>
                        <h2><?php echo esc_html( $heading ); ?></h2>
                    <?php endif; ?>
                    <?php
                    
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-learn btn-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="bi bi-arrow-right"></i></a>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>