$(document).ready(function() {
  var mySwiper = new Swiper(".swiper-container", {
    slidesPerView: 1.5,
    centeredSlides: true,
    loop: true,
    spaceBetween: 16,
    breakpoints: {
        767: {
            slidesPerView: 1,
            spaceBetween: 0,
        }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
}); 

$('.slide-news').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 1.5,
    slidesToScroll: 1, 
    infinite: false,
    prevArrow: '<a href="javascript:void(0)" class="prev"><img src="images/ar-left.png" class="img-fluid" alt=""></a>',
    nextArrow: '<a href="javascript:void(0)" class="next"><img src="images/ar-right.png" class="img-fluid" alt=""></a>',
    speed: 500,
});  

$('.slider-for').slick({
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.slider-nav',
});
$('.slider-nav').slick({
    autoplay:false,
    arrow:false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 4,
            }
        }
    ],
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    prevArrow: '', 
    nextArrow: '', 
});



new WOW().init(); 


jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
}); 