<?php get_header(); ?>
<main class="main">
  <div class="container">
    <section class="page-header">
      <h2 class="page-title">ARCHIVES</h2>
    </section>
    <div class="contents-wrap">
      <div class="post-area">
        <?php if (is_date()): ?>
          <h2 class="news-title"><?php echo get_query_var('year'); ?></h2>
        <?php elseif (is_category()): ?>
          <h2 class="news-title"><?php echo get_queried_object()->name; ?></h2>
        <?php endif; ?>
        <?php if (have_posts()): ?>
          <ul class="news-list">
            <?php
            while (have_posts()): the_post();
              get_template_part('parts', 'archiveposts');
            endwhile;
            ?>
          </ul>
        <?php else: ?>
          <p>記事はありません。</p>
        <?php endif; ?>
        <?php wp_pagenavi(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div> <!-- /.container -->
</main>
<?php get_footer(); ?>