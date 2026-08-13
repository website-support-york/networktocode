<?php

/**
* Layout of sef Sub Processors.
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

$title = get_field('title');
$contents = get_field('contents');
$table = get_field('table');
$post_per_page = '10';


?>

<figure class="wp-block-table">
	<table>
		<thead>
			<tr>
				<th><strong>Sub-Processor</strong></th>
				<th><strong>Purpose</strong></th>
				<th><strong>Location</strong></th>
			</tr>
		</thead>
		<tbody>
			<?php
	          $args = array(
	            'post_type' => 'post',
	            'posts_per_page' => $post_per_page,
	            'category_name'    => 'sub-processors'
	          );
	          $loop = new WP_Query( $args );
	          while ( $loop->have_posts() ) : $loop->the_post();
            ?>
			<tr>
				<?php
                  //echo "<pre>";
                  //print_r($current_opening);
                  //print_r(get_the_ID() . 'Post ID');
                  $post_button_detail 	= get_field('post_button_detail', get_the_ID());
                  $company_name			= get_field('company_name', get_the_ID());
                ?>
				<td><a href="<?php echo $post_button_detail['url']; ?>"><?php echo get_the_title(); ?></a></td>
				<td><?php echo wp_trim_words( get_post_field('post_content'), $num_words = 32, $more = '...'); ?></td>
				<td><?php echo $company_name; ?></td>
			</tr>
			<?php
            	endwhile;
            ?>
		</tbody>
	</table>
</figure>