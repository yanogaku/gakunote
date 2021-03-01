// メニューボタンを押した時の発火
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('menuButton').addEventListener('click', function (ev) {
      ev.preventDefault();
      this.classList.toggle('active');
      document.getElementById('menuList').classList.toggle('active');
    });
    //メニューリストの動き
    $(function() {
      $('.list-item').mouseover(function() {
        $(this).css('font-size', '45px');
        $(this).css('color', 'gray');
      });
      $('.list-item').mouseout(function() {
          $(this).css('font-size', '30px');
          $(this).css('color', 'gray');
        });
    });
  });

// スライドショー（新）
$(function(){
  $("#slide ul li").css({"position":"relative","overflow":"hidden"});
  $("#slide ul li").hide().css({"position":"absolute","width":"100%" });
  $("#slide ul li:first").addClass("active").show();
  setInterval(function(){
  var $active = $("#slide ul li.active");
  var $next = $active.next("li").length?$active.next("li"):$("#slide ul li:first");
  $active.fadeOut(1000).removeClass("active");
  $next.fadeIn(1000).addClass("active");
  },4000);
  });

  

  