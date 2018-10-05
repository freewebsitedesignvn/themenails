<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <?php include_once 'inc_headfiles.php'; ?>
  </head>
  <body>
    <div id="notification"></div>
    <div id="wrap_notifi" style="margin-top: 10px;">
      <div class="grouphomephone">
        <div class="homephone"><a href="tel:4435844970">Call for Appointment:<br>443-584-4970</a></div>
      </div>
      <div class="main">
        <div class="header">
          <div class="logo">
            <h1><a href="index.html"><img src="images/logo.png" alt="logo"></a></h1>
          </div>
          <?php include_once 'inc_menu.php'; ?>
        </div>
        <?php include_once 'inc_banner.php'; ?>
       	<?php 
            $page= (isset($_GET['p']) or !empty(isset($_GET['p'])))?$_GET['p']:'home';
            // echo $page;
            if (isset($_GET['p']) or !empty(isset($_GET['p']))) {
                include_once $page.'.php';
            } else {
                include_once 'home.php';
            }
         ?>

        <?php include_once 'inc_social.php'; ?>
      </div>
      <?php include_once 'inc_footer.php'; ?>
      
    </div>
    <div id="flag">1</div>
    <div id="linktop"></div>
		
		<!-- Signup Button -->
   <!--  <a id="subbar" href="sign-up"></a>
    <div id="subbar"><a class="menu-link" href="sign-up.html"><img src="images/subbar.png" alt="Subscribe"></a></div> -->
  </body>
</html>