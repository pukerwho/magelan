$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 97) {
    $('.home .header-in').addClass('header-fix');
  } else {
    $('.home .header-in').removeClass('header-fix');
  }
})

//Main Bg
var url = WPURLS.templateUrl;
var bgSmall = '/img/bg.jpg';
var bgLarge = '/img/bg@2x.jpg';
console.log('url', url);
if ($('.p_main__shops').length > 0) {
  var bgHeight = $('.p_main__shops').offset().top;
  var shopsHeight = $('.p_main__shops').height();
  if (bgHeight > 1800) {
    bgUrl = url + '/' + bgLarge;
  }
  else {
    bgUrl = url + '/' + bgSmall;
  }
  console.log(bgHeight);
  $('.p_main__welcome-bg').css({
    'height': 'calc(' + bgHeight + 'px + ' + shopsHeight/1.5 + 'px)',
    'background': 'url('+ bgUrl + ')'
  })
}

//News Inner BG
if ($('.p_main__brands').length > 0) {
  var innerBgHeight = $('.p_main__brands').offset().top;
  console.log(innerBgHeight);
  $('.p_news .inner-bg').css({
    'height': innerBgHeight
  })
}

//Callback Form Open
if ($('.callback').length > 0) {
  $(document).on('click', '.callback', function(){
    $('.callback__modal').addClass('callback__modal-open');
    $('body').addClass('modal-open');
    $('.modal__bg').addClass('modal__bg-open');
  });
}

//Callback Form Close
if ($('.callback__close').length > 0) {
  $(document).on('click', '.callback__close', function(){
    $('.callback__modal').removeClass('callback__modal-open');
    $('body').removeClass('modal-open');
    $('.modal__bg').removeClass('modal__bg-open');
  });
}

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
  document.getElementById(tabName).style.cssText = 'display:grid';
  evt.currentTarget.className += " active";
}

//birds
// $(window).scroll(function(){
//   var h_scroll = $(this).scrollTop();
//   var half_h_scroll = h_scroll/3.5;
//   $('.p_main__welcome-birds').css({'top':'calc(50% - ' + half_h_scroll + 'px)'});
// })

$('.p_main__welcome').mousemove(function(e) {
  var birdsMoveX = e.pageX/15;
  var birdsMoveY = e.pageY/10;
  $('.p_main__welcome-birds').css({
    // 'transform':'translate('+ birdsMoveY + 'px, ' + birdsMoveX + 'px'
    'top': 'calc(300px + ' + birdsMoveY + 'px)',
    'right': birdsMoveX + 'px'
  });
})

function birdShow(){
  $('.p_main__welcome-birds').addClass('p_main__welcome-birds__show');
}
setTimeout(birdShow, 1000);

//АНИМАЦИЯ
AOS.init({
    disable: 'mobile'
});

ScrollOut();