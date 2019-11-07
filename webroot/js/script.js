$(function() {
  $(".lime").hover(function() {
    $(this).css({
      "color": "lime"
    });
  }, function() {
    $(this).css({
      "color": "#333"
    });
  });

  $(".red").hover(function() {
    $(this).css({
      "color": "red"
    });
  }, function() {
    $(this).css({
      "color": "#333"
    });
  });

  $("header a").hover(function() {
    $("header a").css({
      "color": "#eee"
    });
  }, function() {
    $("header a").css({
      "color": "#333"
    });
  });



});
