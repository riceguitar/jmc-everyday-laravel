<!DOCTYPE html>
<html>
  <head>
    <title>Living With Purpose</title>

    <!-- Typekit -->
    <script src="https://use.typekit.net/tep7pdp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/bower_components/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/bower_components/slick-carousel/slick/slick-theme.css"/>
    

    <!-- Javascript -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="assets/js/everyday.js"></script>

  </head>

  <body>
    <header id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <a href="/"><!-- @todo URL should switch between homepage and main account dashboard -->
              <img src="assets/images/ewp-logo.png" class="ewp-logo" alt="Everyday with Purpose" />
            </a>
          </div>
          <div class="col-sm-6 text-right">
            <!-- @todo Toggle Menus depending on login/out status -->

            <!-- Logged Out Users -->
            <a class="btn btn-highlight" href="">Buy</a>
            <a class="btn btn-reverse" href="">Contact Us</a>
            <a class="btn btn-reverse" href="">Logout</a>

            <?php /*
            <!-- Logged in Users -->
            <a class="btn btn-reverse">My Account</a>
            <a class="btn btn-reverse">Logout</a>
            */ ?>

          </div>
        </div>
      </div>
    </header>
