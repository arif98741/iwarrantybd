$(".ans-one").hide();
$(".ans-two").hide();
$(".ans-three").hide();
$(".ans-four").hide();

$(".question-one").click(function(){
  $(".ans-one").toggle(300);
  $(".ans-two").hide(200);
  $(".ans-three").hide(200);
  $(".ans-four").hide(200);
});

$(".question-two").click(function(){
  $(".ans-two").toggle(300);
  $(".ans-one").hide(200);
  $(".ans-three").hide(200);
  $(".ans-four").hide(200);
});

$(".question-three").click(function(){
  $(".ans-three").toggle(300);
  $(".ans-one").hide(200);
  $(".ans-two").hide(200);
  $(".ans-four").hide(200);
});

$(".question-four").click(function(){
  $(".ans-four").toggle(300);
  $(".ans-one").hide(200);
  $(".ans-two").hide(200);
  $(".ans-three").hide(200);
});

$(".faq-one").click(function(){
  $(this).toggleClass("color-change");
});
$(".faq-two").click(function(){
  $(this).toggleClass("color-change");
});
$(".faq-three").click(function(){
  $(this).toggleClass("color-change");
});
$(".faq-four").click(function(){
  $(this).toggleClass("color-change");
});