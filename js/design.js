

// navbar change on scroll
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  if (scroll > 250) {
    $("#navbar").removeClass("bg-nav-transparant");
    $("#navbar").addClass("bg-nav-white");
   
    $('#logo-white').css("display", "none");
    $('#logo-color').css("display", "block");  
   
    $(".nav-link").removeClass("text-white");
    $(".nav-link").addClass("text-dark");
    
    $("#btn-manager, #btn-menu-offcanvas").removeClass("btn-outline-light text-white");
    $("#btn-manager, #btn-menu-offcanvas").addClass("btn-outline-dark text-dark");
    
    $("#btn-lang").removeClass("btn-lang-transparant text-white");
    $("#btn-lang").addClass("btn-lang-white text-dark");

    $("#icon-lang-white").removeClass("d-inline-block");
    $("#icon-lang-white").addClass("d-none");
    $("#icon-lang-black").removeClass("d-none");
    $("#icon-lang-black").addClass("d-inline-block");
    $("#mobileNavbarToggler").removeClass("mobile-collapse-bg-dark");

    $("#humburger-icon").removeClass("mobile-toggle-white");
    $("#humburger-icon").addClass("mobile-toggle-black");
  }

  else{
    $("#navbar").removeClass("bg-nav-white");
    $("#navbar").addClass("bg-nav-transparant");
    
    $('#logo-white').css("display", "block");
    $('#logo-color').css("display", "none");
    
    $("#navbar .nav-link").removeClass("text-dark");
    $("#navbar .nav-link").addClass("text-white");
    
    $("#btn-manager, #btn-menu-offcanvas").removeClass("btn-outline-dark text-dark");
    $("#btn-manager, #btn-menu-offcanvas").addClass("btn-outline-light text-white");
    
    $("#btn-lang").removeClass("btn-lang-white text-dark");
    $("#btn-lang").addClass("btn-lang-transparant text-white");

    $("#icon-lang-black").removeClass("d-inline-block");
    $("#icon-lang-black").addClass("d-none");
    $("#icon-lang-white").removeClass("d-none");
    $("#icon-lang-white").addClass("d-inline-block");
    $("#mobileNavbarToggler").addClass("mobile-collapse-bg-dark");

    $("#humburger-icon").removeClass("mobile-toggle-black");
    $("#humburger-icon").addClass("mobile-toggle-white");
  }
})

document.addEventListener( 'DOMContentLoaded', function() {
  // var splide = new Splide( '.splide' );
  // splide.mount();

  // news list section
  new Splide( '#news-list', {
    autoWidth: true,
    fixedHeight: 534,
    type   : 'loop',
    perPage    : 1,
    focus  : 1,
    pagination : true,
    breakpoints: {
      600: {
        fixedWidth : 60,
        fixedHeight: 860,
      },
    },
  } ).mount(  );

  // related-site-logo section
  new Splide( '#related-site_slider', {
    fixedWidth : 230,
    fixedHeight: 80,
    type   : 'loop',
    gap        : 30,
    rewind     : true,
    pagination : false,
    cover      : true,
    focus      : 'center',
    autoScroll: {
      speed: 1,
    },
    breakpoints: {
      600: {
        fixedWidth : 230,
        fixedHeight: 80,
      },
    },
  } ).mount(  window.splide.Extensions );

  // project list section
  new Splide( '#project-list-container', {
    autoWidth: true,
    autoHeight : true,
    type   : 'loop',
    gap        : 30,
    perPage    : 3,
    rewind: true,
    pagination : false,
    arrows: false,
    autoScroll: {
      speed: 1,
    },
    breakpoints: {
      600: {
        fixedWidth : 60,
        perPage    : 1,
      },
    },
  } ).mount( 
    window.splide.Extensions 
    );

} );




// chart js 
// const ctx = document.getElementById('smpChart');
// const xValues = ['2022-11','2022-12','2023-2','2023-4','2023-6'];

// new Chart(ctx, {
//   type: 'line',
//   data: {
//     labels: xValues,
//     datasets: [{
//       label: 'SMP',
//       data: [240,260,250,145,150],
//       backgroundColor: 'rgba(163, 192, 142, 0.5)',
//       borderColor: "#A3C08E",
//       fill: true,
//       tension: 0.2
//     },{
//       label: 'REC',
//       data: [60,50,60,75,85],
//       backgroundColor: 'rgba(107, 174, 226, 0.5)',
//       borderColor: "#6BAEE2",
//       fill: true,
//       tension: 0.2
//     },{
//       label: 'SMP+REC',
//       data: [310,340,320,220,240],
//       backgroundColor: 'rgba(249, 140, 129, 0.5)',
//       borderColor: "#F98C81",
//       fill: true,
//       tension: 0.2
//     }]
//   },
//   options: {
//     scales: {
//       y: {
//         beginAtZero: true
//       }
//     },
//     plugins: {
      
//     }
//   }
// });


// initialize aos 
AOS.init();

// lenis studio freight 
const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})



function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)


// hero carousel index page 
var swiper = new Swiper(".homepage-main-carousel", {
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 30000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});