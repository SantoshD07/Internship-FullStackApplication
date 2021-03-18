function openNav() {
  $('.modal').addClass("show");
  $('.head-mob nav').css("left", "0");
}

function closeNav() {
  $('.modal').removeClass("show");
  $('.head-mob nav').css("left", "-100%");
}