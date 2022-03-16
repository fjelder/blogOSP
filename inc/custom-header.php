<?php
function osp_custom_header_setup()
{
    $args = [
// Text color and image (empty to use none).
        "default-text-color" => "444444",
        "default-image" => get_template_directory_uri() . "/img/header_default.jpg",

// Set height and width, with a maximum value for the width.
        "height" => 1080,
        "width" => 1920,
        "max-width" => 2000,

// Support flexible height and width.
        "flex-height" => true,
        "flex-width" => true,

// Random image rotation off by default.
        "random-default" => false,

// Callbacks for styling the header and the admin preview.
        "wp-head-callback" => "",
        "admin-head-callback" => "",
        "admin-preview-callback" => "",
    ];

    add_theme_support("custom-header", $args);
}
add_action("after_setup_theme", "osp_custom_header_setup");
