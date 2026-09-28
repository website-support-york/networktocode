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

$transcript_title      = get_field( 'full_transcript_title' );
$want_to_add_description = get_field( 'want_to_add_description' );
$description           = get_field( 'description' );
$transcript_arrow      = get_template_directory_uri() . '/assets/images/chevron.svg';
$qa_title              = get_field( 'q&a_transcript_title' );

?>

<section id="<?php echo esc_attr( $id ); ?>" class="vcs-full-transcript<?php echo esc_attr( $class_name ); ?>">
	<?php if ( ! empty( $transcript_title ) ) : ?>
	<details class="accordion" id="transcript" >
		<summary>
				<h2><?php echo esc_html( $transcript_title ); ?></h2>
			
			<img src="<?php echo esc_url( $transcript_arrow ); ?>" alt="" width="21" height="32" />
		</summary>
		<div class="transcript">
			<?php if ( 'Yes' === $want_to_add_description && $description ) : ?>
				<?php echo wp_kses_post( $description ); ?>
			<?php elseif ( have_rows( 'full_transcript_list' ) ) : ?>
				<?php while ( have_rows( 'full_transcript_list' ) ) : the_row(); ?>
					<?php $speaker = get_sub_field( 'name_of_speaker' ); ?>
					<div class="t-item">
						<div class="t-meta">
							<?php if ( $speaker ) : ?>
								<span class="speaker"><?php echo esc_html( $speaker ); ?></span>
							<?php endif; ?>
							<span class="time"><span class="clock" aria-hidden="true"></span><?php echo esc_html( get_sub_field( 'time' ) ); ?></span>
						</div>
						<p><?php echo wp_kses_post( get_sub_field( 'description' ) ); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</details>
	<?php endif; ?>

	<?php if ( have_rows( 'questions_and_answers' ) ) : ?>
		<details class="accordion" id="qa">
			<summary>
				<h2><?php echo esc_html( $qa_title ?: __( 'Q&A Transcript', 'sef-boilerplate' ) ); ?></h2>
				<img src="<?php echo esc_url( $transcript_arrow ); ?>" alt="" width="21" height="32" />
			</summary>
			<div class="qa">
				<?php while ( have_rows( 'questions_and_answers' ) ) : the_row(); ?>
					<div class="qa-block">
						<span class="badge badge-q"><?php esc_html_e( 'QUESTION', 'sef-boilerplate' ); ?></span>
						<p><?php echo wp_kses_post( get_sub_field( 'question' ) ); ?></p>
					</div>
					<div class="qa-answer">
						<div class="qa-answer-meta">
							<span class="badge badge-a"><?php esc_html_e( 'ANSWER', 'sef-boilerplate' ); ?></span>
							<span class="speaker"><?php echo esc_html( get_sub_field( 'speaker' ) ); ?></span>
						</div>
						<p><?php echo wp_kses_post( get_sub_field( 'answer' ) ); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</details>
	<?php endif; ?>

	<script>
		(function () {
			const initSingleAccordion = function () {
				const accordions = document.querySelectorAll('.vcs-full-transcript .accordion');
				if (!accordions.length) {
					return;
				}

				accordions.forEach(function (accordion) {
					accordion.addEventListener('toggle', function () {
						if (!accordion.open) {
							return;
						}

						accordions.forEach(function (otherAccordion) {
							if (otherAccordion !== accordion) {
								otherAccordion.open = false;
							}
						});
					});
				});
			};

			if (document.readyState === 'loading') {
				document.addEventListener('DOMContentLoaded', initSingleAccordion);
			} else {
				initSingleAccordion();
			}
		})();
	</script>
</section>