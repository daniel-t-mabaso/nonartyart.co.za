<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';

$_SESSION['page'] = 'home.php';
$PAGE = $_SESSION['page'];
$_SESSION['NAV']= 'LOGO';
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Welcome</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/layout.css">
    <meta name = "viewport" content="width =  device-width, initial-scale:1.0">
    <link rel = icon type="image/png" href="./resources/naa.png">
    <script src="./resources/script.js"></script>
  </HEAD>

  <BODY>
    <div id="CONTAINER-1">
      <!--The first row is the height of the browser.
       It contains what users see on page load-->
      <div class="BG-COVER"></div>
      <div id="ROW-1">

        <h1 id="TITLE">Non-Artistic Art</h1><i id="MOTTO">"Designing tomorrow, today"</i>

        <h3 style="font-style: normal;
         font-weight:lighter;font-size 22px; padding:10px;">
          Just started a <strong style="font-style: italic;">new business</strong>? Want to have an <strong style="font-style: italic;">online presence</strong>? Looking
           for <strong style="font-style: italic;">affordable</strong> designs?
         </h3>
            <br>
        <div class="COL-3">
          <div class="SERVICE-ICON"><a href="graphic_design.php" target="main-frame"><div class="PROJECT-BG"></div><img src="./resources/GRAPHIC_Icon.png" width="100%" style="margin-top: 0px;"/></a></div>
          <a href="graphic_design.php" target="main-frame"><h1 class="ARROW-RIGHT">&#10095;</h1></a>
        </div>
        <div class="COL-6">
          <div class="SERVICE-ICON"><a href="web_development.php" target="main-frame"><div class="PROJECT-BG"></div><img src="./resources/web_design_icon.png" width="100%" style="margin-top: 40px;"/></a></div>
          <a href="web_development.php" target="main-frame"><h1 class="ARROW-RIGHT">&#10095;</h1></a>
        </div>
        <div class="COL-9">
          <div class="SERVICE-ICON"><a href="app_development.php" target="main-frame"><div class="PROJECT-BG"></div><img src="./resources/android_icon.png" width="100%"/></a></div>
          <a href="app_development.php" target="main-frame"><h1 class="ARROW-RIGHT">&#10095;</h1></a>
        </div>
      </div>

      <div id="ROW-2">
        <h2 class="HEADING">So you want to know more about us, hey?</h2>
        <div class="COL-6">
          <div id="ABOUT">
            <div class="NAA-ICON"><img width = '90%' src="./resources/naa.png"/></div><h3>Well, here goes...</h3>
            As <b>Non-Artistic Art</b>, we help make your creative ideas a reality. Offering interactive,  ﻿client-focused corporate identity realization and web development.<br><br>
We are a web based graphic & web development company focused on assisting start-ups and other small to medium sized businesses stand out.<br><br>If you already have an idea, we let you do the imagination while we steer you towards professional idea realization. If not, we have fun together.<br><br>
We are the guide to make sure you don't get lost but you give the directions and we all enjoy the adventure. It's what you want which we strive to make a reality after all.
          </div>
          <a href="./contact.php" style="cursor: pointer;position:relative;text-decoration:none;float:right;color:gold;"><h3 style="margin-top:15px; width: 180px; height:30px; text-align:center;padding-top:7px;background-color:#7b7b7b;box-shadow:1px 1px 1px 0px gray; font-weight:100; border: 1px solid #7b7b7b; border-radius:5px;">Let's get in touch</h3></a>
        </div>
      </div>
      <div id="ROW-3">

          <h2 class="HEADING">Have you seen our latest work?<br><p style="text-align:right; font-size:30px; color:white; padding-right:50px;">It's okay, go ahead...</p></h2>
          <div class="COL-2">

          <a href="./portfolio.php#ROW-2">  <div class="PROJECT-BOX"><div class="PROJECT-BG"></div><img src="./resources/oweekPoster.jpg"  height="100%"/></div></a>
          </div>
          <div class="COL-4">
            <a href="./portfolio.php#ROW-5"><div class="PROJECT-BOX"><div class="PROJECT-BG"></div><img src="./resources/ntlope.png"  height="100%"/></div></a>
          </div>
      </div>
      <div id="ROW-4">
        <div class="COL-6">
          <div id="workProcess">
            <h2 class="heading"><br/><u>Done in just 6 steps</u></h2>
            <img id='work' src="./resources/flowChart.png" width="400"/>
          </div>
        </div>
      </div>
      <div id="FOOTER">

        <p style="position:relative; text-align:center; margin-top:30px; "> All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

      </div>

      <div id='TOP'  onclick='scrollToTop();' style='position: fixed; opacity: 0.5; border-radius: 5px;display:none; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold; cursor: pointer;'>^</div>

    </div>
  </BODY>
</HTML>
