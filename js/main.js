var $hero = $('.hero'),

hero_page = {
  page_title: $hero.find('h1'),
  page_subtitle: $hero.find('h2'),
  page_signup_form: $hero.find('form'),
  parallax: function() {

  }
}
//
// $(document).scroll(function() {
//   var wScroll = $(window).scrollTop();
//
//   $('.hero h2').css('top', (wScroll / 100) + "px");
//
// });
