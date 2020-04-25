<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="マハーバラータの模写を制作しました。">
  <title>マハーバラータ</title>


 <!-- 外部のwow.cssを読み込む -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

<!-- 外部のwow.jsを読み込む -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


  <!-- cssの読み込み -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tab.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sp.css" media="all">


    <!--  twitterカード  -->
   <meta name="twitter:card" content="summary_large_image" /> <!--①-->
   <meta name="twitter:site" content="@masashi04353004" /> <!--②-->
   <meta property="og:url" content="https://masashiii.com/mahabarata" /> <!--③-->
   <meta property="og:title" content="実案件の模写" /> <!--④-->
   <meta property="og:description" content="東京フリーランスさんが有料で提供されているコーディング × WordPressテーマ化の練習素材で、実際に実案件に使用されたサイトを模写しました。" /> <!--⑤-->
   <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/mahabarata.png" /> <!--⑥-->


    <?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
<div class="wrap">

  <!-- header -->

<header class="pc">
  <div class="inner">

    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>"><p class="txtxs">トップ</p>
      <p class="txtl">TOP</p></a>
    </div>
    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>/news"><p class="txtxs">ニュース</p>
      <p class="txtl">NEWS</p></a>
    </div>
    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>/story"><p class="txtxs">ストーリー</p>
      <p class="txtl">STORY</p></a>
    </div>
    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>/comments"><p class="txtxs">著名人コメント</p>
      <p class="txtl">COMMENTS</p></a>
    </div>
    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>/cast"><p class="txtxs">キャスト</p>
      <p class="txtl">CAST</p></a>
    </div>
    <div class="header-list">
      <a href="<?php echo esc_url( home_url() ); ?>/inquiry"><p class="txtxs">問い合わせ</p>
      <p class="txtl">INQUIRY</p></a>
    </div>

  </div>
</header>




<header role="banner" class="sp">
  <!-- ハンバーガーボタン -->
  <button type="button" class="drawer-toggle drawer-hamburger">
      
      <!-- 中身は自由 -->
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <!-- ナビゲーションの中身 -->
  <nav class="drawer-nav" role="navigation">
    <ul class="drawer-menu">
      <li><a class="drawer-menu-item" href="top">TOP</a></li>
      <li><a class="drawer-menu-item" href="news">NEWS</a></li>
      <li><a class="drawer-menu-item" href="story">STORY</a></li>
      <li><a class="drawer-menu-item" href="comments">COMMENTS</a></li>
      <li><a class="drawer-menu-item" href="cast">CAST</a></li>
      <li><a class="drawer-menu-item" href="inquiry">INQUIRY</a></li>
    </ul>
  </nav>
</header>