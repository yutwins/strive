<footer class="footer">
        <inner class="footer-inner">
            <div class="footer-logoArea">
                <a href="#" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strive-logo.png" alt="ロゴ" class="footer-logo__img">
                </a>
            </div>
            <div class="footer-textArea">
                <p class="footer-companyName">ストライブ株式会社</p>
                <p class="footer-companyAddress">〒542-0073 大阪府大阪市中央区日本橋1-2-6 日本橋河辺ビル5F</p>
                <p class="footer-companyContact">Tel.06-6484-871　Fax.06-6484-8717</p>
                <nav class="footer-nav">
                    <ul class="footer-ul">
                        <li class="footer-list">
                            <a href="" class="footer-list__item">LEDについて</a>
                        </li>
                        <li class="footer-list">
                            <a href="" class="footer-list__item">製品一覧</a>
                        </li>
                        <li class="footer-list">
                            <a href="" class="footer-list__item">会社概要</a>
                        </li>
                        <li class="footer-list">
                            <a href="" class="footer-list__item">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </inner>
        <p class="copyright">© strive inc. All rights reserved.</p>
    </footer>
    <!-- /.footer -->
    
    <?php if (!is_front_page()) : ?>
    </div>
        <!-- /.page-contents -->
        
    </div>
    <!-- /.page-container -->
    <?php endif; ?>

    <?php wp_footer(); ?>
    </body>
</html>