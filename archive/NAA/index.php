<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';
if(isset($_SESSION['NAV']))
$NAV = $_SESSION['NAV'];
else {
  $NAV = 'LOGO';
}
if(isset($_SESSION['page'])){
$PAGE = $_SESSION['page'] ;}
else{$PAGE = './home.php';}
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Welcome</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <meta name = "viewport" content="width =  device-width, initial-scale:1.0">
    <link rel = icon type="image/png" href="./resources/naa.png">
  </HEAD>

  <BODY>
    <div id="CONTAINER-1">
      <div id="SOCIAL-BAR">
        <a href="http://facebook.com/nonartyart"><img src="./resources/facebook.png" width="32"/></a>&nbsp;&nbsp;
        <a href="https://www.youtube.com/channel/UCRgn-Bo0UfcRV-XoZdiS7VA"><img width="32" src="./resources/youtube.png"/></a>
      </div>
     <div style='position: fixed; top: 100px; left: 0px; background-color: yellow; border-radius: 0px 5px 5px 0px; padding: 5px;border: 1px solid black;'>
        <a href='http://nonartyart.co.za/NAA/feedback' target='new'>Tester Feedback</a>
     </div>
        <div id="TIPS-BG"></div>
        <div id="CLOSE" onClick="toggleTipsWindow();">X</div>
        <div id="TIPS">
          <p style="padding: 10px;text-align:center; font-weight: bolder; margin:0px; font-size: 20px; color: #3b3b3b;">Useful tips...</p>
          <p id="CHANGING_TIPS" style="text-align: center; font-family: monospace; font-size: 16px; color: #dfdfdf;">&nbsp;</p>
        </div>

      <!--Header is fixed at the top to the page. Opague until hover-->
      <div id="HEADER-BG"></div>
      <div id="HEADER">

        <div id="LOGO" onClick = "currentPage('LOGO');">
          <div class="NAA-ICON"><a href="./home.php" target="main-frame"><img style="width:150%;" src="./resources/naa_white.png"/></a></div>
          <p class="TEXT">Non Artistic Art</p>
        </div>

        <ul id="MENU">
          <p class="TEXT">MENU</p>
          <a href="./portfolio.php" target="main-frame" onClick = "currentPage('PORTFOLIO');">
            <li  class="MENU-ITEM" id="PORTFOLIO" >
              Portfolio
              <ul class="MENU-ITEM-EXPAND">
              <a href="./portfolio.php#ROW-2" target="main-frame" onClick = "currentPage('PORTFOLIO');"><li class="MENU-SUBITEM">Posters</li></a>
                <a href="./portfolio.php#ROW-3" target="main-frame" onClick = "currentPage('PORTFOLIO');"><li class="MENU-SUBITEM">Logos</li></a>
                <a href="./portfolio.php#ROW-4" target="main-frame" onClick = "currentPage('PORTFOLIO');"><li class="MENU-SUBITEM">Other Designs</li></a>
                <a href="./portfolio.php#ROW-5" target="main-frame" onClick = "currentPage('PORTFOLIO');"><li class="MENU-SUBITEM">Websites</li></a>

              </ul>
            </li>
          </a>
          <a href="./graphic_design.php" target="main-frame" onClick = "currentPage('GD');"><li class="MENU-ITEM" id="GD" >Graphic Design</li></a>
          <a href="./web_development.php" target="main-frame"><li class="MENU-ITEM" id="WD" onClick = "currentPage('WD');">Web Dev</li></a>
          <a href="./app_development.php" target="main-frame"><li class="MENU-ITEM" id="AD" onClick = "currentPage('AD');">App Dev</li></a>
          <a href="./downloads.php" target="main-frame"><li class="MENU-ITEM" id="DOWNLOADS" onClick = "currentPage('DOWNLOADS');">Downloads</li></a>
          <a href="./contact.php" target="main-frame"><li class="MENU-ITEM" id="CONTACT" onClick = "currentPage('CONTACT');">Contact</li></a>
          <a href="./customer.php" target="main-frame"><li class="MENU-ITEM" style="background-color:gold; box-shadow: 1px 1px 1px 2px gold;"  id="CUSTO" onClick = "currentPage('CUSTO');">Customer</li></a>
        </ul>

      </div>


<iframe name="main-frame" src="<?php echo $PAGE;?>" width="99.7%" height="94%" style="margin-top:40px;"></iframe>
<script src="./resources/script.js"></script>
<script>
window.onLoad
{
  //hide tips window
  toggleTipsWindow();
  setTimeout(toggleTipsWindow, 5000);
  currentPage('<?php echo $NAV;?>');
  //hide signIn, Quote and order windows
}</script>
</html>
