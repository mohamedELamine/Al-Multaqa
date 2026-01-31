<?php
class AlMultaqa_Enqueue {
    public static function init() {
        add_action('wp_enqueue_scripts', [__CLASS__, 'scripts']);
    }

    public static function scripts() {
        wp_enqueue_style('al-multqa-fonts', 'https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&family=Cairo:wght@400;600;700&display=swap');
        wp_enqueue_style('al-multqa-style', get_stylesheet_uri(), [], '1.0.0');
        wp_enqueue_style('al-multqa-main', get_template_directory_uri() . '/assets/css/style.css', ['al-multqa-style'], '1.0.0');
        if (is_rtl()) wp_enqueue_style('al-multqa-rtl', get_template_directory_uri() . '/assets/css/rtl.css', ['al-multqa-main'], '1.0.0');
        wp_enqueue_script('al-multqa-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
        wp_localize_script('al-multqa-main', 'almData', ['ajaxUrl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('alm_nonce'), 'isRTL' => is_rtl()]);
    }
}
