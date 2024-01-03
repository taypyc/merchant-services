// Browser detect
$(function() {
  var parser = bowser.getParser(window.navigator.userAgent),
      userBrowser = parser.parsedResult.browser.name,
      userOS = parser.parsedResult.os.name,
      userPlatform = parser.parsedResult.platform.type;

  if(userBrowser == 'Internet Explorer') {
    $('html').addClass('ms-ie');
  }
  if(userBrowser == 'Microsoft Edge') {
    $('html').addClass('ms-edge');
  }
  if(userBrowser == 'Opera') {
    $('html').addClass('opera');
  }
  if(userOS == 'macOS') {
    $('html').addClass('macos');
  }
  
  if(userPlatform == 'mobile' || userPlatform == 'tablet') {
    $('html').addClass('mt-device');
  } else {
    $('html').addClass('desktop-device');
  }
});

// fb pageview event
$(function() {
  $.ajax({
    method: 'POST',
    url: 'php/store-data.php',
    data: {url: window.location.href},
    dataType: 'json'
  });
});


