function scrollToTop(){
    var c = document.documentElement.scrollTop || document.body.scrollTop;
    if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 8);
    }
  };
  
  function scrollToId(str){
    var id = str.slice(str.indexOf('#')+1);
    var c = document.getElementById(id);

    c.scrollIntoView();
  }
  function smoothScroll(str) {
      
    var eID = str.slice(str.indexOf('#')+1);
      var startY = currentYPosition();
      var stopY = elmYPosition(eID)+document.getElementById(eID).style.height / 2;
      var distance = stopY > startY ? stopY - startY : startY - stopY;
      if (distance < 100) {
          scrollTo(0, stopY); return;
      }
      var speed = Math.round(distance / 100);
      if (speed >= 20) speed = 20;
      var step = Math.round(distance / 25);
      var leapY = stopY > startY ? startY + step : startY - step;
      var timer = 0;
      if (stopY > startY) {
          for ( var i=startY; i<stopY; i+=step ) {
              setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
              leapY += step; if (leapY > stopY) leapY = stopY; timer++;
          } return;
      }
      for ( var i=startY; i>stopY; i-=step ) {
          setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
          leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
      }
    return false;
  }
  function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}
function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}

function changeUserType(obj){
    var id = obj.innerHTML.toLowerCase();
    var userType = document.getElementById("user-type");
    var buttons = document.getElementsByClassName("user-type");

    //loop through buttons to unselect previously selected button
    for(var i = 0; i < buttons.length; i++){
    if(buttons[i].classList.contains('border-2')){
                buttons[i].classList.remove("border-2");
                buttons[i].classList.remove("max-height-2");
                buttons[i].classList.remove("line-height-30"); 
                buttons[i].classList.remove("bold"); 
                obj.classList.add("max-height-0");
                break;
            }
    }
    if(!obj.classList.contains('border-2')){
        obj.classList.add("border-2");
        obj.classList.add("max-height-2");
        obj.classList.add("line-height-30");
        obj.classList.add("bold");
    }
    userType.value = id;
}

function toggleMenu(){

    var x = document.getElementById('burger');
    var header = document.getElementById('row-header');
    var social = document.getElementById('navigation-social-media-container');
    var nav = document.getElementById('navigation-bar-panel');
    

    if(social.classList.contains("mobile-hide")){
          // add listener to disable scroll
          document.addEventListener('wheel', preventDefault, {passive: false});}
    else{
          // Remove listener to re-enable scroll
          document.removeEventListener('wheel', preventDefault, {passive: false});
    }
    x.classList.toggle("change");
    header.classList.toggle("menu");
    social.classList.toggle("mobile-hide");
    nav.classList.toggle("mobile-hide");

}
  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;  
  }

  
  var coursesScrollBlock = false;

  function scrollX(amount, obj){
    
  var resp = document.getElementById('respValue');
    var div = obj.parentElement.children[2];
    var previous = div.style.left;
    previous = previous.substring(0,previous.length - 2);
    var numberOfCourses = div.children.length - 3;
    if(previous.length<1){
      previous = "0";
    }
    
    var newNumber = parseInt(previous) + parseInt(amount);
      var limit = newNumber/320;
    if(parseInt(limit)<1 || parseInt(amount)==-320){
      var numberOfCourses = div.children.length - 2;
      resp = window.getComputedStyle(resp).getPropertyValue('opacity');
      resp = resp.substring(2);
      resp = parseInt(resp) - 1;
      if(limit * (-1) < numberOfCourses - resp){
        // div.style.left = ""+ newNumber + "px";
        var count = 0;
          if(!coursesScrollBlock){
            coursesScrollBlock = true;
            var loop = setInterval(function(){
              if(amount<0){
                //scroll to left, reveal right
                div.style.left = ""+((-1* count)+ parseInt(previous)) + "px"; 
              }
              else if(amount>0){
                //scroll to right, reveal left
              div.style.left = ""+ (parseInt(previous)+count) + "px";
              }
              count +=32;
              if(count> 320){
                clearInterval(loop);
                coursesScrollBlock = false;
              }
            }, 25);
          }
      }
    }
  }

function toggleCoursesPopUp(obj){
  scrollToId("#row-header")
  var popUp = document.getElementById("courses-pop-up-container");
  popUp.classList.toggle("hide");
  
}