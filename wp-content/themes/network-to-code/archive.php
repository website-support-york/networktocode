<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Network_To_Code
 */

get_header();


if (is_category() || is_tag()) {
    wp_redirect(home_url());
    exit;
}