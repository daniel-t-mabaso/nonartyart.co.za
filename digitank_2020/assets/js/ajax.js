function request(request, destinationId) {
    var value = request.toLowerCase();
    if(request.includes("add-category") || request.includes("edit-category")){
        var id = document.getElementById('add-category-id');
        var title = document.getElementById("add-category-title");
        var description = document.getElementById("add-category-description");
        if(request.includes("edit-category"))
            destinationId = escape(id.value) +"~"+ escape(title.value) +"~"+ escape(description.value);
        else
            destinationId = escape(title.value) +"~"+ escape(description.value);

        title.value = "";
        description.value = "";
    }else if(request.includes("submit-know-more-form")){
        parent = destinationId.parentElement;
        name = parent.children[0];
        email = parent.children[1];
        type = parent.children[2].value;

        if(!name.value){
            var colour_changed = false;
            var count = 0;
            loop = setInterval(function(){
                if(!colour_changed){
                    name.style.backgroundColor = 'rgba(255,0,0,0.3)';
                    colour_changed = true;}
                else{
                    name.style.backgroundColor = 'rgb(21,22,22)';
                    colour_changed = false;
                    count++; 
                }

                if(count > 2){
                    clearInterval(loop);
                }
            }, 200);

            
        }

        if(!email.value){
            var colour_changed2 = false;
            var count2 = 0;
            loop2 = setInterval(function(){
                if(!colour_changed2){
                    email.style.backgroundColor = 'rgba(255,0,0,0.3)';
                    colour_changed2 = true;}
                else{
                    email.style.backgroundColor = 'rgb(21,22,22)';
                    colour_changed2 = false;
                    count2++; 
                }

                if(count2 > 2){
                    clearInterval(loop2);
                }
            }, 200);
        }

        if(name.value && email.value){
            destinationId = name + "$" + email + "$" + type;
            email.value = '';
            name.value = '';
        }
        else
            return
        
    }else if(request.includes("save-course-locations")){
        var id = document.getElementById("course_id");
        destinationId = id.value;
        var string = '';
        var checkboxes = document.getElementsByName('course-locations');
        for(var i = 0; i < checkboxes.length; i++){
            if(checkboxes[i].checked){
                string += ','+checkboxes[i].value;
            }
        }
        // alert(string);
        destinationId +=string; 

    }else if(request.includes("change-course-feature")){
        
        var id = destinationId.parentElement.parentElement.children[0];
        var img = destinationId;
        var str = "true";
        if(img.src.includes('coloured_star')){
            str = "false";
        }
        destinationId = id.value + ',' + str;
    }else if(request.includes("change-category-order")){
        var str = destinationId.value;
        var id = destinationId.parentElement.children[2].value;
        destinationId = id + ',' + str;

    }else if(request.includes("add-location") || request.includes("edit-location")){
        var id = document.getElementById('add-location-id');
        var name = document.getElementById("add-location-name");
        var street = document.getElementById("add-location-street");
        var city = document.getElementById("add-location-city");
        var code = document.getElementById("add-location-code");
        var province = document.getElementById("add-location-province");
        var country = document.getElementById("add-location-country");
        var image = document.getElementById("location-image-options-panel");

        if(request.includes("edit-location"))
            destinationId = escape(id.value) +"~"+ escape(name.value) +"~"+ escape(street.value) + "~"+ escape(city.value) + "~"+ escape(code.value)  + "~"+ escape(province.value)  + "~"+ escape(country.value)  + "~"+ escape(image.value);
        else
        destinationId = escape(name.value) +"~"+ escape(street.value) + "~"+ escape(city.value) + "~"+ escape(code.value)  + "~"+ escape(province.value)  + "~"+ escape(country.value)  + "~"+ escape(image.value);

        
        name.value = "";
        street.value = "";
        city.value = "";
        code.value = "";
        province.value = "";
        country.value = "";
    }else if(request.includes("add-course") || request.includes("edit-course")){
        var id = document.getElementById('add-course-id');
        var title = document.getElementById("add-course-title");
        var cat_id = document.getElementById("category-options-panel");
        var short = document.getElementById("add-course-short-description");
        var long = document.getElementById("add-course-long-description");
        var age = document.getElementById("add-course-age");
        var price = document.getElementById("add-course-price");
        var time = document.getElementById("add-course-time");
        var package = document.getElementById("add-course-package");
        var objective = document.getElementById("add-course-objective");
        var target = document.getElementById("add-course-target");
        var location = document.getElementById("add-course-location");
        var image = document.getElementById("course-image-options-panel");

        if(request.includes("edit-course")){
            destinationId = escape(id.value) +"~"+ escape(short.value.replace(/(?:\r\n|\r|\n)/g, '<br>')) +"~"+ escape(long.value.replace(/(?:\r\n|\r|\n)/g, '<br>')) + "~"+ escape(title.value) + "~"+ escape(age.value)  + "~"+ escape(price.value)  + "~"+ escape(time.value)  + "~"+ escape(package.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(objective.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(target.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(image.value) + "~"+ escape(cat_id.value) + "~"+ escape(location.value);
            //alert(cat_id.value);
        }
        else{
            destinationId = escape(short.value.replace(/(?:\r\n|\r|\n)/g, '<br>')) +"~"+ escape(long.value.replace(/(?:\r\n|\r|\n)/g, '<br>')) + "~"+ escape(title.value) + "~"+ escape(age.value)  + "~"+ escape(price.value)  + "~"+ escape(time.value)  + "~"+ escape(package.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(objective.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(target.value.replace(/(?:\r\n|\r|\n)/g, '<br>'))  + "~"+ escape(image.value) + "~"+ escape(cat_id.value) + "~"+ escape(location.value);}
        
        title.value = "";
        short.value = "";
        long.value = "";
        age.value = "";
        price.value = "";
        time.value = "";
        package.value = "";
        objective.value = "";
        target.value = "";
        image.value = "";
        cat_id.value = "";
    }
    if (value.length == 0) { 
        // alert('Error: Unknown request.');
        return;
    } else {
        //alert('Sending request');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert('Got response');

                //alert(this.responseText);
                if(value.includes("change-course-locations")){
                    toggleDashboardPopUp("change-course-locations");
                    document.getElementById('course-locations-panel').innerHTML = this.responseText;
                }else if(value.includes("add-course") || value.includes('change-course-feature') || value.includes("delete-course") || value.includes("save-course-locations") || value.includes("edit-course")){
                    toggleNotificationPopup(this.responseText);
                    forwardRequest('courses', 'dashboard-content');
                }else if (value.includes('users') || value.includes('categories') || value.includes('images') || value.includes('category-options') || value.includes('course-image-options') || value.includes('location-image-options') || value.includes('locations') || value.includes('courses') || value.includes('bookings') ){
                    document.getElementById(destinationId).innerHTML = this.responseText;
                }else if(value.includes('make-')){
                    toggleNotificationPopup(this.responseText);
                    forwardRequest('users', 'dashboard-content');
                }else if(value.includes('load-category-name')){
                    thisObj.parentElement.children[3].innerHTML = this.responseText;
                }else if(value.includes("add-category") || value.includes("delete-category") || value.includes("change-category-order") || value.includes("edit-category")){
                    toggleNotificationPopup(this.responseText);
                    forwardRequest('categories', 'dashboard-content');
                }else if(value.includes("add-location") || value.includes("delete-location") || value.includes("edit-location")){
                    toggleNotificationPopup(this.responseText);
                    forwardRequest('locations', 'dashboard-content');
                }else if(value.includes("delete-image")){
                    toggleNotificationPopup(this.responseText);
                    forwardRequest('images', 'dashboard-content');
                }else if(value.includes("submit-know-more-form")){
                    toggleNotificationPopup(this.responseText);
                }else if(value.includes("booking-") || value.includes("delete-booking")){
                    forwardRequest('bookings', 'dashboard-content');
                    toggleNotificationPopup(this.responseText);

                }else if(value.includes("load-all-course-details-to-popup")){
                    var result = this.responseText.split('~');
                    var id = document.getElementById("courses-pop-up-id");
                    var title = document.getElementById("courses-pop-up-title");
                    var long = document.getElementById("courses-pop-up-description-content");
                    var age = document.getElementById("courses-pop-up-age");
                    var price = document.getElementById("courses-pop-up-price");
                    var time = document.getElementById("courses-pop-up-time");
                    var package = document.getElementById("courses-pop-up-package");
                    var objective = document.getElementById("courses-pop-up-objective");
                    var target = document.getElementById("courses-pop-up-target");
                    var location = document.getElementById("courses-pop-up-location");
                    var image = document.getElementById("courses-pop-up-image");
                    title.innerHTML = result[0];
                    long.innerHTML = result[1];
                    age.innerHTML = result[2];
                    price.innerHTML = result[3];
                    time.innerHTML = result[4];
                    package.innerHTML = result[5];
                    objective.innerHTML = result[6];
                    target.innerHTML = result[7];
                    location.innerHTML = result[8];
                    image.style.backgroundImage = "url('"+result[9]+"')";
                    image.style.backgroundSize = "cover";
                }else if (value.includes('book-course')){
                    var r = this.responseText;
                    if(r.includes('[login]')){
                        if(!sessionStorage.getItem('login-attempted')){
                            alert('You need to be logged in to make a booking. Redirecting to login page..');
                            sessionStorage.setItem("booking", r.split(',')[1]);
                            window.location = "login.php";
                        }else{
                            
                            if(r.includes('[login]')){
                               // alert('still not logged in');
                                sessionStorage.removeItem('booking');
                                sessionStorage.removeItem('login-attempted');
                            }
                        }
                    }else{
                        if(sessionStorage.getItem('booking'))
                        sessionStorage.removeItem('booking');
                        if(sessionStorage.getItem('login-attempted'))
                        sessionStorage.removeItem('login-attempted');
                        window.location = "booked.php";
                    }
                }

            }
        };
        xmlhttp.open("GET", "./assets/php/requests.php?q=" + value + "&id=" + destinationId, true);
        xmlhttp.send();
    }
}

function forwardRequest(q, id){
    request(q, id);
}
var thisObj;
function forwardRequestHere(obj, q, id){
    thisObj = obj;
    request(q, id);
}