<?php
class AlMultaqa_Setup {
    public static function init() {
        add_action('after_setup_theme', [__CLASS__, 'setup']);
        add_action('widgets_init', [__CLASS__, 'sidebars']);
    }

    public static function setup() {
        load_theme_textdomain('al-multqa', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo', ['height' => 100, 'width' => 400, 'flex-height' => true, 'flex-width' => true]);
        add_theme_support('woocommerce');
        register_nav_menus(['primary' => __('Primary Menu', 'al-multqa'), 'footer' => __('Footer Menu', 'al-multqa')]);
        add_image_size('alm-medium', 800, 600, true);
        add_image_size('alm-large', 1200, 800, true);
        $GLOBALS['content_width'] = 1200;
    }

    public static function sidebars() {
        register_sidebar(['name' => __('Sidebar', 'al-multqa'), 'id' => 'sidebar', 'description' => __('Main sidebar', 'al-multqa'), 'before_widget' => '<aside>', 'after_widget' => '</aside>', 'before_title' => '<h3>', 'after_title' => '</h3>']);
        register_sidebar(['name' => __('Footer 1', 'al-multqa'), 'id' => 'footer-1', 'description' => __('Footer column 1', 'al-multqa'), 'before_widget' => '<aside>', 'after_widget' => '</aside>', 'before_title' => '<h4>', 'after_title' => '</h4>']);
        register_sidebar(['name' => __('Footer 2', 'al-multqa'), 'id' => 'footer-2', 'description' => __('Footer column 2', 'al-multqa'), 'before_widget' => '<aside>', 'after_widget' => '</aside>', 'before_title' => '<h4>', 'after_title' => '</h4>']);
        register_sidebar(['name' => __('Footer 3', 'al-multqa'), 'id' => 'footer-3', 'description' => __('Footer column 3', 'al-multqa'), 'before_widget' => '<aside>', 'after_widget' => '</aside>', 'before_title' => '<h4>', 'after_title' => '</h4>']);
    }
}
