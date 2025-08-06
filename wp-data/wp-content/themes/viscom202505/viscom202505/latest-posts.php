<ul class="latest-posts">
<?php
  $latest_posts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3
  ]);
  if ($latest_posts->have_posts()):
    while ($latest_posts->have_posts()): $latest_posts->the_post();
?>
  <li class="post-item">
    <a href="<?php the_permalink(); ?>">
        <div class="date-tag">
          <time datetime="<?php the_time('Y-m-d'); ?>" class="en"><?php the_time(get_option('date_format')); ?></time>
          <?php 
          $cats = get_the_category();
          if($cats):
          ?>
          <ul class="tag-list">
          <?php foreach($cats as $cat): ?>
            <li><?php echo $cat->name; ?></li>
          <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <h3><?php the_title(); ?></h3>
    </a>
  </li>
<?php
    endwhile;
    wp_reset_postdata();
  endif;
?>
</ul>
