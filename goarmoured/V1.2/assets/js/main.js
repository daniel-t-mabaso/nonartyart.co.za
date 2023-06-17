function hideLoad(){
    var loader = document.getElementById("page-load");
    loader.classList.add("hide");
}

window.addEventListener("load", hideLoad);

function edit_page(){
    var forms = document.getElementsByClassName("dashboard-form");
    var page = document.getElementById("select_page").value;

    console.log(page);
    switch (page){
        case "home":
            console.log("Entered home");
            for(var i = 0; i < forms.length; i++){
                if(!forms[i].classList.contains('hide')){
                    forms[i].classList.add("hide");}
                if (document.getElementById('home-page-form').classList.contains('hide')){
                document.getElementById('home-page-form').classList.remove('hide');}
            }
        break;
        case "services":
            console.log("Entered services");
            for(var i = 0; i < forms.length; i++){
                if(!forms[i].classList.contains('hide')){
                    forms[i].classList.add("hide");}
                if (document.getElementById('services-page-form').classList.contains('hide')){
                document.getElementById('services-page-form').classList.remove('hide');}
            }
        break;
        case "about":
        console.log("Entered about");
        for(var i = 0; i < forms.length; i++){
            if(!forms[i].classList.contains('hide')){
                forms[i].classList.add("hide");}
            if (document.getElementById('about-page-form').classList.contains('hide')){
            document.getElementById('about-page-form').classList.remove('hide');}
        }
        break;
        case "contact":
        console.log("Entered contact");
        for(var i = 0; i < forms.length; i++){
            if(!forms[i].classList.contains('hide')){
                forms[i].classList.add("hide");}
            if (document.getElementById('contact-page-form').classList.contains('hide')){
            document.getElementById('contact-page-form').classList.remove('hide');}
        }
        break;

    }

}