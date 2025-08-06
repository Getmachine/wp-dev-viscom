<aside class="sidebar-area">
  <h2>LATEST POST</h2>
  <ul>
    <?php
    $latest_posts = new WP_Query([
      'post_type' => 'gallery', // ← カスタム投稿「gallery」に合わせてる
      'posts_per_page' => 3,
    ]);
    if ($latest_posts->have_posts()):
      while ($latest_posts->have_posts()): $latest_posts->the_post();
    ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </ul>
</aside>