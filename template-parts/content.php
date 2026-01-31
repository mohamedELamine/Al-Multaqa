<?php if (!defined('ABSPATH')) exit; ?>
<article class="alm-post-card">
    <?php if (has_post_thumbnail()) : ?>
        <div class="alm-post-thumb">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alm-medium'); ?></a>
        </div>
    <?php endif; ?>
    <div class="alm-post-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="alm-btn alm-btn-primary">اقرأ المزيد</a>
    </div>
</article>
