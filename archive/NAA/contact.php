<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';
//include './resources/connect.php';

$_SESSION['page'] = 'contact.php';
$PAGE = $_SESSION['page'] ;
$_SESSION['NAV']= 'CONTACT';
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Contact</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/contact.css">
    <meta name = "viewport" content="width =  device-width, initial-scale:1.0">
    <link rel = icon type="image/png" href="./resources/naa.png">
<script src="./resources/script.js"></script>
  </HEAD>

  <BODY>
    <script src="./resources/conScript.js">

    </script>
    <div id="CONTAINER-1">
      <!--The first row is the height of the browser.
       It contains what users see on page load-->
      <div class="BG-COVER"></div>
      <div id="ROW-1">

        <div class="COL-3">.
        </div>
        <div class="COL-6">
          <h1 id="TITLE">Contact</h1>

        <h2 class="TEXT" style="color: #5f5f5f;">Want to hit us up?</h2>

          <div id="CONTACT-DETAILS">
            You can send us an email on <b><i style="color: black;">info@nonartyart.co.za</i></b><br> or simply
             fill out this contact form
          </div>
        </div>
      </div>

      <div id="ROW-2">
        <div class="COL-3">
          .
        </div>
        <div class="COL-6">
          <div id="CONTACT-FORM"><div class="DIV-BG"></div><br>
            <tt style="color:red;">All fields are mandatory</tt>
            <form action="./resources/redirect.php?rdr=msg" method="post" name="contact_form">
              <input name="USER_NAME" class="TEXTBOX" type="text" placeholder="Name..." required>
              <input name="USER_EMAIL" type="email" class="TEXTBOX" placeholder="Email..." required>
              <textarea name="USER_MSG" rows="9" cols="100" id="TEXT-AREA" placeholder="Message..."  required></textarea><br>
              <input type="submit" name="SEND_BUTTON" value="Send" class="BUTTON">
            </form>
          </div>
        </div>
      </div>
      <div id="ROW-3">
        <div class="COL-3">.
        </div>
        <div class="COL-6">
          <h3>Want to get a cost estimate?</h3>
          <!--Link these to the appropriate quotes application-->
          <div class="QUOTE-ICON">
            <a href="./customer.php"><p id="GD" class="TEX"  onMouseOver="expand('GD');" onMouseOut="contract('GD');">GD</p></a>
          </div>
          <div class="QUOTE-ICON">
            <a href="./customer.php">  <p id="WD" class="TEX" onMouseOver="expand('WD');" onMouseOut="contract('WD');">WD</p></a>
          </div>
          <div class="QUOTE-ICON">
            <a href="./customer.php"><p id="AD" class="TEX" onMouseOver="expand('AD');" onMouseOut="contract('AD');">AD</p></a>
          </div>
        </div>
      </div>

      <div id="FOOTER">

        <p style="position:relative; text-align:center; margin-top:0px; padding-top:10px; ">All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

      </div>

    </div>
    <div id='TOP' onclick='scrollToTop();'  style='position: fixed; cursor: pointer; opacity: 0.5; border-radius:5px; display:none; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>


  </BODY>
</HTML>
