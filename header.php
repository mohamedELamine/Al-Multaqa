<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="alm-header">
    <div class="alm-container alm-header-inner">
        <a href="<?php echo home_url(); ?>" class="alm-logo">المُلتقى</a>
        <nav class="alm-nav"><?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'alm-menu']); ?></nav>
    </div>
</header>
