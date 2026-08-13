<?php

/**
* Layout of sef Tab view for workflow automation.
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
$blgHeading = get_field('blog_heading_');
$to_select_post = get_field('to_select_post');
?>
<?php if($to_select_post[0] == 'Yes'){?>
<section class="<?php echo $className ?>  blog-media">
	<div class="blogs-new">
		<div class="container">
			<div class="title-box">
				<h2 class="section-title wow animate__ animate__fadeInUp"> <?php echo $blgHeading ? $blgHeading : "Network Automation Blog Posts"; ?> </h2>
			</div>
			<div class="row">
				<?php
				$select_post = get_field('select_post');
				if( $select_post ): ?>
					<?php foreach( $select_post as $post ): 

					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); 
					?>
						<div class="col-md-6">
							<div class="single-blog wow animate__animated animate__fadeInUp delay1">
								<h6 class="blog-title" style="color: #027ef7;"><?php echo $post->post_title; ?></h6>
								<p class="blog-desc"><?php echo wp_trim_words( get_post_field('post_content', $post->ID), $num_words = 32, $more = '...'); ?></p>
								<a target="_blank" href="<?php the_permalink($post->ID); ?>" class="btn btn-learn">Read more <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>		
				<div class="col-md-12 text-center mt-4 blog-redirections">
					<a target="_blank" href="/blog" class="btn theme-btn wow animate__ animate__fadeInUp delay4">Read all blogs</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }else{?>
<section class="<?php echo $className ?>  blog-media">
	<div class="blogs-new">
		<div class="container">
			<div class="title-box">
				<h2 class="section-title wow animate__ animate__fadeInUp"> <?php echo $blgHeading ? $blgHeading : "Network Automation Blog Posts"; ?> </h2>
			</div>
			<div class="row">
				<?php 
				$blog_posts = get_posts(array(
					"status" => "publish",
					"post_type" => "blog",
					//"category_name" => "blog",
					"posts_per_page" => "4",
					"orderby"   => "DATE",
					"order"     => "DESC"
				));
				if ($blog_posts) {
					foreach( $blog_posts as $blog_post ): 
						?>
						<div class="col-md-6">
							<div class="single-blog wow animate__animated animate__fadeInUp delay1">
								<h6 class="blog-title" style="color: #027ef7;"><?php echo get_the_title($blog_post->ID); ?></h6>
								<p class="blog-desc"><?php echo wp_trim_words( get_post_field('post_content', $blog_post->ID), $num_words = 32, $more = '...'); ?></p>
								<a href="<?php echo get_permalink($blog_post->ID); ?>" class="btn btn-learn">Read more <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
						<?php
					endforeach;
				} ?>
				<div class="col-md-12 text-center mt-4 blog-redirection">
					<a href="#" target="_blank" class="btn theme-btn wow animate__ animate__fadeInUp delay4">Read all blogs</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>