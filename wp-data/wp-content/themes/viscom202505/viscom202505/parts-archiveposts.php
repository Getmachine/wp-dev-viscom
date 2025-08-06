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