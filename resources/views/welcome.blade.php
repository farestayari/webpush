
<!DOCTYPE html>
<!-- saved from url=(0020)https://tapptic.com/ -->
<html class="no-js" lang="">
  <script type="text/javascript" src="chrome-extension://ffljdddodmkedhkcjhpmdajhjdbkogke/js/datalayer-checker.js"></script>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pixels Trade : Your digital transformation partner</title>


  
    <meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="https://legacy.tapptic.com/wp-content/themes/wp-tapptic/favicon.ico" /><![endif]-->

    <!-- Remove caching -->
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/ala.css') }}">
    <script>
      window.SBX_dlc=window.SBX_dlc||{};
      window.SBX_dlc.settings=JSON.parse("{\"toolBar\":true,\"consoleLog\":false,\"eventColors\":true,\"eventCustomColors\":{\"custom1\":\"\",\"custom2\":\"\",\"custom3\":\"\"},\"gtmInjectId\":\"\",\"gtmInjectRule\":\"\",\"preventDefault\":false}");
    </script>
    <script>
      
      window.SBX_dlc.launchToolBar = function()
      {
        // css
        var h = document.getElementsByTagName('head')[0];
        var css = document.createElement('link');
        css.setAttribute('rel', 'stylesheet');
        css.setAttribute('type', 'text/css');
        css.setAttribute('href', "chrome-extension://ffljdddodmkedhkcjhpmdajhjdbkogke/css/datalayer-checker.css");
        h.parentNode.insertBefore(css,h);

        // toolbar
        var toolBar = document.querySelector('.SBX_dlc__toolbar');
        var toolBarContainer = document.createElement('div');
        toolBarContainer.className = 'SBX_dlc__toolbar folded';
        document.body.appendChild(toolBarContainer);
        var toolBar = document.querySelector('.SBX_dlc__toolbar');
        toolBarHtml =  '<div class="SBX_dlc__toolbar--inside">';
        toolBarHtml +=    '<div class="SBX_dlc__logo">';
        toolBarHtml +=      '<img src="chrome-extension://ffljdddodmkedhkcjhpmdajhjdbkogke/img/icon_48.png">';
        toolBarHtml +=    '</div>';
        toolBarHtml +=    '<ol class="SBX_dlc__events--list"></ol>';
        toolBarHtml += '</div>';
        toolBar.innerHTML = toolBarHtml;

        document.querySelector('.SBX_dlc__logo').onclick = function(e)
        {
          var tb = document.querySelector('.SBX_dlc__toolbar');
          if ( /folded/.test(tb.className) ) {
            tb.className = tb.className.replace(' folded', '');
          }
          else {
            tb.className = tb.className + ' folded';
          }
        };

        window.SBX_dlc.addToolBarEvent = function( name ) {
          var toolBarEventList = document.querySelector('.SBX_dlc__events--list');
          var toolBarEvent = document.createElement('li');
          toolBarEvent.className = 'SBX_dlc__events--item';
          toolBarEvent.innerText = name;
          
          if (toolBarEventList.querySelectorAll('.SBX_dlc__events--item').length === 0) {
            toolBarEventList.appendChild(toolBarEvent);
          }
          else {
            toolBarEventList.insertBefore(toolBarEvent, toolBarEventList.querySelectorAll('.SBX_dlc__events--item')[0]);
          }
          setTimeout(function() {
                toolBarEvent.className =  toolBarEvent.className + ' old';
            }, 100)
        }

      }
    </script>
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div id="app">
      <div class="middle">
        <div id="logo-container">
          <img src="{{ asset('images/logo-001.png') }}" id="logo-1" alt="">
          <img src="{{asset('images/logo-002.png') }}" id="logo-2" alt="">
          <img src="{{ asset('images/logo-003.png') }}" id="logo-3" alt="">
        </div>
        <!-- <img src="assets/img/logo-1.png" id="logo-placement" alt=""> -->
        <h2>Your digital transformation partner</h2>

      </div>
      <div id="bottom">

        <div id="bottom-one">
          <p>Want more ?</p>
          <div class="btn">
            <a href="#" class="btn-1">Get inside </a>
          </div>
        </div>

        <div id="bottom-two">
          <h4>Allow notification</h4>
          <p>To get our latest news </p>
        </div>
        <div id="bottom-tree">
          <p>Can’t wait?</p>
          <div class="btn">
            <a href="mailto:info@pixelstrade.com?subject=Hello%20PixelsTrade!&amp;body=" class="btn-1">Contact us</a>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>