<?php get_header(); ?>
<main class="main">
  <div class="container">
    <section class="page-header">
      <h2 class="page-title">GALLERY</h2>
    </section>
    <div class="contents-wrap">
      <div class="post-area">
        <?php if(have_posts()): ?>
          <ul class="post-list">
            <?php 
            while(have_posts()): the_post(); 
              get_template_part('parts', 'archive-gallery');
            endwhile;
            ?>
          </ul>
        <?php else: ?>
          <p>記事はありません。</p>
        <?php endif; ?>

        <?php wp_pagenavi(); ?>
      </div>
      <?php get_sidebar('gallery'); ?>
    </div>
  </div> <!-- /.container -->
</main>
<?php get_footer(); ?>
