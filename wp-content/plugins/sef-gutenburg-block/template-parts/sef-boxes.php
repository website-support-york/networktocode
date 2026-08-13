<?php
/**
 * Layout of Boxes
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$heading = get_field('heading');
$color = get_field('color');
$short_content = get_field('short_content');
$box_heading = get_field('box_heading');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"
    style="background: <?php echo $color; ?>">
    <div class="container">

        <?php if (!empty($heading) || !empty($short_content)): ?>
            <div class="col-md-12">
                <div class="title-box">
                    <h2 class="section-title"><?php echo ($heading); ?></h2>
                    <div class="short-content">
                        <h5 class="sub-title"><?php echo $short_content; ?></h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (have_rows('box_content')): ?>
            <div class="col-md-12">
                <div class="key-cards">
                    <?php if (!empty($box_heading)): ?>
                        <div class="box-heading">
                            <h4><?php echo $box_heading; ?></h4>
                        </div><?php endif; ?>
                    <div class="row g-4">
                        <?php while (have_rows('box_content')):
                            the_row();
                            $box_title = get_sub_field('box_title');
                            $box_content = get_sub_field('box_content');
                            $read_doc = get_sub_field('read_doc');
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-key-card" id="section_category_1">
                                    <?php if (!empty($read_doc)): ?>
                                        <h6><?php echo $box_title; ?></h6><?php endif; ?>
                                    <?php if (!empty($box_content)): ?>
                                        <p><?php echo $box_content; ?></p><?php endif; ?>
                                    <?php if (!empty($read_doc)): ?><a href="<?php echo $read_doc['url']; ?>"
                                            target="<?php echo $read_doc['target']; ?>"
                                            class="btn btn-learn-more"><?php echo $read_doc['title']; ?> <i
                                                class="bi bi-arrow-right"></i></a><?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>