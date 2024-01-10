<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>プレミアリーグ情報</title>
    <meta name="description" content="プレミアリーグの情報を幅広くお届けします。">

    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('assets/common/img/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common.css" />

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
                    <a href="/teaminformation">
                        チーム情報
                    </a>
                </li>
                <li class="navItem">
                    <a href="/teamrank">
                        順位表
                    </a>
                </li>
                <li class="navItem">
                    <a href="/matchresult">
                        試合結果
                    </a>
                </li>
                <li class="navItem">
                    <a href="/inquiry">
                        お問い合わせ
                    </a>
                </li>
            </nav>
        </div>
        <div class="headerMv">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top_mv.png"/>
            <h1>プレミアリーグ情報</h1>
        </div>
    </header>