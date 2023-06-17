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
            console.log("Showing home");
            for(var i = 0; i < forms.length; i++){
                if(!forms[i].classList.contains('hide')){
                    forms[i].classList.add("hide");}
                if (document.getElementById('home-page-form').classList.contains('hide')){
                document.getElementById('home-page-form').classList.remove('hide');}
            }
        break;
        case "services":
            console.log("Showing services");
            for(var i = 0; i < forms.length; i++){
                if(!forms[i].classList.contains('hide')){
                    forms[i].classList.add("hide");}
                if (document.getElementById('services-page-form').classList.contains('hide')){
                document.getElementById('services-page-form').classList.remove('hide');}
            }
        break;
        case "about":
        console.log("Showing about");
        for(var i = 0; i < forms.length; i++){
            if(!forms[i].classList.contains('hide')){
                forms[i].classList.add("hide");}
            if (document.getElementById('about-page-form').classList.contains('hide')){
            document.getElementById('about-page-form').classList.remove('hide');}
        }
        break;
        case "contact":
        console.log("Showing contact");
        for(var i = 0; i < forms.length; i++){
            if(!forms[i].classList.contains('hide')){
                forms[i].classList.add("hide");}
            if (document.getElementById('contact-page-form').classList.contains('hide')){
            document.getElementById('contact-page-form').classList.remove('hide');}
        }
        break;
        case "other":
        console.log("Showing other");
        for(var i = 0; i < forms.length; i++){
            if(!forms[i].classList.contains('hide')){
                forms[i].classList.add("hide");}
            if (document.getElementById('other-content-form').classList.contains('hide')){
            document.getElementById('other-content-form').classList.remove('hide');}
        }
        break;

    }

}

function dashboardView(tab){
    var tab = tab + "-tab";
    console.log(tab);
    var tabs = document.getElementsByClassName('dashboard-tabs');

    for(var i= 0; i < tabs.length; i++){
        if(tab == tabs[i].id && tabs[i].classList.contains("hide")){
            tabs[i].classList.remove("hide");
        }
        else if (tab != tabs[i].id && !tabs[i].classList.contains("hide")){
            tabs[i].classList.add("hide");
        }
    }

}