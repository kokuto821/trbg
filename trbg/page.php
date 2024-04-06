<?php get_header(); ?>

<div class="main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="main__title">
                    <h2 class="main__title--text">
                        <?php the_title(); ?>
                    </h2>
                    <ul class="meta">
                        <li class="meta__category"><?php the_category(',');?></li>
                    </ul>
                </div>
                <?php if (has_post_thumbnail()): ?>
                    <div class="eyecatch">
                        <?php the_post_thumbnail('page_eyecatch'); ?>
                    </div>
                <?php else:?>
                    <div class="eyecatch">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/IMG_20240227_164515.jpg" alt="">
                    </div>
                <?php endif; ?>

                <div class="main__article">
                    <div class="">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>