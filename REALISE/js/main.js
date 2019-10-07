//topへ戻るボタン
$('#top-btn').click(function(){
  $('html,body').animate({
    scrollTop:0
  },700);
});

//hamburger
$('#hamburger').click(function(){
  $(this).toggleClass('active');
  $('#header-nav').slideToggle();
});


// スライドショー

let nowPage = 0; //表示する画像
let nextPage = 1; //次に表示する画像
const slides = $('#slideshow img');
const slideLength = slides.length; // 4
const fadeTime = 2000;
const showTime = 3000;

const slideshow = () => {
  nextPage = (nowPage + 1) % slideLength;
  slides.eq(nowPage).fadeOut(fadeTime);
  slides.eq(nextPage).fadeIn(fadeTime);
  nowPage = nextPage;
}

slides.hide();
slides.eq(nowPage).show();
setInterval(slideshow ,showTime);

//かるせるパネル

const carouselWidth = $("#carousel").width(); // 700
const length = $("#carousel-inner li").length; // 4
const innerWidth = carouselWidth * length; // 2800
const time = 400; // transition = 0.4秒

const carouselinner = $("#carousel-inner"); // ul
const prev = $("#prev");
const next = $("#next");

const nav = $("#carousel-nav li");

let c = 1;

const opacity=()=>{
  nav.css("opacity","1");
  nav.eq(c-1).css("opacity",".6");
};
opacity();

// 次へのボタン処理
next.click(function(){

  if(c == length){
    carouselinner.stop().animate({
      left:0
    },time);
    c=1;

  } else {
    carouselinner.stop().animate({
      left: -c * carouselWidth
    },time);
    c++;
  }
  opacity();
});

// 前へのボタン処理
prev.click(function(){
  if(c == 1){
    carouselinner.stop().animate({
      left:-2100
    },time);
    c=length;

  }else{
    carouselinner.stop().animate({
      left:(c-2)*-carouselWidth
    },time);
    c--;
  }
  opacity();

});


// 小さい画像を押した時にその画像へ行く処理
nav.click(function(){
  c = $(this).index() + 1;
  carouselinner.stop().animate({
    left:-(c-1)*carouselWidth
  },time);
    opacity();
});
