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
        $(this).css('font-size', '40px');
        $(this).css('color', 'gray');
      });
      $('.list-item').mouseout(function() {
          $(this).css('font-size', '30px');
          $(this).css('color', 'gray');
        });
    });
  });

  // 画像浮き出る
  $(function(){
    $(window).on("scroll",function(){
      $('.pic').each(function(index,el){
        if($(window).scrollTop()>($(el).offset().top - $(window).height()/2)){
          $(el).addClass('is-over');
        };
      });
    });
  });