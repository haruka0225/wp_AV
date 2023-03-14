<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
  <!-- ワードプレスのheadタグ挿入。head終了タグの直前に記載 -->
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="head-right">
        <li>menu01</li>
        <li>menu02</li>
        <li>menu03</li>
        <li>menu04</li>
      </div>
    </div>

    <!-- ハンバーガー線-->
    <div class="burgar">
      <span class="nav_toggle">
        <i></i>
        <i></i>
        <i></i>
      </span>
      <nav class="nav">
        <ul class="nav_menu_ul">
          <li class="nav_menu_li"><a href="#">menu01</a></li>
          <li class="nav_menu_li"><a href="#">menu02</a></li>
          <li class="nav_menu_li"><a href="#">menu03</a></li>
          <li class="nav_menu_li"><a href="#">menu04</a></li>
        </ul>
      </nav>
    </div>
    <!--  ハンバーガー線ここまで-->
  </header>