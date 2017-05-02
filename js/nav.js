$(function(){
  $(".navbtn").hover(function(){
    $('.btn-primary').removeClass('btn-primary bg-black white');
    $(this).removeClass('white');
    $(this).addClass('btn-primary bg-black white');
  })

  //スクロール
  $('a[href^=#]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 50;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
