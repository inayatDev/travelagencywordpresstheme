var $jq = jQuery.noConflict();
$jq(document).ready(function () {
  $jq(".multiple_items").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    nav: false,
    //  prevArrow: '<span class="prev-arrow3" ><i class="fal fa-chevron-left"></i></span>',
    //    nextArrow: '<span class="next-arrow3" ><i class="fal fa-chevron-right"></i></span>'
    responsive: [
      {
        breakpoint: 1530,
        settings: {
          arrows: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 991,
        settings: {
          arrows: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 520,
        settings: {
          arrows: false,
          slidesToShow: 1,
        },
      },
    ],
  });
});

$jq(document).ready(function () {
  $jq(".hero-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    nav: false,
  });
});

// $(document).ready(function(){
//     $('.media-slider').slick({

//         slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay:false,
//     dots:true,
//     });
// })

// $(document).ready(function(){
//     $('.award-slider').slick({
//         slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay:false,
//     dots:false,
//     prevArrow: '<span class="prev-arrow3" ><i class="fal fa-chevron-left"></i></span>',
//      nextArrow: '<span class="next-arrow3" ><i class="fal fa-chevron-right"></i></span>'
//     });
// })

// function myFunction(x) {
//     x.classList.toggle("change");
//   }
$jq(document).ready(function () {
  console.log("jq is working!");
});
