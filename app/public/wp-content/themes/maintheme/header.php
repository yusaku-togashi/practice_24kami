<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>プレミアリーグ情報</title>
    <meta name="description" content="プレミアリーグの情報を幅広くお届けします。">

    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('assets/common/img/favicon.ico')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/top/css/top.css" />
    <?php if ( is_singular('result') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/result/css/result.css">
    <?php endif; ?>
    <?php if ( is_post_type_archive('news') ) :?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/news/css/news.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/news/css/news.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/common/js/common.js" type="text/javascript"></script>
    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="navWrapper">
            <div class="headerIcon">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/header_logo.jpg"/></a>
            </div>
            <ul class="headerNav">
                <li class="navItem">
                    <a href="/">
                        TOP
                    </a>
                </li>
                <li class="navItem">
                    <a href="/team_information">
                        チーム情報
                    </a>
                </li>
                <li class="navItem">
                    <a href="/rank">
                        順位表
                    </a>
                </li>
                <li class="navItem">
                    <a href="/inquiry">
                        お問い合わせ
                    </a>
                </li>
                <li class="navItem">
                <?php get_search_form(); ?>
                </li>
            </nav>
        </div>
        <div class="headerMv">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top_mv.png"/>
            <h1>プレミアリーグ情報</h1>
        </div>
        <Ul class="breadcrumb">
            <li class="breadcrumbItem"><a href="/">TOP</a></li>
            <?php if(is_front_page()) { ?>
            <?php } elseif (is_archive()) { ?>
                <li class="breadcrumbItem"><?php post_type_archive_title(); ?></li>
            <?php } else { ?>
                <li class="breadcrumbItem"><?php the_title(); ?></li>
            <?php } ?>    
        </Ul>
    </header>