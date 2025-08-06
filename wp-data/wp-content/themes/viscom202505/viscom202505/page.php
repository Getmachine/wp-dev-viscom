<?php
get_header();
?>

<main class="main">
  <div class="container">

    <div class="page-header">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </div>

    <div class="contents-wrap">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      endif;
      ?>
    </div>

  </div>
</main>

<?php
get_footer();
?>
