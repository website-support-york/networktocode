<?php
/*
Plugin Name: Sef Bulk Markdown Importer
Description: A plugin to bulk import Markdown files as WordPress posts.
Version: 1.0
Author: Sef Ali Khan
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include necessary files
include_once(plugin_dir_path(__FILE__) . 'includes/admin-menu.php');
include_once(plugin_dir_path(__FILE__) . 'includes/markdown-handler.php');