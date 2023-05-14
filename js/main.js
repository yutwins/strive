// ロゴslider  
$(document).ready(function(){
    $('.slider').slick({
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
            speed: 2000, //スライドが流れる速度を設定
          }
        }
      ]
    });
    $('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
      $('.slider').slick('slickPlay');
    });
});
