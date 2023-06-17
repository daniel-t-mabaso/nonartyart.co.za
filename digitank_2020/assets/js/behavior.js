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
    if(buttons[i].classList.contains('border-bottom-2')){
                buttons[i].classList.remove("border-bottom-2");
                break;
            }
    }
    if(!obj.classList.contains('border-bottom-2')){
        obj.classList.add("border-bottom-2");
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

function toggleCoursesPopUp(id){
  scrollToId("#row-header")
  var popUp = document.getElementById("courses-pop-up-container");
  forwardRequest('load-all-course-details-to-popUp', id)
  popUp.classList.toggle("hide");
  document.getElementById('courses-pop-up-id').setAttribute("href", "booking.php?id="+id);
}
function toggleDashboardPopUp(type){
  scrollToId("#row-header")
  var popUp = document.getElementById("dashboard-pop-up-window");
  popUp.classList.toggle("hide");
  var course = document.getElementById("add-course");
  var category = document.getElementById("add-category");
  var location = document.getElementById("add-location");
  var image = document.getElementById("add-image");
  var locations = document.getElementById("change-course-locations");
  if(type.includes("categories")){
    if(!course.classList.contains("hide"))
    course.classList.add("hide");
    if(!locations.classList.contains("hide"))
    locations.classList.add("hide");
    if(!location.classList.contains("hide"))
    location.classList.add("hide");
    if(category.classList.contains("hide"))
    category.classList.remove("hide");
    if(!image.classList.contains("hide"))
    image.classList.add("hide");
    
    if(!type.includes("edit")){
      var add = document.getElementById('add-category-button');
      var edit = document.getElementById('edit-category-button');
      if(add.classList.contains('hide'))
      add.classList.remove('hide');
      if(!edit.classList.contains('hide'))
      edit.classList.add('hide');
    }

  }else if(type.includes("courses")){
    if(course.classList.contains("hide"))
    course.classList.remove("hide");
    if(!location.classList.contains("hide"))
    location.classList.add("hide");
    if(!category.classList.contains("hide"))
    category.classList.add("hide");
    if(!locations.classList.contains("hide"))
    locations.classList.add("hide");
    if(!image.classList.contains("hide"))
    image.classList.add("hide");

    if(document.getElementById('edit-course-button').classList.contains("hide") && document.getElementById('category-options-panel').classList.contains('hide'))
      document.getElementById('category-options-panel').classList.remove('hide');
    
      if(!type.includes("edit")){
        var add = document.getElementById('add-course-button');
        var edit = document.getElementById('edit-course-button');
        if(add.classList.contains('hide'))
        add.classList.remove('hide');
        if(!edit.classList.contains('hide'))
        edit.classList.add('hide');
      }


      loadCourseImageOptions()
    loadCategoryOptions();
  }else if(type.includes("change-course-locations")){
    if(!course.classList.contains("hide"))
    course.classList.add("hide");
    if(!location.classList.contains("hide"))
    location.classList.add("hide");
    if(!category.classList.contains("hide"))
    category.classList.add("hide");
    if(!image.classList.contains("hide"))
    image.classList.add("hide");
    if(locations.classList.contains("hide"))
    locations.classList.remove("hide");


  }else if(type.includes("locations")){
    if(!course.classList.contains("hide"))
    course.classList.add("hide");
    if(location.classList.contains("hide"))
    location.classList.remove("hide");
    if(!category.classList.contains("hide"))
    category.classList.add("hide");
    if(!image.classList.contains("hide"))
    image.classList.add("hide");
    if(!locations.classList.contains("hide"))
    locations.classList.add("hide");

    
    if(!type.includes("edit")){
      var add = document.getElementById('add-location-button');
      var edit = document.getElementById('edit-location-button');
      if(add.classList.contains('hide'))
      add.classList.remove('hide');
      if(!edit.classList.contains('hide'))
      edit.classList.add('hide');
    }
    
    loadLocationImageOptions();
  }else if(type.includes("images")){
    if(!course.classList.contains("hide"))
    course.classList.add("hide");
    if(!location.classList.contains("hide"))
    location.classList.add("hide");
    if(!category.classList.contains("hide"))
    category.classList.add("hide");
    if(image.classList.contains("hide"))
    image.classList.remove("hide");
    if(!locations.classList.contains("hide"))
    locations.classList.add("hide");
  }
  
}

function dashboardPopUp(request, id){
  switch(request){
    case 'edit-category':
      var categories = document.getElementsByClassName('category');
      for(var i=0; i<categories.length; i++){
        if(categories[i].children[0].value.includes(id)){
          document.getElementById('add-category-id').value = id;
          document.getElementById('add-category-title').value = categories[i].children[1].children[0].innerHTML;
          document.getElementById('add-category-description').value = categories[i].children[3].innerHTML;
          var add = document.getElementById('add-category-button');
          var edit = document.getElementById('edit-category-button');
          if(!add.classList.contains('hide'))
          add.classList.add('hide');
          if(edit.classList.contains('hide'))
          edit.classList.remove('hide');


          toggleDashboardPopUp('edit-categories');
          break;
        }
      }
      break;
    case 'edit-location':
      var categories = document.getElementsByClassName('location');
      for(var i=0; i<categories.length; i++){
        if(categories[i].children[0].value.includes(id)){
          document.getElementById('add-location-id').value = id;
          document.getElementById('add-location-name').value = categories[i].children[1].innerHTML;
          document.getElementById('add-location-street').value = categories[i].children[5].innerHTML;
          document.getElementById('add-location-city').value = categories[i].children[6].innerHTML;
          document.getElementById('add-location-code').value = categories[i].children[7].innerHTML;
          document.getElementById('add-location-province').value = categories[i].children[9].innerHTML;
          document.getElementById('add-location-country').value = categories[i].children[10].innerHTML;
          setTimeout(function(){
            
            var sel = document.getElementById('location-image-options-panel');
            var val = categories[i].children[2].src;
            val= val.substring(val.indexOf('assets'), val.length).replace(/%20/g, " ");
            var opts = sel.options;
              for (var j = 0; j< opts.length; j++) {
                  //alert(opts[j].value+" vs "+val);
                  if (opts[j].value.includes(val)) {
                    sel.selectedIndex = j;
                    break;
                  }
                }
              }, 2000);
          var add = document.getElementById('add-location-button');
          var edit = document.getElementById('edit-location-button');
          if(!add.classList.contains('hide'))
          add.classList.add('hide');
          if(edit.classList.contains('hide'))
          edit.classList.remove('hide');
          

          toggleDashboardPopUp('edit-locations');
          break;
        }
      }
      break;
    case 'edit-course':
      var categories = document.getElementsByClassName('course');
      for(var i=0; i<categories.length; i++){
        if(categories[i].children[0].value.includes(id)){
          
          document.getElementById('add-course-id').value = id;
          document.getElementById('add-course-title').value = br2nl(categories[i].children[1].children[0].innerHTML);
          document.getElementById('add-course-age').value = br2nl(categories[i].children[8].innerHTML);
          document.getElementById('add-course-price').value = br2nl(categories[i].children[11].innerHTML);
          document.getElementById('add-course-time').value = br2nl(categories[i].children[14].innerHTML);
          
          document.getElementById('course-image-options-panel').value = br2nl(categories[i].children[3].innerHTML);
          document.getElementById('add-course-short-description').value = br2nl(categories[i].children[20].innerHTML);
          document.getElementById('add-course-long-description').value = br2nl(categories[i].children[23].innerHTML);
          document.getElementById('add-course-objective').value = br2nl(categories[i].children[29].innerHTML);
          document.getElementById('add-course-package').value = br2nl(categories[i].children[26].innerHTML);
          document.getElementById('add-course-target').value = br2nl(categories[i].children[32].innerHTML);
          
          setTimeout(function(){
            
          var sel = document.getElementById('course-image-options-panel');
          var val = categories[i].children[2].src;
          val= val.substring(val.indexOf('assets'), val.length).replace(/%20/g, " ");
          var opts = sel.options;
            for (var j = 0; j< opts.length; j++) {
                //alert(opts[j].value+" vs "+val);
                if (opts[j].value.includes(val)) {
                  sel.selectedIndex = j;
                  break;
                }
              }
            }, 2000);
          setTimeout(function(){
            
          var sel = document.getElementById('category-options-panel');
          var val = categories[i].children[5].innerHTML;
          val= val.substring(val.indexOf('assets'), val.length);
          var opts = sel.options;
            for (var j = 0; j< opts.length; j++) {
                //alert(opts[j].innerHTML+" vs "+val);
                if (opts[j].innerHTML.includes(val)) {
                  sel.selectedIndex = j;
                  break;
                }
              }
            }, 1000);
          
          var add = document.getElementById('add-course-button');
          var edit = document.getElementById('edit-course-button');
          if(!add.classList.contains('hide'))
          add.classList.add('hide');
          if(edit.classList.contains('hide'))
          edit.classList.remove('hide');

          toggleDashboardPopUp('edit-courses');
          break;
        }
      }
      break;
  }
}
function toggleRegister(){
  var part1 = document.getElementById("register-part-1");
  var part2 = document.getElementById("register-part-2");
  
  part1.classList.toggle("hide");
  part2.classList.toggle("hide");
}

var previousDashboardNavItem;
function changeDashboard(obj){
  if(previousDashboardNavItem){
    previousDashboardNavItem.classList.toggle("gray-1");
    previousDashboardNavItem.classList.toggle("orange-txt-gradient-1");
  }
  obj.classList.toggle("gray-1");
  obj.classList.toggle("orange-txt-gradient-1");
  previousDashboardNavItem = obj;

  //load content
  document.getElementById("dashboard-content-title").innerHTML = obj.innerHTML;
  request(obj.innerHTML, "dashboard-content");

}

function loadContent(type, destination){

}
var categoryOptionsLoaded = false;
function loadCategoryOptions(){
  if(!categoryOptionsLoaded){
    forwardRequest('category-options', 'category-options-panel');
    categoryOptionsLoaded = true;
  }
}
var courseImagesLoaded = false;
function loadCourseImageOptions(){
  if(!courseImagesLoaded){
    forwardRequest('course-image-options', 'course-image-options-panel');
    courseImagesLoaded = true;
  }
}
var locationImagesLoaded = false;
function loadLocationImageOptions(){
  if(!locationImagesLoaded){
    forwardRequest('location-image-options', 'location-image-options-panel');
    locationImagesLoaded = true;
  }
}

function confirmationRequest(r, q) {
  if (confirm("Are you sure you want to proceed? This action cannot be reversed.")) {
    forwardRequest(r, q);
  }
}

window.addEventListener("load", function(){
  if(document.getElementById('get-started') && sessionStorage.getItem("booking")){
    sessionStorage.removeItem("booking");
    sessionStorage.setItem('login-attempted', true)
    forwardRequest('book-course', sessionStorage.getItem("booking"));
  }
});

function br2nl(str) {
  return str.replace(/<br\s*\/?>/mg,"\n");
}

function toggleNotificationPopup(text){
  var panel = document.getElementById("notification-popup-panel");
  if(text.length > 0){
    panel.style.opacity = 0;
    panel.classList.remove('hide');
    val = 0;
    var loop = setInterval(function(){
      val += 0.2;
      panel.style.opacity = val;
      if(val > 1){
        clearInterval(loop);
        setTimeout(function(){
          toggleNotificationPopup('');
        }, 3000);
      }
        
    }, 50);
    panel.innerHTML = text;
  }else{
    panel.style.opacity = 1;
    val = 1;
    var loop = setInterval(function(){
      panel.style.opacity = val;
      val -= 0.2;
      if(val < 0){
        clearInterval(loop);
        panel.classList.add('hide');
      }
        
    }, 50);
  }
}

var touchstartX = 0;
var touchendX = 0;
setTimeout(function(){

//   var courses = document.getElementsByClassName('courses-courses-course-details');

//   for(var i = 0; i< courses.length; i++){
//     courses[i].addEventListener('touchstart', function(event) {
//       touchstartX = event.changedTouches[0].screenX;
//   }, false);
  
//     courses[i].addEventListener('touchend', function(event) {
//       touchendX = event.changedTouches[0].screenX;
//       handleGesure(event.currentTarget);
//   }, false); 
//   }
// }
$('.courses-courses-course-details').on({ 'touchstart' : function(event){
  touchstartX = event.changedTouches[0].screenX;
 } });
$('.courses-courses-course-details').on({ 'touchmove' : function(event){
  event.preventDefault();
 } });
$('.courses-courses-course-details').on({ 'touchend' : function(event){ 
  touchendX = event.changedTouches[0].screenX;
  handleGesure(event.currentTarget);
 } });}
, 1000);


// var gesuredZone = document.getElementById('gesuredZone');

// gesuredZone.addEventListener('touchstart', function(event) {
//     touchstartX = event.screenX;
// }, false);

// gesuredZone.addEventListener('touchend', function(event) {
//     touchendX = event.screenX;
//     handleGesure();
// }, false); 

function handleGesure(obj) {
    var scroll = 0;
    if (touchendX < (touchstartX-100)) {
      scrollX("-320", obj.parentElement);
    }
    if (touchendX > (touchstartX+100)) {
        
      scrollX("320", obj.parentElement);
    }
    // alert(touchstartX+" vs "+touchendX)
}