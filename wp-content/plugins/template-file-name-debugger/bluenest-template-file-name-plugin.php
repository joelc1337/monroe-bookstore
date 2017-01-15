<?php
/*
Plugin Name: Template File Name Debugger
Plugin URI: http://bluenestdigital.com
Description: Add the name of the theme (template) file used to generate a page into the page's source as an html comment. Useful for seeing what template file generated a page, and if header, footer, and sidebar files were included.
Version: 0.1
Author: Bryan Mayor
Author URI: http://bluenestdigital.com
License: GPL
*/

function bluenest_sanitize_filename($fileName) {
    if($fileName == null) {
        return $fileName;
    }
    $pos = strpos($fileName, "wp-content");
    if($pos !== false) {
        $fileName = substr($fileName, $pos);
    }
    return $fileName;
}

function bluenest_template_file_name_debugger() {
    echo "<!-- TEMPLATE INFO: This page generated from template file: " . bluenest_sanitize_filename(get_page_template()) . " -->\n";

    function bnd_hook_header_loaded($name) {
        $file = $name === null ? "header.php" : "header-" . $name;
        echo "<!-- TEMPLATE INFO: This page included template file: " . bluenest_sanitize_filename($file) . " -->\n";
    }

    function bnd_hook_footer_loaded($name) {
        $file = $name === null ? "footer.php" : "footer-" . $name;
        echo "<!-- TEMPLATE INFO: This page included template file: " . bluenest_sanitize_filename($file) . " -->\n";
    }

    function bnd_hook_sidebar_loaded($name) {
        $file = $name === null ? "siderbar.php" : "siderbar-" . $name;
        echo "<!-- TEMPLATE INFO: This page included template file: " . bluenest_sanitize_filename($file) . " -->\n";
    }

    add_action('get_header', "bnd_hook_header_loaded");
    add_action('get_footer', "bnd_hook_footer_loaded");
    add_action('get_sidebar', "bnd_hook_sidebar_loaded");
}

add_action( 'after_setup_theme', 'bluenest_template_file_name_debugger' );
