<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->
<?php
include './resources/session.php';

$_SESSION['page'] = 'portfolio.php';
$PAGE = $_SESSION['page'] ;
?>
<!--all IDs are uppercase only-->
<HTML>
  <HEAD>
    <TITLE> Non-Artistic Art | Downloads</TITLE>
    <link rel = stylesheet type="text/css" href="./resources/structure.css">
    <link rel = stylesheet type="text/css" href="./resources/portfolio.css">
    <meta name = "viewport" content="width = device-width, initial-scale:1.0">
    <link rel = icon type="image/png" href="./resources/naa.png">
<script src="./resources/script.js"></script>
  </HEAD>

  <BODY>
    <div id="CONTAINER-1">
      <!--The first row is the height of the browser.
       It contains what users see on page load-->
      <div class="BG-COVER"></div>
      <div id="ROW-1">

        <h1 id="TITLE">Portfolio</h1>
        <h2 class="TEXT">Check out our latest work</h2>
        <div class="COL-3">

        </div>
        <div class="COL-6">
          <div id="NAVIGATION">
            <a href="#ROW-2"><p class="ITEM">
              Posters
            </p></a>
            <a href=#ROW-3><p class="ITEM">
              Logos
            </p></a>
            <a href="#ROW-4"><p class="ITEM">
              Social Media
            </p></a>

            <a href="#ROW-5"><p class="ITEM">
              Web Dev
            </p></a>
          </div>

        </div>
      </div>
      <div id="JUMP-GRAPHIC"></div>

      <div id="ROW-2">

        <div class="COL-6">
          <h2>Posters</h2>
          <a class="N-P_1" onclick="next('POSTER',-1)">&#10094;</a><a class="N-P_2" onclick="next('POSTER',1)">&#10095;</a>
      <div id="POSTER-DIV">
  		  <div class="POSTER">
                <img src="./resources/closing service_2.png" style="margin-top: 3px;" height="90%"/>
            </div>
  		   <div class="POSTER">
                <img src="./resources/3_9_16_Service_002.png" height="90%"/>
            </div>

  		  <div class="POSTER">
                <img src="./resources/Christ_Radicals_poster_sample_sep_CR_yellow.jpg"  height="90%"/>
            </div>

		<div class="POSTER">
			<img src="./resources/flyer.jpg"  height="90%"/>
		</div>

            </div>
          </div>


      </div>

      <div id="ROW-3">        <div class="COL-6">
          <h2>Logos</h2>
          <a class="N-P_1" onclick="next('LOGO',-1)">&#10094;</a><a class="N-P_2" onclick="next('LOGO',1)">&#10095;</a>
		  <div id="LOGO-DIV">
   <div class="LOGO">
          <img src="./resources/NTLope_stack_black.png" height="90%"/>
      </div>
  		  <div class="LOGO">
                <img src="./resources/draft002_c.png" style="margin-top: 3px;" height="90%"/>
            </div>
  		  <div class="LOGO">
                <img src="./resources/cr.png"  height="90%"/>
            </div>

		<div class="LOGO">
			<img src="./resources/desin002.png"  height="90%"/>
		</div>

            </div>
        </div>
		</div>
      <div id="ROW-4">
        <div class="COL-6">
          <h2>Social Media</h2>
          <a class="N-P_1" onclick="next('SOCIAL',-1)">&#10094;</a><a class="N-P_2" onclick="next('SOCIAL',1)">&#10095;</a>
		  <div id="MEDIA-DIV">  <div class="SOCIAL"><img src='./resources/majahSocial.png' height='90%'/>
      </div> <div class="SOCIAL"><h1>Unavailable</h1>
      </div> <div class="SOCIAL"><h1>Unavailable</h1>
      </div>  <div class="SOCIAL"><h1>Unavailable</h1>
      </div>
            </div>
        </div>
      </div>
      <div id="ROW-5">
        <div class="COL-6">
          <h2>Web Development</h2>
          <a class="N-P_1" onclick="next('WEB',-1)">&#10094;</a><a class="N-P_2" onclick="next('WEB',1)">&#10095;</a>
		  <div id="WEB-DIV">
  		  <div class="WEB"><img src="./resources/myhub.png"  height="90%"/>
        </div> <a href="http://nonartyart.co.za/ntlope" target='new'> <div class="WEB"><img src="./resources/ntlope.png"  height="90%"/>
        </div></a>  <a href='http://nonartyart.co.za/archive'><div class="WEB"><img src="./resources/nonartisticart.png"  height="90%"/>
           </div></a>  <div class="WEB"><h1>Unavailable</h1>
           </div>
        </div>
      </div>

    </div>
    <div id="FOOTER">
            <p style="position:relative; text-align:center; margin-top:30px; ">All rights reserved &nbsp;|&nbsp; <a href="http://www.nonartyart.co.za/documents/termsOfService.pdf">Terms of service</a></p>

          </div></div>
          <div id='TOP' onclick='scrollToTop();'  style='position: fixed; cursor: pointer; opacity: 0.5; display:none; border-radius: 5px; width: 50px; height: 30px; z-index: 3; text-align:center;background-color: black; color: white;box-shadow: 1px 1px 3px 0px #7b7b7b;border: 1px solid white; bottom: 50px; right: 40px; padding-top: 3px;font-size: 50px; font-weight: bold;'>^</div>

    <script>
    var slideIndex1 = 0;
    var slideIndex2 = 0;
	var slideIndex3 = 0;
	var slideIndex4 = 0;
	window.addEventListener('resize', function(event){showAll();}, true);
	function showAll(){
		var i;
        var x = document.getElementsByClassName('LOGO');
        var y = document.getElementsByClassName('POSTER');
        var z = document.getElementsByClassName('SOCIAL');
        var a = document.getElementsByClassName('WEB');
		if(window.innerWidth < 736){
			for (i =1 ; i< x.length; i++){
			  x[i].style.display = "none";
			  y[i].style.display = "none";
			  z[i].style.display = "none";
			  a[i].style.display = "none";
			}
		}
		else
		{
			for (i =0 ; i< x.length; i++){
				x[i].style.display = "block";
				y[i].style.display = "block";
				z[i].style.display = "block";
				a[i].style.display = "block";
			}
		}
	}
    function next(klass, n){
        var i;
        var x = document.getElementsByClassName(klass);

			for (i =0 ; i< x.length; i++){
			  x[i].style.display = "none";
			}


        switch (klass)
			{
				case 'POSTER':
					slideIndex1 += n;
			        if(slideIndex1 >= x.length )
						{
							slideIndex1 = 0;
						}
					else if( slideIndex1 < 0)
						{
							slideIndex1 = x.length -1;
						}
					x[slideIndex1].style.display = "block";
					break;
				case 'LOGO':
					slideIndex2 += n;
					if(slideIndex2 >= x.length)
						{
							slideIndex2 = 0;
						}
					else if( slideIndex2 < 0)
						{
							slideIndex2 = x.length -1;
						}
					x[slideIndex2].style.display = "block";
					break;
				case 'SOCIAL':
					slideIndex3  += n;
					if(slideIndex3 >= x.length)
						{
							slideIndex3 = 0;
						}
					else if( slideIndex3 < 0)
						{
							slideIndex3 = x.length -1;
						}
					x[slideIndex3].style.display = "block";
					break;
				case 'WEB':
					slideIndex4 += n;
					if(slideIndex4 >= x.length)
						{
							slideIndex4 = 0;
						}
					else if( slideIndex4 < 0)
						{
							slideIndex4 = x.length-1;
						}
					x[slideIndex4].style.display = "block";
					break;
			}


      }
    </script>
  </BODY>
</HTML>
