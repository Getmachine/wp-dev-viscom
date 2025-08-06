<?php
get_header();
?>

<main class="front-main">
  <div class="container">
    <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
?>
