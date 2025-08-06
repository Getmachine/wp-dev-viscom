<li class="post-item">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
      <div class="thumb">
        <?php the_post_thumbnail('medium'); ?>
      </div>
    <?php endif; ?>
    <div class="text">
      <h3 class="ja"><?php the_title(); ?></h3>
      <div class="date-tag">
        <time datetime="<?php the_time('Y-m-d'); ?>" class="en"><?php the_time(get_option('date_format')); ?></time>
        <?php
        $cats = get_the_category();
        if ($cats):
        ?>
          <ul class="tag-list en">
            <?php foreach ($cats as $cat): ?>
              <li><?php echo esc_html($cat->name); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </a>
</li>