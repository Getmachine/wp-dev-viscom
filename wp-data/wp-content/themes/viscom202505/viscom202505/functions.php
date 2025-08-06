<?php
// テーマのセットアップ
function theme_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ有効化
}
add_action('after_setup_theme', 'theme_setup');

// CSSとJSの読み込み
function add_files()
{
  // CSS
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), null, 'all');
  wp_enqueue_style('animation', get_template_directory_uri() . '/css/animation.css', array(), null, 'all');
  wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, 'all');
  wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick/slick-theme.css', array(), null, 'all');
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null, 'all');

  // jQuery 全ページでCDN版（WordPress同梱版は使わない）
  wp_deregister_script('jquery'); // 既存のjQuery登録解除
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);

  // JS
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js', array(), null, true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'slick-js', 'gsap', 'swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'add_files');

// 最新記事3件表示ショートコード
function show_latest_posts_shortcode()
{
  ob_start();
  get_template_part('latest-posts'); // template-parts/latest-posts.php を呼び出す
  return ob_get_clean();
}
add_shortcode('latest_posts', 'show_latest_posts_shortcode');


add_action('wp_footer', function () {
  echo '<!-- swiper-js debug check -->';
});
