<!DOCTYPE html>
<html lang="ja">
<head>
    <title>KNOAGEO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="knoageo portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットcss -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <!--font awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/all.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet" />
    <!-- slick(カルーセル) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/themestyle.css" />
    <?php wp_head(); ?>
  </head>
  <body>
<!--ヘッダーここから-->
  <header>
    <!-- ================================スマホ用メニューボタン================================-->
    <div class="navarea">
   <a href="/" id="logo">
  <div class="logoarea"><img src="<?php echo get_template_directory_uri(); ?>/image/KNOAGEOロゴ1.png" alt="トップページに戻る" /></div></a>

 <!-- スマホ用メニューボタン -->
<div class="hamburger-menu">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/白樺.png" alt="ナビゲーションメニューを開く" onclick="document.getElementById('nav-sp').style.display = 'block'" ></a>
</div>
</div>

<nav id="nav-sp">
  <h1 class="title">メニュー</h1>
  <hr class="light-mainbar" />
  <div class="close">
  <img src="<?php echo get_template_directory_uri(); ?>/image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
  </div>
  <?php get_search_form(); ?>
  <div class="category">カテゴリー</div>
    <a class="menu" href="<?php echo home_url(); ?>/picture" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真</a>
    <a class="menu" href="<?php echo home_url(); ?>/illustration" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラスト</a>
    <!--
    <a class="menu" href="<?php echo home_url(); ?>/weblog" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト作例</a>
      -->
    <!--
  <div class="category">その他関連</div>
    <a class="menu" href="<?php echo home_url(); ?>/library/#other" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
    <a class="menu" href="<?php echo home_url(); ?>/library/#other" onclick="document.getElementById('nav-sp').style.display='none'">＊制作サイト</a>
      -->
  <div class="category">自己紹介</div>
    <a class="menu" href="<?php echo home_url(); ?>/profile" onclick="document.getElementById('nav-sp').style.display = 'none'">＊自己紹介をよりくわしく</a>
    <a href="<?php echo home_url(); ?>/library" onclick="document.getElementById('nav-sp').style.display = 'none'"><div class="category">作例ライブラリ<br>※Comming Soon</div></a>
    <!-- <a class="menu" href="<?php echo home_url(); ?>/library/picturelib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊写真ライブラリ</a> -->
    <!-- <a class="menu" href="<?php echo home_url(); ?>/library/picturelib#teiten" onclick="document.getElementById('nav-sp').style.display = 'none'">∟TEITEN（定点観測）</a> -->
    <!-- <a class="menu" href="<?php echo home_url(); ?>/illustlib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊イラストライブラリ</a> -->
    <!--
    <a class="menu" href="<?php echo home_url(); ?>/webloglib" onclick="document.getElementById('nav-sp').style.display = 'none'">＊Webサイト</a>
    <a class="menu" href="<?php echo home_url(); ?>/blog" onclick="document.getElementById('nav-sp').style.display = 'none'">＊ブログ</a>
    <a class="menu" href="<?php echo home_url(); ?>/originalsite" onclick="document.getElementById('nav-sp').style.display = 'none'">＊制作サイト</a>-->
  <div class="category">お問い合わせ</div>
    <a class="menu" href="<?php echo home_url(); ?>/contact" onclick="document.getElementById('nav-sp').style.display = 'none'">∟お問い合わせフォームへ</a>
    <div class="empty2"></div> 
 </nav>

 <!-- ================================PC用メニューボタン================================-->
 <div class="navarea-pc">
   <a href="/" id="logo">
  <div class="logoarea"><img src="<?php echo get_template_directory_uri(); ?>/image/KNOAGEOロゴ1.png" alt="トップページに戻る" /></div></a>

 <div class="menu-bar">
    <div class="hamburger-menu-pc">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/検索アイコン.png" alt="検索メニューを開く" onclick="document.getElementById('nav-pc-search').style.display = 'block'" >検索</a>
    </div>
    <div class="hamburger-menu-pc">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/白樺.png" alt="ナビゲーションメニューを開く" onclick="document.getElementById('nav-pc').style.display = 'block'" >メニュー</a>
    </div>
    </div>
  </div>
<!-- PC用検索-->
<nav id="nav-pc-search">
    <h1 class="title-3">検索</h1>
    <hr class="light-mainbar" />
        <div class="close">
    <img src="<?php echo get_template_directory_uri(); ?>/image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-pc-search').style.display = 'none'">
    </div>
    <?php get_search_form(); ?>
    </div>
</nav>
</div> <!--  navarea閉じ  -->
<!-- PC用menu-->
<nav id="nav-pc">
  <h1 class="title-2pc">メニュー</h1>
    <div class="close">
       <img src="<?php echo get_template_directory_uri(); ?>/image/白樺×ボタン.png" alt="画面を閉じる" onclick="document.getElementById('nav-pc').style.display = 'none'">
    </div>
    <hr class="light-mainbar" />
  <div class="category">カテゴリー</div>
  <a class="menu" href="<?php echo home_url(); ?>/picture" onclick="document.getElementById('nav-pc').style.display = 'none'">＊写真</a>
  <a class="menu" href="<?php echo home_url(); ?>/illustration" onclick="document.getElementById('nav-pc').style.display = 'none'">＊イラスト</a>
  <!--
  <a class="menu" href="<?php echo home_url(); ?>/weblog" onclick="document.getElementById('nav-pc').style.display = 'none'">＊Webサイト作例</a>
 <div class="category">その他関連</div>
 <a class="menu" href="<?php echo home_url(); ?>/library/#blog" onclick="document.getElementById('nav-pc').style.display = 'none'">＊ブログ</a>
 <a class="menu" href="<?php echo home_url(); ?>/library/#originalsite" onclick="document.getElementById('nav-pc').style.display='none'">＊制作サイト</a>-->
 <div class="category">自己紹介</div>
 <a class="menu" href="<?php echo home_url(); ?>/profile" onclick="document.getElementById('nav-pc').style.display = 'none'">＊自己紹介をよりくわしく</a>
 <div class="category">作例ライブラリ<br>※Comming Soon<a href="<?php echo home_url(); ?>/library" onclick="document.getElementById('nav-sp').style.display = 'none'"></div>
 <!-- <a class="menu" href="<?php echo home_url(); ?>/library/picturelib" onclick="document.getElementById('nav-pc').style.display = 'none'">＊写真</a> -->
 <!--
 <a class="menu" href="<?php echo home_url(); ?>/library/picturelib#teiten" onclick="document.getElementById('nav-pc').style.display = 'none'">∟TEITEN（定点観測）</a>-->
 <!-- <a class="menu" href="<?php echo home_url(); ?>/illustlib" onclick="document.getElementById('nav-pc').style.display = 'none'">＊イラスト</a> -->
 <!--
 <a class="menu" href="<?php echo home_url(); ?>/webloglib" onclick="document.getElementById('nav-pc').style.display = 'none'">＊Webサイト</a>
 <a class="menu" href="<?php echo home_url(); ?>/blog" onclick="document.getElementById('nav-pc').style.display = 'none'">＊ブログ</a>
 <a class="menu" href="<?php echo home_url(); ?>/originalsite" onclick="document.getElementById('nav-pc').style.display = 'none'">＊制作サイト</a>-->
 <div class="category">お問い合わせ</div>
 <a class="menu" href="<?php echo home_url(); ?>/contact" onclick="document.getElementById('nav-pc').style.display = 'none'">∟お問い合わせフォームへ</a>
 <div class="empty2"></div> 
</nav>
</div> <!-- PC版　ナビゲーションメニュー閉じ※スマホ非表示ここまで--> 

 <hr class="light-topbar" />
</header>