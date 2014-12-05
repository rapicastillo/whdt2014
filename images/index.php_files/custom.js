$(function () {

/* FOR title page */
  $("#branch-1, #branch-2, #branch-3").css("backgroundSize", "auto " + $(window).height()+ "px");

  setTimeout(function() {
    $("#branch-1").delay(100).animate({ height: '100%' }, 2000);
    $("#branch-2").delay(300).animate({ height: '100%' }, 2000);
    $("#branch-3").delay(700).animate({ height: '100%' }, 1000);
    $("#circle-1").delay(500).animate({ opacity: 1 }, 1000);
    $("#circle-2").delay(1000).animate({ opacity: 1 }, 1000);
  }, 300);

})
