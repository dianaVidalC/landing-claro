$(function() {
    $('.slick-carousel').slick({
        infinite:true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
    

    $('.slick-carousel-card').slick({
        infinite:true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        speed: 500,
        arrows: false,
        // centerMode: true,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: false,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
              }
            }
        ]
      });

  });