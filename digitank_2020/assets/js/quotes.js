var quote_authors = ["Austin","Unam","Jayden","Amir","Tamar","Nokutenda","Wasim","Hamza","Tinaye","Kelhan"];
var quotes = ["I learn to code because<br>I want to make games","Don't start the<br>future without me", "The future is code.<br>That's why I learn to code!", "I learn to code because I want<br>to improve my technology skills", "I learn to code so that I can help<br>people when their computer is broken", "I learn to code so that I understand<br>how maths can help my Life", "I will not let the future<br>start without me", "Coding<br>for life!", "I will not let the future<br>start without me!", "I code to understand how maths<br>can help my life."];
var current_index = 0;




function changeQuote(number){
    if(quote_authors.length == quotes.length){
        var author = document.getElementById("quote-author");
        var current_author = document.getElementById("quote-author").innerText.charAt(0).toUpperCase() + document.getElementById("quote-author").innerText.slice(1).toLowerCase();
        var current_quote = document.getElementById("quote-txt");

        var left_1 = document.getElementById("left-1-quote-image");
        var left_2 = document.getElementById("left-2-quote-image");
        var right_1 = document.getElementById("right-1-quote-image");
        var right_2 = document.getElementById("right-2-quote-image");
        var center = document.getElementById("center-quote-image");

        var path = "url('./assets/media/images/school_kids/";
        var new_index = current_index + number;
        if(new_index< 0){
            new_index = quotes.length + new_index
        }
        else if (new_index >= quotes.length){
            new_index = new_index - quotes.length;
        }
        if(new_index > 1 && new_index < (quote_authors.length - 2)){
            center.style.backgroundImage = path + quote_authors[new_index] +"@1x.png')";
            center.style.backgroundSize = "cover";
            current_quote.innerHTML = quotes[new_index].toUpperCase();
            author.innerText = quote_authors[new_index].toUpperCase();
            current_index = new_index;

            left_1.style.backgroundImage = path + quote_authors[new_index - 1] +"@1x.png')";
            left_2.style.backgroundImage = path + quote_authors[new_index - 2] +"@1x.png')";
            
            right_1.style.backgroundImage = path + quote_authors[new_index + 1] +"@1x.png')";
            right_2.style.backgroundImage = path + quote_authors[new_index + 2] +"@1x.png')";
        }
        else if (new_index == 1){
            center.style.backgroundImage = path + quote_authors[new_index] +"@1x.png')";
            
            current_quote.innerHTML = quotes[new_index].toUpperCase();
            author.innerText = quote_authors[new_index].toUpperCase();
            current_index = new_index;

            left_1.style.backgroundImage = path + quote_authors[new_index-1] +"@1x.png')";
            left_2.style.backgroundImage = path + quote_authors[quotes.length - 1] +"@1x.png')";
            
            right_1.style.backgroundImage = path + quote_authors[new_index + 1] +"@1x.png')";
            right_2.style.backgroundImage = path + quote_authors[new_index + 2] +"@1x.png')";
            
        }
        else if (new_index == 0){
            center.style.backgroundImage = path + quote_authors[new_index] +"@1x.png')";
            current_quote.innerHTML = quotes[new_index].toUpperCase();
            author.innerText = quote_authors[new_index].toUpperCase();
            current_index = new_index;

            left_1.style.backgroundImage = path + quote_authors[quotes.length - 1] +"@1x.png')";
            left_2.style.backgroundImage = path + quote_authors[quotes.length - 2] +"@1x.png')";

            right_1.style.backgroundImage = path + quote_authors[new_index + 1] +"@1x.png')";
            right_2.style.backgroundImage = path + quote_authors[new_index + 2] +"@1x.png')";
        }
        else if (new_index == quotes.length -1){
            new_index = quotes.length -1;
            center.style.backgroundImage = path + quote_authors[new_index] +"@1x.png')";
            current_quote.innerHTML = quotes[new_index].toUpperCase();
            author.innerText = quote_authors[new_index].toUpperCase();
            current_index = new_index;

            left_1.style.backgroundImage = path + quote_authors[new_index - 1] +"@1x.png')";
            left_2.style.backgroundImage = path + quote_authors[new_index - 2] +"@1x.png')";

            right_1.style.backgroundImage = path + quote_authors[0] +"@1x.png')";
            right_2.style.backgroundImage = path + quote_authors[1] +"@1x.png')";
        }
        else if (new_index == quotes.length -2){
            new_index = quotes.length -2;
            center.style.backgroundImage = path + quote_authors[new_index] +"@1x.png')";
            current_quote.innerHTML = quotes[new_index].toUpperCase();
            author.innerText = quote_authors[new_index].toUpperCase();
            current_index = new_index;

            left_1.style.backgroundImage = path + quote_authors[new_index - 1] +"@1x.png')";
            left_2.style.backgroundImage = path + quote_authors[new_index - 2] +"@1x.png')";

            right_1.style.backgroundImage = path + quote_authors[new_index + 1] +"@1x.png')";
            right_2.style.backgroundImage = path + quote_authors[0] +"@1x.png')";
        }


        center.style.backgroundSize = "cover";
        left_1.style.backgroundSize = "cover";
        left_2.style.backgroundSize = "cover";
        right_1.style.backgroundSize = "cover";
        right_2.style.backgroundSize = "cover";
    }
    else{
        console.log("Student quotes and students don't match");
    }
}