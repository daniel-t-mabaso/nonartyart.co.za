<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';

$_SESSION['page'] = 'graphic_design.php';
$PAGE = $_SESSION['page'] ;
$_SESSION['NAV']= 'GD';
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Downloads</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/graphic.css">
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

        <h1 id="TITLE">Graphic Design</h1>
        <div class="COL-3">
          .
        </div>

        <div class="COL-6">
          <a href="#ROW-2" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Logos</p>
            <img class="ICON" src="resources/Logos_sample.png" width="100%"/>
          </div></a>
          <a href="#ROW-3" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Social Media</p>
            <img class="ICON" src="resources/social_sample.png" width="100%"/>
          </div></a>
          <a href="#ROW-4" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Posters</p>
            <img class="ICON" src="resources/posters_sample.png" width="100%"/>
          </div></a>
          <a href="#ROW-5" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Corporate Identity</p>
            <img class="ICON" src="resources/corporate_icon.png" width="100%"/>
          </div></a>
          <div style="width:100%;font-size:22px; float:left; margin-top:30px;">
          Want to see our latest work? <a href="./portfolio.php#JUMP-GRAPHIC"><i class="BUTTON">view</i></a></div>
        </div>
      </div>
      <div id="ROW-2">
        <div class="COL-6">
          <div class="DESIGN-ICON-1">  <img src="resources/Logos_sample.png" width="100%"/></div>
          <p class="DESIGN-INFO">Your logo plays a crucial role in your brand image. We offer affordable logo designs that make you stand out as the professionals you are.</p>
          <a href="./customer.php?category=graphic&subcategory=corporate"><div class="BUTTON-1">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-3">
        <div class="COL-6">
          <div class="DESIGN-ICON-2"><img src="resources/social_sample.png" width="100%"/></div>
          <p class="DESIGN-INFO">Look professional even on your social media with designs that complement and enhance your brand. Everything from cover photos, profile pictures, and many more.</p>
          <a href="./customer.php?category=graphic&subcategory=social"><div class="BUTTON-2">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-4">
        <div class="COL-6">
          <div class="DESIGN-ICON-1"><img src="resources/posters_sample.png" width="100%"/></div>
          <p class="DESIGN-INFO">Making major announcements, upcoming events or advertising your latest products? We design appealing print-ready and/or digital posters to help carry your message out to your audience. </p>
          <a href="./customer.php?category=graphic&subcategory=other"><div class="BUTTON-1">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-5">
        <div class="COL-6">
          <div class="DESIGN-ICON-2"><img src="resources/corporate_icon.png" width="100%"/></div>
          <p class="DESIGN-INFO">Professionalism is not only about playing the part but also about looking the part. We design everthing from logos, business cards, letter heads, etc to give your company the look and feel you  intend for it (i.e. full corporate identity development).</p>
          <a href="./customer.php?category=graphic&subcategory=corporate"><div class="BUTTON-2">
            Go
          </div></a>
        </div>
      </div>

      <div id="ROW-6">
        <div style="font-size:22px;width:100%;text-align:center;color:white; margin-top:30px;">
        Want to see our latest work? <a href="./portfolio.php#JUMP-GRAPHIC"><i class="BUTTON">view</i></a></div>
      </div>
      <div id="FOOTER">

        <p style="position:relative; text-align:center; margin-top:30px; ">All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

      </div>

    </div>
    <div id='TOP' onclick='scrollToTop();'  style='position: fixed; opacity: 0.5; cursor: pointer; display:none; border-radius: 5px; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>

  </BODY>
</HTML>
