<?php get_header(); ?>
<main class="main">
  <div class="container">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <section class="page-header">
          <h2 class="page-title">NEWS</h2>
        </section>
        <div class="contents-wrap">
          <div class="post-area">
            <div class="title">
              <h1><?php the_title(); ?></h1>
              <div class="date-tag">
                <time datetime="<?php the_time('Y-m-d'); ?>" class="en"><?php the_time(get_option('date_format')); ?></time>
                <?php
                $cats = get_the_category();
                if ($cats):
                ?>
                  <ul class="tag-list en">
                    <?php foreach ($cats as $cat): ?>
                      <li><?php echo $cat->name; ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>
            <?php if (has_post_thumbnail()): ?>
              <figure class="thumb">
                <?php the_post_thumbnail('full'); ?>
              </figure>
            <?php endif; ?>
            <?php the_content(); ?>
            <ul class="page-nav">
              <li><?php previous_post_link('%link', '前の記事へ'); ?></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>news/" class="to-archive">NEWS TOP</a></li>
              <li><?php next_post_link('%link', '次の記事へ'); ?></li>
            </ul>
          </div>
          <?php get_sidebar(); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>