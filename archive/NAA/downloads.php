<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';
//include './resources/connect.php';
include './resources/fetch.php';
$_SESSION['page'] = 'downloads.php';
$PAGE = $_SESSION['page'] ;
$_SESSION['NAV']= 'DOWNLOADS';
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Downloads</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/downloads.css">
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

        <h1 id="TITLE">Downloads</h1>
        <h2 class="TEXT">Check out our latest shared applications</h2>
      </div>

      <div id="ROW-2">
          <div class="COL-3">
            <div id="DOWNLOADS-PANEL">
              <div class="DIV-BG"></div>
                <b><h3 class="HEADING">Apps</h3></b>
                <div class="SUBHEADING">Android</div>
                  <div class="DOWNLOADS-DIV">
                    <div class="DIV-BG"></div>
                    <ul>
					<?php
						$apps = fetch_android_apps();
						if ($apps && $apps.length){
							for($i = 0; $i<$apps; $i++)
								{
									echo '<li class="APP-NAME">$apps[$i] </li>';
								}
							}
						else{echo '<li class="APP-NAME">No apps available</li>';}
					?>
                    </ul>
                  </div>
                <div class="SUBHEADING">iOS</div>
                <div class="DOWNLOADS-DIV">
                  <div class="DIV-BG"></div>
                  <ul>
                    <li class="APP-NAME">No apps available</li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="COL-6">
            <div id="POPULAR-PANEL">
              <div class="DIV-BG"></div>
                <b><h3 class="HEADING">Most Popular</h3></b>
                <ul>
                           <?php

				$apps = fetch_popular();
				if ($apps && $apps.length){
					for($i = 0; $i<$apps; $i++)
						{
							echo '<li class="APP-NAME">$apps[$i] </li>';
						}
					}
				else{echo '<li class="APP-NAME">No apps available</li>';}
			  ?>
                </ul>
            </div>
            <p class="SUBHEADING">Looking for app developers?<a href="./customer.php"><P class="BUTTON">Build me an App</P></a></p>
          </div>

      </div>


      <div id="FOOTER">

        <p style="position:relative; text-align:center; margin-top:30px; ">All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

      </div>

    </div>
    <div onclick='scrollToTop();'  id='TOP' style='position: fixed; cursor: pointer; opacity: 0.5; border-radius: 5px;display:none; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>

  </BODY>
</HTML>
