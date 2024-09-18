<div class="side-bar--right">
    <div class="menu">
        <div class="circle-image">
            <img src="<?php echo esc_url(home_url()); ?>/wp-content/themes/trbg/assets/img/1711057371028.jpg" alt="">
        </div>
        <h2 class="menu__title">Name Name</h2>
        <div class="prof__text">
            <p>プロフィールテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
    </div>

    <div class="menu">
    <h2 class="menu__title">Ranking</h2>
    <?php
function update_post_views() {
    if (is_single()) {
        $post_id = get_the_ID();
        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);
        if ($count == '') {
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
        }
    }
}
add_action('wp_head', 'update_post_views');
?>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    );
    $popular_posts = new WP_Query($args);
    
    if ($popular_posts->have_posts()) :
        $rank = 1;
        while ($popular_posts->have_posts()) : $popular_posts->the_post();
            $views = get_post_meta(get_the_ID(), 'post_views_count', true);
    ?>
        <div class="menu__box">
            <div class="post__eyecatch">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="No Image">
                <?php endif; ?>
            </div>
            <div class="post__title">
                <p><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></p>
            </div>
            <div class="post__views">閲覧数: <?php echo $views ? $views : '0'; ?></div>
        </div>
    <?php
        $rank++;
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>記事がありません。</p>';
    endif;
    ?>
</div>

    <div class="menu">
        <h2 class="menu__title">Archive</h2>
        <div class="menu__archive">
            <?php
            $args = array(
                'type' => 'monthly',
                'limit' => 15,
                'format' => 'html',
                'before' => '<div class="menu__archive--list>',
                'after' => '</div>',
                'show_post_count' => true,
                'echo' => 0,
                'order' =>'DESC',
                'post_type' => 'post'
            );
            $archives = wp_get_archives($args);

            $archives = preg_replace('/ \((\d+)\)/', ')<span class="archive-count">($1)</span>', $archives);

            echo $archives;
            ?>
            <!-- <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div>
            <div class="menu__archive--list">XXXX年XX月(XX)</div> -->
        </div>
    </div>

</div>