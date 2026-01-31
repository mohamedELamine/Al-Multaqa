<?php
if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/hooks.php';

AlMultaqa_Setup::init();
AlMultaqa_Enqueue::init();
AlMultaqa_Hooks::init();
