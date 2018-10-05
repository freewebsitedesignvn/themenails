<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <?php include_once 'inc_headfiles.php'; ?>
  </head>
  <body>
    <div class="main" style="margin-top: 10px;">
      <div class="mainbox">
        <div class="grouplogo">
          <a id="book-button" href="?p=book-appointment"></a>
          <div id="logo">
            <h1><a href="?p=home"><img src="images/logo.png" alt="logo"></a></h1>
          </div>
          <div class="homephone"><br><br><a href="tel:9739823552">Call Us: (973) 98-BELLA (23552)</a></div>
          <?php include_once 'inc_menu.php'; ?>
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
    </div>
    <?php include_once 'inc_footer.php'; ?>
    <div id="flag">1</div>
    <div id="linktop" style="display: none;"></div>
  </body>
</html>