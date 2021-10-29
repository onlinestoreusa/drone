<?php
require_once __DIR__ . '/include/Class.Processing.php';
$processing = new PROCESSING();

//save tracking params to cookie
$aff = $processing->get_save_tracking_parameter($processing::$url_aff);
$cid = $processing->get_save_tracking_parameter($processing::$url_cid);
$network = $processing->get_save_tracking_parameter($processing::$url_net);
$sid = $processing->get_save_tracking_parameter($processing::$url_sid);
//save tracking params to cookie

$product = 'tacticairdrone';
$processing->save_data_to_cookie($processing->COOKIE_PRODUCT, $product);

$main_url = 'https://en.wikipedia.org/wiki/Drone';
$order_url = $main_url.'order2.php?prod='.$product.'&net='.$network.'&aff='.$aff.'&sid='.$sid.'&cid='.$cid;

$scheme = 'http';
if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])){
  $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'];
}else{
  $scheme = !empty($_SERVER['HTTPS']) ? "https" : "http";
}
$img_to_share = $scheme.'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/img/content_img_1.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs    ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?php echo $img_to_share; ?>">
  <title>Tactic AIR Drone - Foldable Drone with Wide Angle 4K HD Dual Camera - Quadcopter Optical Flow Pressure Altitude Hold</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
  <!-- Stylesheet    ================================================== -->
  <link rel="stylesheet" type="text/css"  href="./css/fontello.css">
  <link rel="stylesheet" type="text/css"  href="./css/style.css">
  <link rel="icon" type="image/png" href="./img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="wrapper_page">
    <header class="header">
      <!-- Navigation          ==========================================-->
      <nav id="tf-menu" class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs-block" href="<?php echo $order_url; ?>" target="_blank"><img class="img-logo" src="./img/logo.png" alt="logo"></a>
          </div>
          <div class="collapse navbar-collapse p-0" id="navbar-collapse-1">
            <div class="row row-mob">
              <div class="col-sm-4">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo $order_url; ?>" target="_blank" class="">Home</a></li>
                  <li><a href="<?php echo $main_url; ?>/legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank" class="">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-sm-4">
                <div class="wrapper_logo text-center clearfix">
                  <a class="navbar-brand hidden-xs" target="_blank" href="<?php echo $order_url; ?>"><img class="img-logo" src="./img/logo.png" alt="logo"></a>
                </div>
              </div>
              <div class="col-sm-4">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo $main_url; ?>/legal/policy.php?prod=<?php echo $product; ?>" target="_blank" class="">Privacy Policy</a></li>
                  <li><a href="<?php echo $main_url; ?>/legal/term.php?prod=<?php echo $product; ?>" target="_blank" class="">Terms of Business</a></li>
                </ul>
              </div>
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
        <div class="wrapper_top_block">
          <div class="row">
            <div class="col-md-7">
              <div class="top_block clearfix">
                <h1 class="h1">Get snappy with the <span class="fw-700">Tactic AIR Drone</span> for festivals, events and everyday fun</h1>
                <div class="top_icons">
                  <div class="wrapper_soc">
                    <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-facebook"><i class="demo-icon icon-facebook"></i></a>
                  </div>
                  <div class="wrapper_soc">
                    <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-twitter"><i class="demo-icon icon-twitter"></i></a>
                  </div>
                  <div class="wrapper_soc">
                    <button type="button" class="btn btn-transparent btn-transparent-link" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Link copied!">
                      <i class="demo-icon icon-link"></i><span class="social_text">Copy</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="wrapper_top_img"><a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive top_img" src="./img/top_img.png" alt="top_img"></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- wrapper-content        ==========================================-->
    <div class="wrapper-content">
      <div class="container container-big">
        <div class="inner_container">
          <div class="row row-mob">
            <div class="col-md-8 pr-20">
              <div class="content">
                <div class="mb-35">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7U9CIVT69Bo" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                </div>
                <div class="advert clearfix mt-35">
                  <div class="item_advert"><img src="./img/img-1.png" alt=""><span>John Lewis</span></div>
                  <div class="item_advert"><img src="./img/img-2.png" alt=""><span>Technology</span></div>
                  <div class="item_advert"><img src="./img/img-3.png" alt=""><span><?php echo date('d.m.Y'); ?></span></div>
                </div>
                <h2 class="h2">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> puts aerial photography in everyone’s hands </h2>
                <p class="text">The innovative features of the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> give everyone the ability to create professional aerial photography with this quad propelled hovering craft. Combined with a mobile APP, this easy to use inexpensive Wi-Fi enabled drone offers cutting edge features not found in camera drones that cost much more.</p>
                <p class="text">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> features dual cameras that can be used and viewed simultaneously or independently. Complimenting the advanced features of the drone, the integrated upper and lower 4K HD cameras are combined with an advanced photography mobile APP. The APP enables the user to control the drone as well as the camera functions. </p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-35 mb-40" src="./img/content_img_1.jpg" alt="content_img_1"></a>
                <p class="text">Flying <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> one can view while recording front photographs or videos along with bottom camera shots as either a split screen or picture in picture. The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> mobile APP allows plotted trajectory flight simply by drawing the flight path on the mobile screen.</p>
                <p class="text">Breakthroughs in aerial photography with the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> include Optical Flow Positioning, Default Smart Gesture Photo, along with Portrait Follow, which automatically follows a designated photography subject.  </p>
                <p class="text">The 4K pixel cameras are capable of HD video along with 4096x3072 still picture resolution. Electric 90° adjustment coupled with the 120° viewing angle provides users of the capabilities of professional aerial photography productions.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_2.jpg" alt="content_img_2"></a>
                <h2 class="h2">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> is Easy to Transport</h2>
                <p class="text">Using a tested three-dimensional folding technology, the lightweight <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> folds to 13.6x8.5x6cm for transportation in its easy carry bag. This classic three-dimensional folding technology is designed not to affect flight stability even after thousands of folds.</p>
                <p class="text">Combined with its incredible lightweight, it is only 0.3200 kg, along with a low folded profile and carrying case, it is easy to take along anywhere you want to experience aerial photography.</p>
                <p class="text">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a>, although favored by experienced flyers, is designed with the beginner in mind. It is easy to control while providing extended flight time with interchangeable modular batteries. The wireless remote control with mobile phone integration capabilities and an amazing array of video, as well as still photography control, make the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> a top pick among camera drones.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_3.jpg" alt="content_img_3"></a>
                <h2 class="h2">The Advanced Flying Machine</h2>
                <p class="text">Designed for easy use by the beginner with integrated technologies for the professional photographer, the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> has all the capabilities of an advanced flying machine. Featuring 4 channels with led lights, it has a 6-axis gyroscope with calibration function for smooth, level flying. This quadcopter camera drone features stuck and low power protection to prevent flying damage.</p>
                <p class="text">It also features one button controlling takeoffs, falls along with urgent stops. Fast or slow flies are all easily controlled. There’s an advanced density pressure sensor for accurately setting the height.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_4.jpg" alt="content_img_4"></a>
                <p class="fs-21 mb-25 fw-700">This quadcopter with brushed motor features:</p>
                <div class="wrapper_s_offers">
                  <div class="media mt-0">
                    <div class="pull-left mr-20"><img class="arrow" src="./img/arrow.png"></div>
                    <div class="media-body">
                      <p class="text fw-600 pt-10 mb-15">Protection from dust mites, mildew, mould, fungi, bacteria and germs</p>
                    </div>
                  </div>
                  <div class="media mt-0">
                    <div class="pull-left mr-20"><img class="arrow" src="./img/arrow.png"></div>
                    <div class="media-body">
                      <p class="text fs-15 fw-600 mb-15">Mobile Phone APP for Flight, Video and Photograph Control</p>
                    </div>
                  </div>
                  <div class="media mt-0">
                    <div class="pull-left mr-20"><img class="arrow" src="./img/arrow.png"></div>
                    <div class="media-body">
                      <p class="text fw-600 mb-15">Stabilized Flights with a Fixed Point of Light Flow</p>
                    </div>
                  </div>
                  <div class="media mt-0">
                    <div class="pull-left mr-20"><img class="arrow" src="./img/arrow.png"></div>
                    <div class="media-body">
                      <p class="text fw-600 mb-15">Various Speed Controls</p>
                    </div>
                  </div>
                  <div class="media mt-0">
                    <div class="pull-left mr-20"><img class="arrow" src="./img/arrow.png"></div>
                    <div class="media-body">
                      <p class="text fw-600 mb-15">Modular Large Capacity Batteries for Extended Flight Time</p>
                    </div>
                  </div>
                </div>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_5.jpg" alt="content_img_5"></a>
                <h2 class="h2">The  Innovative Technical Aerial Photographer and Videographer</h2>
                <p class="text">Stabilized with a breakthrough fixed point technology, the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> provides a steady, smooth flight that adds to image clarity. This fixed-point technology enables a steady hovering capability which enhances fixed height aerial photography.</p>
                <p class="text">The live aerial view provided by the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> with its mobile APP allows to change the focus of either camera, adjust the lens degrees or change from video to still photographs at the touch of a button.</p>
                <p class="text">The amazingly easy to control cameras of the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> respond to a default right-hand signal with either the palm extended to the lens or two fingers held up that are signal commands to shoot a photo or video hands-free.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_6.jpg" alt="content_img_6"></a>
                <h2 class="h2">The Mobile APP as a Flying Photographer’s Studio</h2>
                <p class="text">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> mobile App contains all the features anyone needs to make professional edits to videos and photographs on the fly, in real time. Video filters in the App allow making instant edits of videos or photos.</p>
                <p class="text">Filters in the APP include Natural, Nostalgic, Beautiful, Emboss, Lively and many more which allow instant editing of live shots. Other controls enable flyers to add music or screen flips while recording live aerial videos.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_7.jpg" alt="content_img_7"></a>
                <p class="text">One of the more intriguing innovations among the many that the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> has, is Portrait Follow. It commands the drone cameras to follow a photographed subject with a swipe on the mobile device. This is a groundbreaking command feature that allows video selfies as well as presetting focus on a moving subject.</p>
                <p class="text">Another key feature of the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> with its corresponding mobile APP is Trajectory Flight. This enables the flyer to program a predetermined flight path for the quadcopter by simply drawing it on the mobile screen. The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> will follow the flight path drawn for a predicted video recording.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_8.jpg" alt="content_img_8"></a>
                <h2 class="h2">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> is the Perfect Camera Quadcopter for Everyone</h2>
                <p class="text">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> mobile App contains all the features anyone needs to make professional edits to videos and photographs on the fly, in real time. Video filters in the App allow making instant edits of videos or photos.</p>
                <p class="text">Filters in the APP include Natural, Nostalgic, Beautiful, Emboss, Lively and many more which allow instant editing of live shots. Other controls enable flyers to add music or screen flips while recording live aerial videos.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_9.jpg" alt="content_img_9"></a>
                <p class="text">One of the more intriguing innovations among the many that the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> has, is Portrait Follow. It commands the drone cameras to follow a photographed subject with a swipe on the mobile device. This is a groundbreaking command feature that allows video selfies as well as presetting focus on a moving subject.</p>
                <p class="text">Another key feature of the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> with its corresponding mobile APP is Trajectory Flight. This enables the flyer to program a predetermined flight path for the quadcopter by simply drawing it on the mobile screen. The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> will follow the flight path drawn for a predicted video recording.</p>
                <div class="ultra_boost">
                  <div class="ultra_boost_title">How can I buy the <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a>?</div>
                  <p class="text mb-0">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> is available for a limited time only, with exclusive offers and free shipping.</p>
                  <div class="text mb-0"><span class="wrapper_blue">Ordering is quick and easy</span>, so take advantage of the great price by ordering yours today.</div>
                </div><!-- /ultra_boost -->
                <div class="wrapper_ofer">
                  <div class="offer">
                    <div class="row d-flex align-items-center">
                      <div class="col-md-4 text_offer">Special Offer</div>
                      <div class="col-md-4 center_block">
                        <span class="new_price">$99</span>
                        <span class="old_price line-through"> $198</span>
                      </div>
                      <div class="col-md-4"><span class="right_text_offer">available online only and while supplies last.</span> </div>
                    </div>
                  </div>
                  <div class="text-center"><a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-blue">Get yours now <span class="fw-700 color-yellow">with 50% discount</span> and <span class="fw-700">free shipping worldwide!</span></a></div>
                </div><!-- /wrapper_ofer -->
              </div><!-- /content -->
            </div>
            <div class="col-md-4 pl-20">
              <div class="wrapper-right-block">
                <div id="aside1" class="">
                  <div class="right-block">
                    <div class="close">X</div>
                    <div class="wrapper_right-img">
                      <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive right-img" src="./img/right-img.jpg" alt="right-img"></a>
                      <div class="valid_block">Valid today only!</div>
                    </div>
                    <div class="inner-right_block">
                      <h2 class="h2">How can I buy the <a target="_blank" href="<?php echo $order_url; ?>">Tactic AIR Drone</a>?</h2>
                      <p class="text">The <a href="<?php echo $order_url; ?>" target="_blank">Tactic AIR Drone</a> is available from the official website and for the Best Price!</p>
                      <a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-blue color-white pulse"><span class="ring"></span><span class="circle"></span>Сheck availability</a>
                    </div>
                  </div>
                </div>
              </div><!-- /wrapper-right-block -->
              <div class="flouting btn-pulse">
                <span class="ring"></span>
                <span class="circle"></span>
                <i class="demo-icon icon-basket color-light-blue"></i>
              </div>
            </div>
          </div><!-- /row-mob -->
        </div><!-- /inner_container -->
      </div><!-- /container-big -->
    </div><!-- /wrapper-content -->

    <footer id="footer">
      <div class="top_footer">
        <div class="container">
          <div class="footer_content clearfix">
            <div class="wrapper_logo_footer">
              <a class="logo_footer" href="<?php echo $order_url; ?>" target="_blank"><img src="./img/logo.png" alt="logo"></a>
            </div>
            <div class="wrapper_nav">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $order_url; ?>" target="_blank" class="">Home</a></li>
                <li><a href="<?php echo $main_url; ?>/legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank" class="">Contact</a></li>
                <li><a href="<?php echo $main_url; ?>/legal/policy.php?prod=<?php echo $product; ?>" target="_blank" class="">Privacy Policy</a></li>
                <li><a href="<?php echo $main_url; ?>/legal/term.php?prod=<?php echo $product; ?>" target="_blank" class="">Terms of Business</a></li>
              </ul>
            </div>
            <div class="copyright">© All rights reserved. <?php echo date('Y'); ?></div>
          </div>
        </div>
      </div>
    </footer>
    <img class="circle_top img-responsive" src="./img/bg/circle_yellow.png" >
    <img class="circle_bottom_left img-responsive" src="./img/bg/circle_gray.png" >
    <img class="circle_bottom_right img-responsive" src="./img/bg/circle_yellow_min.png" >
  </div><!-- /wrapper_page -->


  <a id="totop" href="#totop"><i class="demo-icon icon-angle-up"></i></a>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <!-- Javascripts ================================================== -->
  <script src="./js/main.js"></script>
  <script src="./js/jquery.social.sharing.js"></script>
  <script>
    (function(){
      var a = document.querySelector('#aside1'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
      window.addEventListener('load', Ascroll, false);
      window.addEventListener('resize', Ascroll, false);
      window.addEventListener('scroll', Ascroll, false);
      document.body.addEventListener('load', Ascroll, false);
      document.body.addEventListener('resize', Ascroll, false);
      document.body.addEventListener('scroll', Ascroll, false);
      function Ascroll() {
        if (b == null) {
          var Sa = getComputedStyle(a, ''), s = '';
          for (var i = 0; i < Sa.length; i++) {
            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
              s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
            }
          }
          b = document.createElement('div');
          var text_offsetWidth = (a.offsetWidth == 0)?'auto':a.offsetWidth + 'px;'
          b.style.cssText = s + ' box-sizing: border-box; width: ' + text_offsetWidth;
          a.insertBefore(b, a.firstChild);
          var l = a.childNodes.length;
          for (var i = 1; i < l; i++) {
            b.appendChild(a.childNodes[1]);
          }
          a.style.height = b.getBoundingClientRect().height + 'px';
          a.style.padding = '0';
          a.style.border = '0';
        }
        var Ra = a.getBoundingClientRect(),
        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
        if ((Ra.top - P) <= 0 && document.querySelector('.wrapper-right-block').scrollTop==0) {
          if ((Ra.top - P) <= R) {
            b.className = 'stop';
            b.style.top = - R +'px';
          } else {
            b.className = 'sticky';
            b.style.top = P + 'px';
          }
        } else {
          b.className = '';
          b.style.top = '';
        }
        window.addEventListener('resize', function() {
          a.children[0].style.width = getComputedStyle(a, '').width
        }, false);
      }
    })()
  </script>
</body>
</html>