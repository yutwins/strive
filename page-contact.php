<?php get_header(); ?>

    <section class="page-top">
        <div class="inner page-top__inner">
            <div class="page-top__titleArea pageCompany__titleArea">
                <h1 class="page-top__title gradation-text">CONTACT</h1>
                <p class="page-top__subTitle">お問い合わせ</p>
            </div>
        </div>
    </section>
    <!-- /.page-top -->

    <div class="page-container">
        <div class="page-contents">
            <section class="section pageContact">
                <div class="inner pageContact-inner">
                    <form action="" class="contact-form">
                        <dl class="contact-form__dl">
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-name">お名前</label></dt>
                                <dd class="contact-form__input">
                                    <input id="your-name" type="text" placeholder="お名前">
                                </dd>
                            </div>
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-furigana">会社名</label></dt>
                                <dd class="contact-form__input">
                                    <input id="your-company" type="text" placeholder="会社名">
                                </dd>
                            </div>
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-email">メールアドレス</label></dt>
                                <dd class="contact-form__input"><input id="your-email" type="email"
                                        placeholder="メールアドレス"></dd>
                            </div>
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-number">電話番号</label></dt>
                                <dd class="contact-form__input"><input id="your-number" type="text"
                                        placeholder="電話番号"></dd>
                            </div>
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-select">お問い合わせの目的</label></dt>
                                <dd class="contact-form__input">
                                    <select name="example" id="" class="contact-form__select">
                                        <option class="contact-form__option" value="" disabled selected hidden>ご選択ください</option>
                                            <option class="contact-form__option" value="相続">相続</option>
                                            <option class="contact-form__option" value="遺言">遺言</option>
                                            <option class="contact-form__option" value="終活">終活</option>
                                            <option class="contact-form__option" value="税金">税金</option>
                                            <option class="contact-form__option" value="お知らせ">お知らせ</option>
                                            <option class="contact-form__option" value="家族信託">家族信託</option>
                                            <option class="contact-form__option" value="その他">その他</option>
                                    </select>
                                </dd>
                            </div>
                            <div class="contact-form__row">
                                <dt class="contact-form__label"><label for="your-message">お問い合わせ内容</label></dt>
                                <dd class="contact-form__input">
                                    <textarea name="" id="your-message" placeholder="お問い合わせ内容を入力してください。"></textarea>
                                </dd>
                            </div> 
                        </dl>
                        <div class="contact-form__submit">
                            <input type="submit" value="送信する">
                        </div>
                    </form>                
                </div>
            </section>
            <!-- /.section pageContact -->
<?php get_footer(); ?>