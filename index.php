<?php get_header(); ?>
<div class="alm-container">
    <main class="alm-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content'); ?>
        <?php endwhile; the_posts_pagination(); else : ?>
            <p><?php _e('Nothing found', 'al-multqa'); ?></p>
        <?php endif; ?>
    </main>
    <?php if (is_active_sidebar('sidebar')) : ?>
        <aside class="alm-sidebar"><?php dynamic_sidebar('sidebar'); ?></aside>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
