<?php get_header(); ?>
<div class="alm-container alm-page">
    <main class="alm-content">
        <?php while (have_posts()) : the_post(); ?>
            <article class="alm-page-entry">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </main>
    <?php if (is_active_sidebar('sidebar')) : ?>
        <aside class="alm-sidebar"><?php dynamic_sidebar('sidebar'); ?></aside>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
