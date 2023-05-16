<?php get_header(); ?>

    <section class="page-top">
        <div class="inner page-top__inner">
            <div class="page-top__titleArea pageCompany__titleArea">
                <h1 class="page-top__title gradation-text">CONTACT</h1>
                <p class="page-top__subTitle">お問い合わせ</p>
            </div>
        </div>
        <div class="hero-floatings">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square01.png" alt="ブロック" class="hero-floating hero-floating01">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square02.png" alt="ブロック" class="hero-floating hero-floating02">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square03.png" alt="ブロック" class="hero-floating hero-floating03">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square04.png" alt="ブロック" class="hero-floating hero-floating04">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square05.png" alt="ブロック" class="hero-floating hero-floating05">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square06.png" alt="ブロック" class="hero-floating hero-floating06">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square02.png" alt="ブロック" class="hero-floating hero-floating07">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strive-dot-square02.png" alt="ブロック" class="hero-floating hero-floating08">
        </div>
    </section>
    <!-- /.page-top -->

    <div class="page-container">
        <div class="page-contents">
            <section class="section pageContact">
                <div class="inner pageContact-inner">
                <?php echo do_shortcode('[contact-form-7 id="16" title="お問い合わせ"]'); ?>
                </div>
            </section>
            <!-- /.section pageContact -->
<?php get_footer(); ?>