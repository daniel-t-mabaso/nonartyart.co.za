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
    var stopY = elmYPosition(eID)+document.getElementById(eID).style.height / 2 - 60;
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 170);
    if (speed >= 50) speed = 50;
    var step = Math.round(distance / 200);
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

// listen for scroll event and call animate function
function loadInView(){
    inViewElements = document.getElementsByClassName("appear-inview");
    var count = 0;
    for (let index = 0; index < inViewElements.length; index++) {
        const element = inViewElements[index];
        var animClass = "fadeIn"+ count++;
        var animClass2 = "invisible";

        if(count>3){
            count = 1;
        }
        $(element).data("class-in", animClass);
        $(element).data("class-out", animClass2);
    }
}
// check if element is in view
function inView() {
  // get window height
  var windowHeight = window.innerHeight;
  // get number of pixels that the document is scrolled
  var scrollY = window.scrollY || window.pageYOffset;
  
  // get current scroll position (distance from the top of the page to the bottom of the current viewport)
  var scrollPosition = scrollY + windowHeight;
  // get element position (distance from the top of the page to the bottom of the element)
  var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;
  
  // is scroll position greater than element position? (is element in view?)
  if (scrollPosition > elementPosition) {
    return true;
  }
  
  return false;
}

// animate element when it is in view
function animate() {
  // is element in view?
  if (inView()) {
      // element is in view, add class to element
      element.classList.add('animate');
  }
}
function toggleMenu(){
    var x = document.getElementById('burger');
    x.classList.toggle("change");
    document.getElementById('menu').classList.toggle('menu-hide');
    if(document.getElementById('menu').classList.contains('slideInFromRight')){
        document.getElementById('menu').classList.toggle('fadeOut0');
    }
    document.getElementById('menu').classList.toggle('slideInFromRight');
    
}