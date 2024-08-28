<?php get_header(); ?>

<div class="main">
    <div class="menu">
        <h2 class="menu__title">
            <?php if(is_month()): ?>
                <?php echo get_the_date('Y年n月');?>
            <?php else: ?>
                <?php single_term_title(); ?>
            <?php endif; ?>
        </h2>
        <?php if(have_posts()):?>
            <?php
                while(have_posts()): 
                    the_post();
                ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post__article' );?>>
            <a href="<?php the_permalink();?>" class="item-link">
                <div class="post__eyecatch">
                    <?php if (has_post_thumbnail()):?>
                        <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/20200501_noimage.png" alt="No Image">
                    <?php endif; ?>
                </div>
                <div class="post__title">
                    <h3><?php the_title() ;?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30 , '...');?></p>
                </div>
                <ul class="meta">
                    <li class="post__category"><?php the_category(',');?></li>
                    <li class="post__date">
                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                    </li>
                </ul>
            </a>
        </article>
            <?php endwhile;?>
        <?php endif;?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>