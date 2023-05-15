
<Todo>
・heroセクションの四角形アニメーション
・missionセクションの文字グラデーションの調整
・トップページのセクションタイトル（英語）の位置を調整する
・グラデーションテキスト部分のクラスを共通にする！
・footerのスマホ版スタイル
・Aboutページの下部、グレー背景色を正確なカラーに変更する



<memo>
・ヘッダーの挙動について
    ・fixed??→ fixed
・グラデーションのテキスト部分は画像でもいいのか？

<components>
・section__title

<!-- .gradation-text -->
text-fill-color: transparent;
-webkit-text-fill-color: transparent; /* 切り抜いた部分は背景を表示 */
// -webkit-background-clip: text; /* テキストで切り抜く */
background: -webkit-linear-gradient(20deg, $color-blue01 0%, $base-color 50%, $base-color 100%); /* 背景色にグラデーションを指定 初期値を設定 */
background-clip: text;

<!-- section__enTitle -->
<h4 class="section__enTitle">ここにタイトル名が入ります</h4>