<?php

// Handle file uploads and imports
function bulk_markdown_importer_handle_files($files) {
    $total_files = count($files['name']);

    for ($i = 0; $i < $total_files; $i++) {
        $file_tmp_name = $files['tmp_name'][$i];
        $file_name = $files['name'][$i];

        if (!file_exists($file_tmp_name)) {
            echo '<div class="error"><p>File ' . esc_html($file_name) . ' does not exist.</p></div>';
            continue;
        }

        $markdown_content = '<div class="custom-blog"> ' . file_get_contents($file_tmp_name) . '</div>';
        if ($markdown_content === false) {
            echo '<div class="error"><p>Could not read file ' . esc_html($file_name) . '.</p></div>';
            continue;
        }

        $html_content = bulk_markdown_importer_convert_markdown_to_html($markdown_content);
        if ($html_content === false) {
            echo '<div class="error"><p>Could not convert Markdown to HTML for file ' . esc_html($file_name) . '.</p></div>';
            continue;
        }

        $post_id = wp_insert_post([
            'post_title'   => sanitize_text_field(pathinfo($file_name, PATHINFO_FILENAME)),
            'post_content' => $html_content,
            'post_status'  => 'publish',
            'post_author'  => get_current_user_id(),
        ]);

        if ($post_id) {
            echo '<div class="updated"><p>Markdown file ' . esc_html($file_name) . ' imported successfully. <a href="' . get_edit_post_link($post_id) . '">Edit Post</a></p></div>';
        } else {
            echo '<div class="error"><p>Failed to create post for file ' . esc_html($file_name) . '.</p></div>';
        }
    }
}

// Convert Markdown to HTML
function bulk_markdown_importer_convert_markdown_to_html($markdown) {
    if (!class_exists('Parsedown')) {
        require_once plugin_dir_path(__FILE__) . 'parsedown/Parsedown.php';
    }

    $parsedown = new Parsedown();
    return $parsedown->text($markdown);
}
?>