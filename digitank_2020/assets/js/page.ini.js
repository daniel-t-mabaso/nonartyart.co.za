// Initialize the page defaults
window.addEventListener("load", __initialize);

function __initialize(){
    document.getElementById("pageLoader").classList.toggle("fadeOut0");
    setTimeout(function(){
        document.getElementById("pageLoader").classList.toggle("hide");}, 1000);
}
