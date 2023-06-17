// Initialize the page defaults
window.addEventListener("load", __initialize);
function loadHeader(){
    var header = '<div class="content bold">'+
    '<div id="header-logo">'+
       '<a href="./index.html"><img class="logo" src="assets/media/images/mds logo - transparent.png" alt="Modern Day Strategy Logo with no background"></a>'+
        '</div>'+
    '<div id="header-navigation">'+
        '<div id="hamburger-panel" class="mobile-only"><div id="hamburger"><div class="container" onclick="toggleMenu();" id="burger">'+
        '<div class="bar1"></div>'+
        '<div class="bar2"></div>'+
        '<div class="bar3"></div>'+
      '</div></div></div>'+
        '<div id="menu" class="menu-hide">'+
        '<span class="navigation-item mobile-only"><a href="index.html">Home</a></span>'+
        '<span class="navigation-item"><a href="approach.html">Approach</a></span>'+
        '<span class="navigation-item"><a href="about.html">About</a></span>'+
        '<span class="navigation-item"><a href="contact.html">Contact</a></span>'+
        '</div>'+
        '</div>'+
    '</div>';
    document.getElementById("header").innerHTML = header;
}
function loadFooter(){
    var hideGetInTouch = "";
    if(document.title.includes("Contact")){
        hideGetInTouch = "hide";
    }
    var footer = '<div class="content bold"><div id="footer-row-extra" class="'+hideGetInTouch+'">'+
    '<h1 class="main-title primary-txt center-txt appear-inview">Introduce your Business</h1>'+
    '<a href="contact.html"><div class="center button tertiary-txt">Get in touch</div></a></div>'+
    '<div id="footer-navigation" class="">'+
    '<a id="footer-logo" href="./index.html"><img src="assets/media/images/mds logo - transparent.png" alt="Modern Day Strategy Logo with no background" height="100px"></a></br>'+
    '<span class="navigation-item"><a href="approach.html">Approach</a></span>'+
    '<span class="navigation-item"><a href="about.html">About</a></span>'+
    '<span class="navigation-item"><a href="contact.html">Contact</a></span>'+
    '<div class="grey-txt">&copy; 2020 Modern Day Strategy. All Rights Reserved.</div>'+
    '</div>'+
    '</div>';
    document.getElementById("footer").innerHTML = footer;
}

function __initialize(){
    $(function(){
    $('.content div, .content p').inview();
    });

    $(function(){
        $('.content *').inview({
        'viewFactor': 0.3,
        'onEnter':function($object) {
        },
        'onLeave':function($object) {
        }
        });
    });
        
    loadHeader();
    loadFooter();
    loadInView();
    document.getElementById("pageLoader").classList.toggle("fadeOut0");
    setTimeout(function(){
        document.getElementById("pageLoader").classList.toggle("hide");}, 1000);
}
