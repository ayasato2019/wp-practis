<?php session_start(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/page.css">
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>

  <header class="l-header">
    <div class="l-header__container">
      <a href="/" class="p-header__logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/logo.png"
          alt="<?php echo $image['alt']; ?>" class="">
      </a>
      <div class="p-header__right">
      <?php if (isset($_SESSION['user_id'])) { ?>
        <a class="p-header__login p-header__link-close" href="/member/mypage.php"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ico_login.svg" alt="" class="p-header__login p-header__login-close"></a>
      <?php } else { ?>
        <a class="p-header__login p-header__link-close u-guest" href="/member/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/button.svg" alt="" class="p-header__login p-header__login-close"></a>
      <?php } ?>
        <div class="p-header__menu">
          <div class="p-header__menu-icon">
            <span class="m-top"></span>
            <span class="m-middle"></span>
            <span class="m-bottom"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="p-header__menu-items">
    <ul>
      <li class="p-header__menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#news">NEWS<span>お知らせ</span></a></li>
      <li class="p-header__menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#about">ABOUT<span>東庄町について</span></a></li>
      <li class="p-header__menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#service">SERVICE<span>婚活サービスについて</span></a></li>
      <li class="p-header__menu-item"><a href="<?php echo esc_url(home_url('/')); ?>#faq">FAQ<span>よくある質問</span></a></li>
    </ul>
    <!-- <div class="c-btn p-header__btn">
      <a href="">お問い合わせはこちら</a>
    </div> -->
  </div>
  </header>


