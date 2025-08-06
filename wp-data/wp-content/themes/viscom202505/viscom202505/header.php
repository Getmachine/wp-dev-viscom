<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>VISCOM</title>
  <link rel="icon" href="img/favicon-vis.png" />
</head>

<body <?php body_class(); ?> cz-shortcut-listen="true">



  <?php wp_head(); ?>

  <!------------------------------------------------------------ header -->
  <header id="header" class="header">
    <div class="inr">
      <h1 class="title"><a href="<?php echo esc_url(home_url("/")) ?>">VISUAL COMMUNICATION</a>
      </h1>
      <div class="gnav">
        <ul class="gnav-list">
          <li>
            <a href="<?php echo esc_url(home_url('/news/')); ?>" <?php if (is_page('news')) echo 'class="current"'; ?>>
              NEWS
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/works/')); ?>" <?php if (is_page('works')) echo 'class="current"'; ?>>
              WORKS
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" <?php if (is_page('gallery')) echo 'class="current"'; ?>>
              GALLERY
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" <?php if (is_page('contact')) echo 'class="current"'; ?>>
              CONTACT
            </a>
          </li>
        </ul>
        <div class="ham"><span></span><span></span><span></span></div>
      </div>
    </div>
  </header>
  <div class="menu-box">
    <div class="inr">
      <ul>
        <li>
          <a href="<?php echo esc_url(home_url('/news/')); ?>" <?php if (is_page('news')) echo 'class="current"'; ?>>
            NEWS
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/works/')); ?>" <?php if (is_page('works')) echo 'class="current"'; ?>>
            WORKS
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/gallery/')); ?>" <?php if (is_page('gallery')) echo 'class="current"'; ?>>
            GALLERY
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" <?php if (is_page('contact')) echo 'class="current"'; ?>>
            CONTACT
          </a>
        </li>
      </ul>
    </div>
  </div>