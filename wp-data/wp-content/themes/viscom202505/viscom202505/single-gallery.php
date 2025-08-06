<?php get_header(); ?>
<main class="main">
    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <section class="page-header">
                    <h2 class="page-title">GALLERY</h2>
                </section>
                <div class="contents-wrap">
                    <div class="post-area">
                        <?php the_content(); ?>
                        <ul class="page-nav">
                            <li><?php previous_post_link('%link', '前の記事へ'); ?></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>gallery/" class="to-archive">GALLERY TOP</a></li>
                            <li><?php next_post_link('%link', '次の記事へ'); ?></li>
                        </ul>
                    </div>
                    <?php get_sidebar('gallery'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
