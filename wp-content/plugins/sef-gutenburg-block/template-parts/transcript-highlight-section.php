<?php

$id = 'iframe_' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$highlight_title = get_field( 'transcript_highlight_title' );
$is_podcast      = get_field( 'it_is_podcast' );
$arrow_url       = get_template_directory_uri() . '/assets/images/jump-arrow.svg';
?>

<section id="<?php echo esc_attr( $id ); ?>" class="vcs-transcript-highlights<?php echo esc_attr( $class_name ); ?>">
    <?php if ( $highlight_title ) : ?>
        <h2 class="section-title"><?php echo esc_html( $highlight_title ); ?></h2>
    <?php endif; ?>

    <?php if ( have_rows( 'transcript_highlights' ) ) : ?>
        <?php while ( have_rows( 'transcript_highlights' ) ) : the_row(); ?>
            <?php
            $title       = get_sub_field( 'title' );
            $description = get_sub_field( 'description' );
            $jump_label  = get_sub_field( 'jump_to_time' );
            $jump_time   = get_sub_field( 'jump_to_time_in_seconds' );
            ?>
            <article class="highlight">
                <?php if ( $title ) : ?>
                    <h3><?php echo esc_html( $title ); ?></h3>
                <?php endif; ?>

                <?php if ( $description ) : ?>
                    <p><?php echo esc_html( $description ); ?></p>
                <?php endif; ?>

                <?php if ( $jump_label ) : ?>
                    <a class="jump" href="#recording" onclick="window.<?php echo $is_podcast ? 'jumpTo' : 'seekToTime'; ?>('<?php echo ($jump_time); ?>'); return false;">
                        <?php echo esc_html( $jump_label ); ?>
                        <img src="<?php echo esc_url( $arrow_url ); ?>" alt="" width="20" height="15" />
                    </a>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
