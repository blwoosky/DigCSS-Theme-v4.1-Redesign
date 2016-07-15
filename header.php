<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta property="wb:webmaster" content="cd58c8394ce34e86"/>
    <meta property="qc:admins" content="55715474573336375"/>

    <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow"/>
    <?php } ?>

    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
        echo ' - page '. $paged; }
        ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico">
    <!--[if !IE]><!-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo home_url(); ?>/css/oldie.css">
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <![endif]-->


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?>


    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?a3d384bd12aa74db747bf90473a63d73";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>

<body
<?php body_class(); ?>>

<?php include (TEMPLATEPATH . '/parts/icon.php' ); ?>
<?php include (TEMPLATEPATH . '/parts/footerIcon.php' ); ?>

<div class="mt30">

    <header class="">
        <div class="wrap mainNavWrap fix">
            <div class="logo l">
                <a href="/">
                    <?php include (TEMPLATEPATH . '/parts/logo.php' ); ?>
                </a>
            </div>
            <div class="collapseMenu rel r">
                <svg viewBox="0 0 100 100" class="menuBtn abs">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use>
                </svg>
                <svg viewBox="0 0 100 100" class="closeBtn abs">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cross"></use>
                </svg>
            </div>
            <div class="fix r headerRight">
                <nav class="mainNav l">

                    <ul class="fix">
                        <li class="home"><a href="/">
                            <svg viewBox="0 0 100 100" class="icon icon-home">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-home"></use>
                            </svg>
                            <span>首页</span></a></li>
                        <li class="videos"><a class="" href="/videos">
                            <svg viewBox="0 0 100 100" class="icon icon-film">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-film"></use>
                            </svg>
                            <span>视频</span></a></li>
                        <li class="snippets"><a class="" href="/snippets">
                            <svg viewBox="0 0 100 100">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-keyboard"></use>
                            </svg>
                            <span>代码</span></a></li>
                        <li class="courses"><a class="" href="/courses">
                            <svg viewBox="0 0 100 100">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-book"></use>
                            </svg>
                            <span>课程</span></a></li>
                        <li class="guestbook"><a class="" href="/guestbook">
                            <svg viewBox="0 0 100 100">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bubbles2"></use>
                            </svg>
                            <span>留言</span></a></li>
                    </ul>
                </nav>
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="mainWrap">