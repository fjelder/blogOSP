<?php
function osp_setup()
{
    // load style and fonts
    function enqueue_function()
    {
        wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/style.css', true);
        wp_enqueue_style('interVar', get_template_directory_uri() . '/fonts/inter/inter.css', $deps = array(), $ver = null, $media = 'all');
    }
    add_action('wp_enqueue_scripts', 'enqueue_function', 10);
    //register menu
    register_nav_menu('primary', __('Primary Menu', 'osp'));
    function myMenu_liClass($classes, $item, $args)
    {
        if (property_exists($args, 'myMenu_liClass')) {
            $classes[] = $args->myMenu_liClass;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'myMenu_liClass', 1, 3);

    function myMenu_aClass($attributes, $item, $args)
    {
        if (property_exists($args, 'myMenu_aClass')) {
            $attributes['class'] = $args->myMenu_aClass;
        }
        return $attributes;
    }
    add_filter('nav_menu_link_attributes', 'myMenu_aClass', 1, 3);

	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'e6e6e6',
		)
	);
	
    
}
add_action('after_setup_theme', 'osp_setup');

require get_template_directory() . '/inc/custom-header.php';

//widget
function osp_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'Akapit wejściowy strony głównej',
			'id'            => 'sidebar-1',
			'description'   => 'Akapit powitalny w części środkowej',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'osp_widgets_init' );

require get_template_directory() . '/inc/entry_header_widget.php';