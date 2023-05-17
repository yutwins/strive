<components>
<!-- .gradation-text -->
text-fill-color: transparent;
-webkit-text-fill-color: transparent; /* 切り抜いた部分は背景を表示 */
// -webkit-background-clip: text; /* テキストで切り抜く */
background: -webkit-linear-gradient(20deg, $color-blue01 0%, $base-color 50%, $base-color 100%); /* 背景色にグラデーションを指定 初期値を設定 */
background-clip: text;

<!-- section__enTitle -->
<h4 class="section__enTitle">ここにタイトル名が入ります</h4>