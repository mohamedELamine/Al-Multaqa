<?php
class AlMultaqa_Hooks {
    public static function init() {
        add_filter('body_class', [__CLASS__, 'body_classes']);
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
    }

    public static function body_classes($classes) {
        if (is_rtl()) $classes[] = 'rtl';
        if (is_active_sidebar('sidebar')) $classes[] = 'has-sidebar';
        return $classes;
    }
}
