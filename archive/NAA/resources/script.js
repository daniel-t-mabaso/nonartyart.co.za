/* script for index.php*/
var x = 0;
var tipsOn = true;//tips window shows by default
var init= false;
window.addEventListener('scroll', function (){scroll();}, false);
function changeTips(){
  var tips = ['We\'re done if you see <img width="32" src="resources/done_icon.png"/>','Get discounts by<br/>placing your orders online.','Awaiting deposit if you see <img width="32" src="resources/deposit_icon.png"/>', 'Check current project<br/>status by signing in.','Give feedback on past<br/>projects by signing in.','We\'re working on it if you see <img width="32" src="resources/working_icon.png"/>','Get estimate cost for any service by clicking "Get Estimate" under Customer tab.','We\'re finalizing if you see <img width="32" src="resources/finalizing_icon.png"/>', 'Use contact form over direct email; it takes higher precedence.'];

  var span = document.getElementById('CHANGING_TIPS');
  if (x > (tips.length-1)){
    x = 0;}
  //show next tip
  span.innerHTML = tips[x++];
}
var scrollOn = false;
var top;
function scroll()
  {
    if(this.scrollY>300)
    {document.getElementById('TOP').style.display = 'block';scrollOn = true;}
    else
    {
      if(scrollOn)
        document.getElementById('TOP').style.display = 'none';
      scrollOn = false;
    }

  }
function scrollToTop(){
  if(document.body.scrollTop !==0 || document.documentElement.scrollTop !== 0)
    {
      window.scrollBy(0, -200);
      requestAnimationFrame(scrollToTop);
    }
  /*var element = document.getElementById('ROW-1');
  element.scrollIntoView({block:"start", behavior: "smooth"});*/

}
function toggleTipsWindow()
  {
    var x = document.getElementById('TIPS-BG');
    var y = document.getElementById('CLOSE');
    var z = document.getElementById('TIPS');

    var array = [x, y, z];
    var i;

      if (tipsOn){//hide tips window
          for ( i = 0; i < array.length; i++) {
        array[i].style.display="none";
        tipsOn = false;}
        clearInterval(changeTips);
        if (init){
        setTimeout(toggleTipsWindow, 300000);}
      }
      else//show tips window
        {  for ( i = 0; i < array.length; i++) {
          array[i].style.display="block";}
          tipsOn = true;
          changeTips();

        if(!init){init=true;}
        setInterval(changeTips, 10000);
    }

  }
var current;
current = 'LOGO';
color = 'black';
function currentPage(next)
  {
    //current the page we are navigating from
    // next is the page we are navigating to

    current = document.getElementById(current);
    current.style.backgroundColor = color;
    current.style.boxShadow = "0px 0px 0px 0px gray";
    current = next;

    var next = document.getElementById(next);
    color = next.style.backgroundColor;
    next.style.backgroundColor = "#81acdc";
    next.style.boxShadow = "1px 1px 1px 1px gray";
  }
