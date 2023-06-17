<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';

$_SESSION['page'] = 'web_development.php';
$PAGE = $_SESSION['page'] ;
$_SESSION['NAV']= 'WD';
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Downloads</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/web.css">
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

        <h1 id="TITLE">Web Development</h1>
        <div class="COL-3">
          .
        </div>

        <div class="COL-6">

          <a href="#ROW-2" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Basic</p>
            <img class="ICON" src="resources/basic_icon.png" width="100%"/>
          </div></a>

          <a href="#ROW-3" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Advanced</p>
            <img class="ICON" src="resources/advanced_icon.png" width="100%"/>
          </div></a>
          <a href="#ROW-4" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Business</p>
            <img class="ICON" src="resources/business_icon.png" width="100%"/>
          </div></a>
          <a href="#ROW-5" target="main-frame"><div class="DESIGN-DIV">
            <p class="SUBHEADING">Custom</p>
            <img class="ICON" src="resources/custom_icon.png" width="100%"/>
          </div></a>
          <div style="width:100%;font-size:22px; float:left; margin-top:30px;">
          Want to see our latest work? <a href="./portfolio.php#ROW-5"><i class="BUTTON">View</i></a></div>
        </div>
      </div>
      <div id="ROW-2">
        <div class="COL-6">
          <div class="DESIGN-ICON-1"><img src="resources/basic_icon.png" width="100%"/></div>
          <p class="DESIGN-INFO">The <i>Basic Package</i> is recommended for start-ups and small businesses. It includes a simple informative design with a maximum of 3 pages. It also includes mail functionality for a contact form.</p>
          <a href="./customer.php?category=web"><div class="BUTTON-1">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-3">
        <div class="COL-6">
          <div class="DESIGN-ICON-2"><img src="resources/advanced_icon.png" width="100%"/></div>
          <p class="DESIGN-INFO">The <i>Advanced Package</i> is suitable for small-medium sized businesses and includes a 4 - 7 page design with mail functionality and an integration with a database. This is useful for user/admin login systems, enalbes easier site maintanence, and many other functions.</p>
          <a href="./customer.php?category=web"><div class="BUTTON-2">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-4">
        <div class="COL-6">
          <div class="DESIGN-ICON-1"><img src="resources/business_icon.png" width="100%"/></div>
          <p class="DESIGN-INFO">The <i>Business Package</i> is suitable for medium-large scale businesses that want to automate most of their business processes while giving their clients the best user experience. It can includes a 8-15 page design with interactive chatting tools, a client management system and online ordering amongst other things.</p>
          <a href="./customer.php?category=web"><div class="BUTTON-1">
            Go
          </div></a>
        </div>
      </div>
      <div id="ROW-5">
        <div class="COL-6">
          <div class="DESIGN-ICON-2"><img src="resources/custom_icon.png" width="100%"/></div>
          <p class="DESIGN-INFO">For businesses/individuals requiring an automated web-system that is tailor-made to meet their specific requirements however bizzare and complex they may be, the <i>Custom Package</i> is sure to do the job.</p>
          <a href="./customer.php?category=web"><div class="BUTTON-2">
            Go
          </div></a>
        </div>
      </div>

      <div id="ROW-6">
        <div style="font-size:22px;width:100%;text-align:center;color:white; margin-top:30px;">
        Want to see our latest work? <a href="./portfolio.php#ROW-5"><i class="BUTTON">View</i></a></div>
      </div>


      <div id="FOOTER">

        <p style="position:relative; text-align:center; margin-top:30px; ">All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

      </div>

    </div>

    <div onclick='scrollToTop();' id='TOP' style='position: fixed; cursor: pointer; opacity: 0.5; display:none;border-radius: 5px; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>

  </BODY>
</HTML>
