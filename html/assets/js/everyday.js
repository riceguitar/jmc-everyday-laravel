$(function() {

    // User Type
    $('.personal-toggle').click(function() {

      $('.personal-existing').slideToggle();
      $('.personal-new').slideToggle();

      return false;
    });

    // Testimonial Carousel
    $('.home-testimonial-slider').slick();
});