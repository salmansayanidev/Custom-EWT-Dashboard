// sb nav js
$(document).ready(function () {
  $(".sb-nav-list").hide();
  $(".navigation-link").click(function (e) {
    $(".sb-nav-list").not($(this).siblings(".sb-nav-list")).slideUp();
    $(this).siblings(".sb-nav-list").slideToggle();
    $(".sb-nav-list").css("opacity", "");
    $(this).siblings(".sb-nav-list").css("opacity", "1");
  });
});

// head profile drop down js
$(".profile-list").hide();
$(".head-pro-btn").click(function () {
  $(".profile-list").slideToggle();
  $(".profile-list").css("opacity", "1");
});


