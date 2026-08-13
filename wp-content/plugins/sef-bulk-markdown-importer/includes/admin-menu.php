<?php

// Add admin menu
function bulk_markdown_importer_admin_menu() {
    add_menu_page(
        'Bulk Markdown Importer',
        'Bulk Markdown Importer',
        'manage_options',
        'bulk-markdown-importer',
        'bulk_markdown_importer_page',
        'dashicons-upload',
        20
    );
}

add_action('admin_menu', 'bulk_markdown_importer_admin_menu');

function bulk_markdown_importer_page() {
    ?>
    <div class="wrap">
        <h1>Bulk Markdown Importer</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="markdown_files[]" multiple />
            <input type="submit" name="submit" value="Import" class="button button-primary" />
        </form>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        if (isset($_FILES['markdown_files'])) {
            $files = $_FILES['markdown_files'];
            bulk_markdown_importer_handle_files($files);
        }
    }
}
?>