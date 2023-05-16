<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ①基本的metaタグ -->
    <!-- 文字コードの指定 -->
    <meta charset="utf-8">
    <!-- IEで常に標準モードで表示させる -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- viewport(レスポンシブ対応) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 電話番号の自動リンク化を無効 -->
    <meta name="format-detection" content="telephone=no">

    <!-- ②SEO対策の補助的措置 -->
    <!-- サイトのタイトル -->
    <title>ストライブ株式会社 | LEDビジョンメーカー</title>
    <!-- キーワード -->
    <meta name="keywords" content="LED,LEDビジョン">
    <!-- サイトの説明 -->
    <meta name="description" content="私たちは自社で製造した最高基準の品質をもつLEDビジョンを提供しています。屋内 / 屋外広告、舞台展示、スポーツスタジアムのスコアボード等、世界中の様々な場面で活用されています。">
    <!-- 重複するURLを一本化 -->
    <link rel="canonical" href="">

    <!-- ③SNS対策 -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="urlが入ります">
    <meta property="fb:app_id" content="AppID">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="Summary Card">
    <meta name="twitter:site" content="">

    <!-- ④その他の指定 -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- faviconの指定 -->
    <link rel="shortcut icon" href="./favicon.ico">
    <!-- 外部のCSSファイル -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Zen+Kaku+Gothic+New:wght@400;500;700;900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header class="header">
        <div class="header-inner">
            <div class="header-logoArea">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strive-logo.png" alt="ロゴ" class="header-logo__img">
                </a>
            </div>
            <div class="header-navArea">
                <nav class="header-nav">
                    <ul class="header-ul">
                        <li class="header-li">
                            <a href="<?php echo esc_url(home_url( 'about' )); ?>" class="header-li__item">LEDについて</a>
                        </li>
                        <li class="header-li">
                            <a href="<?php echo esc_url(home_url( 'product' )); ?>" class="header-li__item">製品一覧</a>
                        </li>
                        <li class="header-li">
                            <a href="<?php echo esc_url(home_url( 'company' )); ?>" class="header-li__item">会社概要</a>
                        </li>
                        <li class="header-li">
                            <a href="<?php echo esc_url(home_url( 'contact' )); ?>" class="btn header-li__btn">
                                <span class="btn__text header-li__btnText">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /.header -->