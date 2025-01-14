<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="icon"  href="./img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    </head>
    <body>
        <header class="header wrapper">
        <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $tag; ?> class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="Profile">
      </a>
    </<?php echo $tag; ?>>

    <nav>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/#bicycle')); ?>">Bicycle</a></li>
      </ul>
    </nav>
        </header>
