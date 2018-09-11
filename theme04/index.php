<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no"><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <?php include "inc_headfiles.php"?>
  </head>
  <body>
    <div id="notification"></div>
    <div id="wrap_notifi">
      <div class="groupmain">
        <div class="main">
          <div class="mainbox">
            <div class="header">
              <div id="logo">
                <h1><a href="index.html"><img src="images/logo.png" alt="logo"></a></h1>
              </div>
              <?php include "inc_menu.php"?>
              <!-- <div class="header_img"><img src="images/stone.png" alt=""></div> -->
            </div>
            <!-- <div class="groupcontent groupcontent_pages" > -->
            <?php 
              $page= (isset($_GET['p']) or !empty(isset($_GET['p'])))?$_GET['p']:'home';
              // echo $page;
              if (isset($_GET['p']) or !empty(isset($_GET['p']))) {
                  include_once $page.'.php';
              } else {
                  include_once 'home.php';
              }
        
            

             ?>
            <!-- </div> -->
          </div>
        </div>
        <?php include "inc_footer.php"?>
      </div>
      <div id="flag">1</div>
      <!-- <div id="linktop"></div>--><a id="subbar" href="?p=sign-up"><img src="images/subbar.png" alt="Subscribe"></a>
    </div>
  </body>
</html>