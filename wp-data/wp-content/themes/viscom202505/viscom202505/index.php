<?php get_header(); ?>

    <!------------------------------------------------------------ main -->
    <main class="main">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>

      <div class="mainVisual">
        <?php if(is_page('privacy')): ?>
            <h2 date-title="Privacy Policy" class="page-title en"><?php the_title(); ?></h2>
          <?php else: ?>
            <h2 date-title="<?php echo ucwords($post->post_name); ?>" class="page-title en"><?php the_title(); ?></h2>
        <?php endif; ?>
      </div>

      <div class="contents-wrap">
        <?php if(is_page('privacy')) :?>
            <div class="privacy-wrap"><?php the_content(); ?></div>
          <?php else: ?>
            <?php the_content(); ?>
        <?php endif; ?>
      </div>

      <?php endwhile; ?>
     <?php endif; ?>
    </main>
<?php
get_footer();