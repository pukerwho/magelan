//Long Bubles
jQuery(document).ready(function($){
	var url = WPURLS.templateUrl;
  var bArray = [];
  var sArray = [15,20,25];
  var bgArray = ["bubble-one.png","bubble-two.png"];
  var speedLongArray = [1750,2000,2500,2750,3000,3250,3500,3750,4000];
  var createLongArray = [650,700,750,800];

  for (var i = 0; i < $('.long-bubbles').width(); i++) {
      bArray.push(i);
  }
  
  function randomValue(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
  }

  setInterval(function(){
    var size = randomValue(sArray);
    $('.long-bubbles').append('<div class="long-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px; background: url(' + url + '/img/' + randomValue(bgArray) + ');" ></div>');
    $('.long-bubble').animate({
        'bottom': '100%',
        'opacity' : '-=0.7'
    }, randomValue(speedLongArray), function(){
        $(this).remove()
    }
    );
  }, randomValue(createLongArray)); 
});

//Entertainment Bubles
jQuery(document).ready(function($){
	var url = WPURLS.templateUrl;
  var bArray = [];
  var sArray = [12,15,18];
  var bgArray = ["bubble-one.png","bubble-two.png"]
  var speedEntertainmentArray = [1250,1500,1750,2000,2500,2750,3000,3250,3500,3750,4000];
  var createEntertainmentArray = [400,450,500,550];

  for (var i = 0; i < $('.entertainment-bubbles').width(); i++) {
      bArray.push(i);
  }
  
  function randomValue(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
  }

  setInterval(function(){
    var size = randomValue(sArray);
    $('.entertainment-bubbles').append('<div class="entertainment-bubble" style="right: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px; background: url(' + url + '/img/' + randomValue(bgArray) + ');" ></div>');
    $('.entertainment-bubble').animate({
        'bottom': '100%',
        'opacity' : '-=0.7'
    }, randomValue(speedEntertainmentArray), function(){
        $(this).remove()
    }
    );
  }, randomValue(createEntertainmentArray)); 
});

//Services Long Bubles
jQuery(document).ready(function($){
	var url = WPURLS.templateUrl;
  var bArray = [];
  var sArray = [12,15,18,21,24,27,30];
  var bgArray = ["bubble-one.png","bubble-two.png"]
  var speedArray = [1250,1500,1750,2000,2500,2750,3000,3250,3500,3750,4000];
  var createArray = [400,450,500,550];

  for (var i = 0; i < $('.long-services-bubbles').width(); i++) {
      bArray.push(i);
  }
  
  function randomValue(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
  }

  setInterval(function(){
    var size = randomValue(sArray);
    $('.long-services-bubbles').append('<div class="long-services-bubble" style="right: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px; background: url(' + url + '/img/' + randomValue(bgArray) + ');" ></div>');
    $('.long-services-bubble').animate({
        'bottom': '100%',
        'opacity' : '-=0.7'
    }, randomValue(speedArray), function(){
        $(this).remove()
    }
    );
  }, randomValue(createArray)); 
});

//Services Short Bubles
jQuery(document).ready(function($){
	var url = WPURLS.templateUrl;
  var bArray = [];
  var sArray = [12,15,18,21,24,27,30];
  var bgArray = ["bubble-one.png","bubble-two.png"]
  var speedShortServicesArray = [2000,2500,2750,3000,3250,3500,3750,4000];
  var createShortServicesArray = [500,550,600,650,700];

  for (var i = 0; i < $('.short-services-bubbles').width(); i++) {
      bArray.push(i);
  }
  
  function randomValue(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
  }

  setInterval(function(){
    var size = randomValue(sArray);
    $('.short-services-bubbles').append('<div class="short-services-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px; background: url(' + url + '/img/' + randomValue(bgArray) + ');" ></div>');
    $('.short-services-bubble').animate({
        'bottom': '100%',
        'opacity' : '-=0.7'
    }, randomValue(speedShortServicesArray), function(){
        $(this).remove()
    }
    );
  }, randomValue(createShortServicesArray)); 
});