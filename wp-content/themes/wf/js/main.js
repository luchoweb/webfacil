// Functions
const isset = (element) => $(element).html() != undefined ? true : false;

// Ready!
$(function() {
  // If found a slider then run slick
  if ( isset('.slider') ) {
    $('.slider').slick({
      arrows: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      speed: 300,
      autoplay: true,
      autoplaySpeed: 4000
    });
  }
});