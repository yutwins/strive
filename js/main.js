// ロゴslider  
jQuery(document).ready(function(){
    jQuery('.slider').slick({
      autoplay: true, //自動でスクロール
      autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
      speed: 6000, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 3, //表示するスライドの数
      slidesToScroll: 1, //一度にスクロールするスライド数を設定
      infinite: true, //スライドのループを有効に設定
      swipe: false, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      variableWidth: true, // 幅の違う画像の高さを揃えて表示
      useTransform: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      waitForAnimate: false,
      responsive: [
        {
          breakpoint: 750,
          settings: {
            slidesToShow: 2, //画面幅750px以下でスライド3枚表示
            speed: 5000, //スライドが流れる速度を設定
          }
        }
      ]
    });
    jQuery('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
      jQuery('.slider').slick('slickPlay');
    });
});


// ナビゲーションアニメーション
document.addEventListener("DOMContentLoaded", function () {
  // IDが"navbar"の要素を取得
  const navBar = document.getElementById("navbar");
  const Space = document.querySelector(".pageProduct-space");
  // 初期位置を取得
  const initialPosition = navBar.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop);

  // ウィンドウがスクロールされた時のイベントリスナーを設定
  window.addEventListener("scroll", function () {
    // 現在のスクロール位置を取得
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    // 画面下からの距離を取得
    const distanceFromBottom = document.documentElement.scrollHeight - (scrollTop + window.innerHeight);

    // 距離が100px未満の場合、fixedクラスを追加。それ以外の場合、fixedクラスを削除。
    if (scrollTop >= initialPosition - 100) {
      navBar.classList.add("fixed");
      Space.classList.add("active");
    } else {
      navBar.classList.remove("fixed");
      Space.classList.remove("active");
    }

    // 画面下からの距離が300px未満の場合、stopクラスを追加。それ以外の場合、stopクラスを削除。
    if (distanceFromBottom < 100) {
      navBar.classList.add("stop");
    } else {
      navBar.classList.remove("stop");
    }
  });
});


document.addEventListener("DOMContentLoaded", function () {
  // リスト要素とアイテム要素を取得
  const listElements = document.querySelectorAll(".pageProduct-list");
  const itemElements = document.querySelectorAll(".pageProduct-item");

  // ウィンドウがスクロールされた時のイベントリスナーを設定
  window.addEventListener("scroll", function () {
    // 現在のスクロール位置を取得
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    let activeIndex = -1;

    // 各アイテム要素に対して、位置をチェック
    itemElements.forEach((item, index) => {
      const rect = item.getBoundingClientRect();
      const distanceFromTop = rect.top + scrollTop;

      // 要素が画面上部から300pxの位置に達した場合、activeIndexを更新
      if (distanceFromTop - 300 <= scrollTop) {
        activeIndex = index;
      }
    });

    // .activeクラスを更新
    listElements.forEach((list, index) => {
      if (index === activeIndex) {
        list.classList.add("active");
      } else {
        list.classList.remove("active");
      }
    });
  });
});

