var image;
var count=1;
var changebackground = setInterval(function(){
	image= document.getElementById('background-image');
	if (count>=5)
		count=1;
		
	image.src = "./resources/images/bg"+ count +".jpg";
					
	},10000);
	
window.addEventListener('scroll', function(){scrolling();});
document.getElementById('to-top-button').addEventListener('click',function(){scrollToTop();});
var scrollOn = false;
var top;
function scrolling()
  {
    if(this.scrollY>300)
    {document.getElementById('to-top-button').style.display = 'block';scrollOn = true;}
    else
    {
      if(scrollOn)
        document.getElementById('to-top-button').style.display = 'none';
      scrollOn = false;
    }

  }
function scrollToTop(){
  if(document.body.scrollTop !==0 || document.documentElement.scrollTop !== 0)
    {
      window.scrollBy(0, -200);
      requestAnimationFrame(scrollToTop);
    }
}

var loaded = false;
var menuOn =false;
var but = document.getElementById('hamburger');
but.addEventListener('click', function(){toggleMenuOnClick();});
window.addEventListener('resize', function(){toggleMenuOnResize();});
window.addEventListener('load', function(){toggleMenuOnResize();});
var menus = document.getElementsByClassName('nav-link');
function toggleMenuOnResize(){
	if (window.innerWidth < 1080){
		for(var i=0; i< menus.length; i++){
			menus[i].style.display = 'none';
		}
		but.style.display = 'inline-block';
		menuOn = false;
		if (!loaded)
		loaded = true;
	}
	else{
		
		for(var i=0; i< menus.length; i++){
			menus[i].style.display = 'inline';
		}
		but.style.display = 'none';
		menuOn = true;
	}	
}

function toggleMenuOnClick(){
	if(menuOn){
		for(var i=0; i< menus.length; i++){
			menus[i].style.display = 'none';
		}
		menuOn = false;
	}
	else{
		for(var i=0; i< menus.length; i++){
			menus[i].style.display = 'inline-block';
		}
		menuOn = true;
		
	}
} 