<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
   <?php include_once 'inc_headfiles.php'; ?>
    <style type="text/css">
      #logo h1 {
        text-align: center;
      }
      #logo img{
        max-height: 80px;
        width: auto;
      }
      .footer_box .home_l{
        float: none;
      }
      .banner_txt span{
        font-size: 35pt;
      }
      .homeservices_photo {
          text-align: center;
      }
      .homeservices_photo img {
          width: 90%;
          max-width: 200px;
          max-height: 200px;
          border-radius: 200px;
      }
      .homeservices_txt {
          text-align: justify;
      }
      .home_box #title{
        color: white;
      }
      .proimg img{
        width: 98%;
        max-width: 600px;
      }
    </style>
  </head>
  <body class="bg_home">
    <div class="wapper">
      <div class="groupheader">
        <div class="header">
          <div id="logo">
            <h1><a href="index.html"><img src="images/logo.png" alt="logo"></a></h1>
          </div>
          <?php include_once 'inc_menu.php'; ?>
        </div>
      </div>
      <?php 
        $page= (isset($_GET['p']) or !empty(isset($_GET['p'])))?$_GET['p']:'home';
        // echo $page;
        if (isset($_GET['p']) or !empty(isset($_GET['p']))) {
            include_once $page.'.php';
        } else {
            include_once 'home.php';
        }
      ?>
      <?php include_once 'inc_footer.php'; ?>
    </div>
    <div id="flag">1</div>
    <div id="linktop"></div><a id="subbar" href="?p=sign-up"><img src="images/subbar.png" alt="Stay Connected"></a>
  </body>
</html>