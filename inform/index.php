<!DOCTYPE html>
<html lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
html{
    font-family: 'Montserrat', sans-serif;
}
    .max-width{
        width: 100%;
    }
    .small-width{
        width: 400px;
    }
    .center-all{
        margin: 0 auto;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .center-txt{
        text-align: center;
    }
    .left-txt{
        text-align: left;
    }
    html, body{
        position: absolute;
        top: 0px;
        left: 0px;
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100%;
    }
    
.alt-bg{
    background-color: #f4f4f4;
}
    .lds-ripple {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-ripple div {
  position: absolute;
  border: 4px solid #22497D;
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 28px;
    left: 28px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: -1px;
    left: -1px;
    width: 58px;
    height: 58px;
    opacity: 0;
  }
}

    .form-input{
        width: calc(100% - 30px * 2 - 1px * 2);
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
        margin-bottom: 5px !important;
        margin-top: 15px !important;
        border: none;}
        a{
        text-decoration: none;
        font-style: none;
    }
    .center{
        margin: 0 auto;
    }
    .form-button{
        width: calc(100%);
        display: block;
        height: 30px;
        line-height: 30px;
        background-color: #2b2b2b;
        color: white;
        border: none;
        cursor: pointer;
        text-decoration:;
    }
    .primary-bg{
        background-color: #22497D;
    }
    .primary-txt{
        color: #22497D;
    }
    .danger-txt{
        color: red;
    }
    .danger-bg{
        background-color: red;
    }
    .white-txt{
        color: #fff;
    }
    
    .button{
        width: calc(250px);
        padding: 15px;
        text-decoration: none;
    }
</style>
    
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Inform</title>
</head>
<body class="primary-bg">
    
    <div class='max-width center-txt'>
        <div class="primary-bg white-txt center-all">
            <h1>INFORM</h1>
            <p>Community Notice System</p>
        </div>
        <div class="alt-bg max-width">
            <div id='status-panel' class="center center-all primary-txt center-txt">
                
            <div class="center-all"></div>
                <div class="lds-ripple">
                    <div></div>
                    <div></div>
                </div>
                <br><br><b>Loading...</b>
            <div class="center-all"></div>
            </div>
        </div>
        
        <script>
            function isSiteOnline(url,callback) {
    // try to load favicon
    var timer = setTimeout(function(){
        // timeout after 5 seconds
        callback(false);
    },5000)

    var img = document.createElement("img");
    img.onload = function() {
        clearTimeout(timer);
        callback(true);
    }

    img.onerror = function() {
        clearTimeout(timer);
        callback(false);
    }

    img.src = url+"/favicon.ico";
    }
    
    isSiteOnline("http://196.24.175.139/inform",function(found){
    if(found) {
        // site is online
        setTimeout(function(){window.location = 'http://6569aa4d11b0.ngrok.io/inform/'; }, 2000);
    }
    else {
        setTimeout(function(){ document.getElementById('status-panel').innerHTML = "<div class='primary-txt'><img style='width: 120px; height: 120px;' src='ic_launcher.png'><br><p style='padding: 20px; width: calc(100% - 20px * 2);'>Unable to load the Community Notice System at this time.<br>Please try again later.<br><br></p></div><a href=''><div class='center form-input white-txt primary-bg'>Retry</div></a>"; }, 3000);
    }
})
        </script>
    </div>
</body>
</html>