<?php get_header(); ?>

<!-- main contents -->
<div class="main">
  <?php
  // カスタムクエリを作成
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $custom_query = new WP_Query($args);

  // カスタムループ開始
  if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
  ?>
    <div class="main__article">
      <div class="main__title">
        <h2 class="main__title--text"><?php the_title(); ?></h2>
        <ul class="meta">
          <li class="meta__day"><?php echo get_the_date('Y/m/d'); ?></li>
          <li class="meta__category"><?php echo get_the_category_list(', '); ?></li>
        </ul>
      </div>
      <div class="eyecatch">
        <?php 
        if (has_post_thumbnail()) :
          the_post_thumbnail('large');
        else :
        ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="No Image">
        <?php endif; ?>
      </div>
      <div>
        <p><?php echo wp_trim_words(get_the_content(), 55, '...'); ?></p>
      </div>
      <a href="<?php the_permalink(); ?>" class="main__article--link">
        Read More
      </a>
    </div>
  <?php
    endwhile;
    
    // ページネーション
    $big = 999999999; // need an unlikely integer
    echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $custom_query->max_num_pages,
      'prev_text' => __('前へ'),
      'next_text' => __('次へ'),
    ));

    // クエリのリセット
    wp_reset_postdata();

  else :
  ?>
    <p>投稿が見つかりません。</p>
  <?php
  endif;
  ?>
</div>

<!-- sidebar-right -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>