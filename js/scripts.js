$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

var swiperAbout = new Swiper('.swiper-about', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var swiperShops = new Swiper('.swiper-shops', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var swiperRestaurants = new Swiper('.swiper-restaurants', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var swiperEntertainment = new Swiper('.swiper-entertainment', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var swiperServices = new Swiper('.swiper-services', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

var swiperSingle = new Swiper('.swiper-single', {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

function showContent(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("archive-tab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
}

$('.p_map__nav-heading').on('click', function(){
  $('.p_map__nav-heading').removeClass('p_map__nav-floor-open')
  $(this).addClass('p_map__nav-floor-open');
})

$('.p_map__nav-list li').on('click', function(){
  $('.p_map__nav-list li').removeClass('active')
  $(this).addClass('active');
})

function showMapContent(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("p_map__content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(tabName).style.cssText = 'display:block';
  evt.currentTarget.className += " active";
}

//birds
$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  var half_h_scroll = h_scroll/3.5;
  $('.p_main__welcome-birds').css({'top':'calc(50% - ' + half_h_scroll + 'px)'});
})

//АНИМАЦИЯ
AOS.init({
    disable: 'mobile'
});