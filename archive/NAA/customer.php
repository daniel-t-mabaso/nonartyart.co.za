<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';

$_SESSION['page'] = 'customer.php';
$_SESSION['NAV']= 'CUSTO';
$PAGE = $_SESSION['page'] ;?>

<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Customer</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/customer.css">
    <meta name = "viewport" content="width =  device-width, initial-scale:1">
    <link rel = icon type="image/png" href="./resources/naa.png">
    <script src="./resources/script.js"></script>
    <script src="./resources/custScript.js"></script>

  </HEAD>

  <BODY>

    <div class="BLUR"  style="display:none;" onClick="clearScreen();"></div>

    <div id="signInBackground" style="display:none;"></div>
    <div id="signInWindow" style="display:none;">
      <p style="padding: 10px;text-align:center; font-weight: bolder; margin:0px; font-size: 20px; color: #fcfcfc;">Sign In</p>
      <p style="padding: 10px;text-align:center; font-weight: bolder; margin:0px; font-size: 14px; color: #fcfcfc;">Enter the email you used to sign up as a tester</p>
      
      <form style="margin-top: 30px;"  method="post" action="./resources/redirect.php?rdr=TesterLogIn">
        <input type="text" class="TEXT_BOX" name="email" placeholder="email..." required></input><br/>
        <!--<input type="password" class="TEXT_BOX" name="password" placeholder="Password..." required></input><br/>-->
        <input type="submit" id="SIGN-IN" name="submit" value='Sign In'></input>
      </form>
      <p id="CLOSE-signIn" onClick="toggleSignIn();">Cancel</p>
      <!--<a href="#" onclick="toggleRegister(); return false;"><p style="background-color:#cfcfcf; width: 120px; height: 20px; margin: auto;margin-top: 5px; border-radius: 5px;">New Customer</p></a>-->
    </div>

    <div id="quoteBackground" style="display:none;"></div>
    <div id="quoteWindow" style="display:none;">
      <p style="padding: 10px;text-align:center; font-weight: bolder; margin:0px; font-size: 20px; color: #fcfcfc;">Estimates</p>
      <p style="text-align: left; color: gold;padding-left: 20px; padding-top: 10px;padding-bottom: 10px;">Service: <b id='SER'></b><br/><br/>Promo discount:&nbsp; <?php
      require_once('./resources/connect.php');
      $query = @"SELECT value FROM promo_code WHERE code = '$promoCode'";
      $result = mysql_query($query);
      if($result)
        {
          while($row = mysql_fetch_array($result))
            {
              $discount = $row['value'];
              echo "-$discount";
              die;
            }
        }
       ?><br/><br/>Estimated cost: <?php
       require_once('./resources/connect.php');
       $query = @"SELECT service_cost FROM 'services' WHERE service_name = 'Logo Design'";
       $result = mysql_query($query);
       if($result)
         {
           while($row = mysql_fetch_array($result))
             {
               echo $row['service_cost'];
               die;
             }
         }
        ?></p>
      <input type="submit" id="ORDER-quote" <?php if($LOGGEDIN)
        {
          echo 'onclick = "document.orderForm.submit();";';
        }
        else
        {
          echo 'onclick="toggleSignIn(); return false;"';
        }?> value="Order"></input>
      <p id="CLOSE-quote" onClick="toggleQuote();">Cancel</p>
    </div>

    <div id="NUBackground" style="display:none;"></div>
    <div id="NUWindow" style="display:none;">
      <p style="padding: 10px;text-align:center; font-weight: bolder; margin:0px; font-size: 20px; color: #fcfcfc;">New Customer</p>
      <form style="margin-top: 30px;" method="post" action="./resources/redirect.php?rdr=NU">

        <input type="text" class="TEXT_BOX" name="NAME" placeholder="First Name(s)..." required></input><br/>
        <input type="text" class="TEXT_BOX" name="SURNAME" placeholder="Surname..." required></input><br/>
        <input type="email" class="TEXT_BOX" name="email" placeholder="email..."></input><br/>
        <input type="text" class="TEXT_BOX" name="cell" placeholder="cell..."></input><br/>
        <input type="checkbox" name="RSAC" checked="true" id="RSAC" onClick="RSACitizen();" value="South African citizen">South African citizen</input><br/>
        <input type="text" class="TEXT_BOX"  name="RSAID" id="SAID" placeholder="RSA ID..." ></input><br/>
        <input type="text" class="TEXT_BOX" id="PASSPORTNO" name="PASSPORTNO" placeholder="Passport #..."></input><br/>
        <input type="text" class="TEXT_BOX" id="CCODE" name="COUNTRY" placeholder="Country Code..."></input><br/>
        <input type="checkbox"  name="asCompany"  onClick="AsCompany();" id="ASC"value="Registering as company">Registering as company</input><br/>

        <input type="text" class="TEXT_BOX" name="COMPANY" id="COMPANY" placeholder="Company Name..."></input><br/>
        <input type="text" class="TEXT_BOX" name="REGISTRATIONNO" id="REGISTRATIONNO" placeholder="Registration #..."></input><br/>
        <input type="submit" id="SIGN-IN" name="submit" value='Register'></input>
      </form>
      <p id="CLOSE-signIn" onClick="toggleRegister();">Cancel</p>
    </div>
    <div id='confirmationWin' style='display: none;'>
      <div id='confBG'></div>
      <div id="confirmationText">Some message!</div>
      <p id='confCLOSE' onclick="toggleConfirm('hide');">OK</p>
    </div>
    <script>

    function toggleConfirm(a)
      {
        var win = document.getElementById('confirmationWin');
        var text = document.getElementById('confirmationText');
        toggleBlur();
        switch(a){
          case 'Order':
            win.style.display = 'block';
            text.innerHTML = 'Order successful!';
            break;
          case 'LogIn':
            win.style.display = 'block';
            text.innerHTML = 'Sign in successful!';
            break;
          case 'LogOut':
            win.style.display = 'block';
            text.innerHTML = 'Sign out successful!';
            break;
          case 'Registered':
            win.style.display = 'block';
            text.innerHTML = 'Successfully registered!';
            break;
          case 'IncDetails':
            win.style.display = 'block';
            text.innerHTML = 'Incorrect details!';
            document.getElementById('confBG').style.backgroundColor = 'red';
            text.style.color = 'white';
            break;
          case 'NotRegistered':
            win.style.display = 'block';
            document.getElementById('confBG').style.backgroundColor = 'red';
            text.innerHTML = 'Not registered!';
            text.style.color = 'white';
            break;
          case 'Success':
            win.style.display = 'block';
            text.innerHTML = 'Successful!';
            break;
          case 'hide':
            win.style.display = 'none';
            break;
          default:
            win.style.display = 'block';
            text.style.color = 'white';
            document.getElementById('confBG').style.backgroundColor = 'red';
            text.innerHTML = 'Error: unknown process!';
            break;
        }
      }

      var accountOn = false;
      function toggleAccount()
        {
          if(projectsOn)
            toggleProjects();
          var accountInfo = document.getElementById('accountInfo');
          var expand = document.getElementById('accEx');

          if(accountOn){
            accountInfo.style.display = 'none';
            expand.innerHTML = '+';
            accountOn = false;
          }
          else{
            accountInfo.style.display = 'block';
            expand.innerHTML = '-';
            accountOn = true;
          }
        }
      var projectsOn = false;
      function toggleProjects()
        {
          if(accountOn)
            toggleAccount();
          var projectsInfo = document.getElementById('projectsInfo');
          var expand = document.getElementById('projEx');

          if(projectsOn){
            projectsInfo.style.display = 'none';
            document.getElementById('projects').style.borderRadius = '0px 0px 10px 10px';
            expand.innerHTML = '+';
            projectsOn = false;
          }
          else{
            projectsInfo.style.display = 'block';
            document.getElementById('projects').style.borderRadius = '0px';
            expand.innerHTML = '-';
            projectsOn = true;
          }
        }
      toggleQuote();
      toggleRegister();
      toggleSignIn();//toggleSignIn is second because of code that allows interchanging between sign in and quote when wanted to process an order without having logged in.
      AsCompany();
      RSACitizen();
      //toggleOrder();


      </script>
    <div id="CONTAINER-1">
      <!--The first row is the height of the browser.
       It contains what users see on page load-->
      <div class="BG-COVER"></div>
      <div id="ROW-1">

        <h1 id="TITLE">Customer</h1>
        <h2 class="TEXT">
          <?php

            if($LOGGEDIN){
              echo "Welcome back!<br><a href='./resources/redirect.php?rdr=logout'>Sign out</a>";
            }else{
              echo 'Hi tester, you are not signed in! <b onClick="toggleSignIn();" style="color: blue; cursor: pointer;">Sign In</b>';
            }
          ?></h2>
      </div>
      <div id="ROW-2">
            <div class="COL-6">
                <div id="NEW_PROJECT">
                  <div class="DIV-BG"></div>
                  <p class="SUBTITLE">New Project</p>
                  <div id="SPAN">
                  <div class="SELECT_SERVICE">
                    <!--<p class="TEXT_2">Category: </p>
                    <form method="post">
                    <select class="DROP" id ="CATEGORY">
                      <option value="GD">Graphic Design</option>
                      <option value="WD">Web Development</option>
                      <option value="AD">App Development</option>
                    </select>
                  </form>-->


                    <form action="./resources/redirect.php?rdr=order&id=<?php echo$CUST_ID?>" method="post" name="orderForm" style=" text-align: center;">
                      <div style="text-align: center; margin: 0 auto;">
                        <div id="cat" style="font-size: 14px; width: 130px; text-align: left; border-radius: 5px; border: 1px solid white; padding: 5px;float: left; position: relative; margin-left:29px; margin-top: 5px;">
                          <label style="font-weight: bold;">Category</label><br/>
                          <input type="radio" value="Graphic Design" name='categoryRadio' onclick="changeCategory();" <?php if (!isset($_GET['category']) || $_GET['category']=='graphic'){echo 'checked';}?>>Graphic Design</input><br/>
                          <input type="radio" value="Web Development" name='categoryRadio' onclick="changeCategory();" <?php if (isset($_GET['category']) && $_GET['category']=='web'){echo 'checked';}?>>Web Dev</input><br/>
                          <input type="radio" value="App Development" name='categoryRadio' onclick="changeCategory();" <?php if (isset($_GET['category']) && $_GET['category']=='app'){echo 'checked';}?>>App Dev</input>
                        </div>
                        <div id="subCat" style="font-size: 14px; width: 130px; text-align: left; margin-left:33px; border-radius: 5px; border: 1px solid white; padding: 5px; margin-top: 5px; margin-left:29px; float: left; position: relative;">
                          <label style="font-weight: bold; margin-top: 25px;">Subcategory</label><br/>
                          <input type="radio" value="Social Media" name='subCategoryRadio' onclick="changeServices();" <?php if (!isset($_GET['subcategory']) || (isset($_GET['subcategory']) && $_GET['subcategory']=='social')){echo 'checked';}?>>Social Media</input><br/>
                          <input type="radio" value="Corporate" name='subCategoryRadio' onclick="changeServices();" <?php if (isset($_GET['subcategory']) && $_GET['subcategory']=='corporate'){echo 'checked';}?>>Corporate ID</input><br/>
                          <input type="radio" value="Other" name='subCategoryRadio' onclick="changeServices();" <?php if (isset($_GET['subcategory']) && $_GET['subcategory']=='other'){echo 'checked';}?>>Other</input>
                        </div>
                    </div>
                    <div>
                    <!--<p class="TEXT_2">&nbsp;&nbsp;&nbsp;&nbsp;Service: </p>-->
                    <select class="DROP" id="SELECTED_SERVICE"name="SERVICE">

                    </select></div><script>  changeCategory();</script>
                  </div>
                  <div id="CONFIRM" >
                    <!--<p class="TEXT_2">Promo code:</p>-->
                    <input class="TEXT_BOX" type="text" name="promo" placeholder="Promo Code..."></input>
                    <p  id="QUOTE" onclick="toggleQuote();">Get Estimate</p>
                    <p <?php if($LOGGEDIN)
                      {
                        echo 'onclick="toggleQuote();"';
                      }
                      else
                      {
                        echo 'onclick="toggleSignIn();"';
                      }?> id="ORDER" style="margin: auto; margin-top:5px;">Place Order</p>
                  </form>
                  </div>
                </div>
                </div>
              </div>
        <div class="COL-3">
          <ul id='accountDiv'>

            <li id='account' onclick="toggleAccount();">My Account<b id='accEx' class='expand'>+</b></li>
              <ul id='accountInfo' style="display: none;">
                <div class='accountDivBG'></div>
                <?php if($LOGGEDIN){ echo '<li class="accountInfo">Name:&nbsp;<i>'; if(isset($USER))echo $USER;else echo '-';echo '</i></li>
                <li class="accountInfo">Email:&nbsp;<i>'; if(isset($EMAIL))echo $EMAIL;else echo '-';echo '</i></li>
                <li class="accountInfo">Cell:&nbsp;<i>'; if(isset($CELL) && $CELL!='')echo $CELL;else echo '-';echo '</i></li>
                <li class="accountInfo">Company:&nbsp;<i>';if(isset($COMPANY) && $COMPANY!='')echo $COMPANY;else echo '-';echo '</i></li>';}else{echo '<li class="accountInfo">Not signed in!</li>';}?>
                <li class='accountInfo'></li>
              </ul>


            <li id='projects' onclick="toggleProjects();">My Projects<b id="projEx" class='expand'>+</b></li>
              <ul id='projectsInfo' style="display: none;">
                <div class='accountDivBG'></div>
                <?php
                  require_once('./resources/connect.php');
                  if($LOGGEDIN){
                    $query = "SELECT * FROM projects WHERE customer_id = $CUST_ID";
                    $result = mysql_query($query);
                    if($result)
                      {
                        $count = 0;
                        while($row = mysql_fetch_array($result))
                          {$count++;
                            $y = substr($row['start_date'],8);
                            $x = ' | '.$row['service_id'];
                              if($count < 10){
                              echo '<li  class="projectsInfo"><img width="16" alt="project Status" style="padding-right: 5px;" src="./resources/';
                              switch($row['progress'])
                                {
                                  case 'Awaiting deposit':
                                    echo 'deposit_icon.png';
                                    break;
                                  case 'in_progress':
                                    echo 'working_icon.png';
                                    break;
                                  case 'finalizing':
                                    echo 'finalizing_icon.png';
                                    break;
                                  case 'done':
                                    echo 'done_icon.png';
                                    break;

                                }
                              echo "\"/>$y<b style='font-size:19px; color: blue; font-weight: normal;'>$x</b></li>";}
                              else{
                                echo '<li style="position: relative; z-index: 2; text-decoration: underline; font-size: 22px;text-align: center; font-weight: lighter; color: white;"><a style="color: white;" href="">More</a></li>';
                                break;
                              }
                          }
                          if($count ==0)
                          echo '<li class="projectsInfo">No projects available</li>';


                      }
                    else
                      {
                        echo '<li class="projectsInfo">No projects available</li>';
                      }
                  }
                  else
                    {
                      echo '<li class="projectsInfo">Not signed in!</li>';
                    }
                 ?>
                   <li class="projectsInfo"></li>
              </ul>

          </ul>
        </div>

      </div>



    </div>

        <?php
          if(isset($_GET['CONFIRM']))
            {
              $task = $_GET['CONFIRM'];

              echo "<script>toggleConfirm('$task');</script>";

            }

        ?>
<div onclick='scrollToTop();'  id='TOP' style='position: fixed; opacity: 0.5; cursor: pointer; display:none;border-radius: 5px; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>
      <script>toggleAccount();</script>
  </BODY>
</HTML>
