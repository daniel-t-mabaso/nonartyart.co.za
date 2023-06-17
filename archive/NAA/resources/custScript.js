

/*script for customer.php*/
var signInOn = true;//sign in window shows by default
var quoteOn = true;//price estimate window shows by default
var orderOn = true;//order confirmation window shows by default
var blurOn = true;
var registerOn = true;

function toggleBlur(){
  var blur = document.getElementsByClassName('BLUR');
  if(blurOn){blur[0].style.display="none";blurOn = false;}
  else{blur[0].style.display="block";blurOn = true;}
}
function toggleSignIn(){
  if(quoteOn && blurOn){toggleQuote();}
  toggleBlur();
  var list = [document.getElementById('signInWindow'), document.getElementById('signInBackground')];
  var i;
  var l = list.length;
  if (signInOn){//hide sign in window
    for (i= 0; i < l; i++)
        {
          list[i].style.display='none';
        }
        signInOn = false;
        if (blurOn){toggleBlur();}
    }
  else{//show sign in window
    for (i= 0; i < l; i++)
      {
        list[i].style.display='block';
      }
      signInOn = true;
      if (!blurOn){toggleBlur();}
    }
}

function selectedService(){
  var service = document.getElementById('SELECTED_SERVICE');
  if(service){
  return service.value;}
}
function toggleQuote(){
  var text = selectedService();
  document.getElementById('SER').innerHTML = text;

  var list = [document.getElementById('quoteWindow'), document.getElementById('quoteBackground')];
  var i;
  var l = list.length;
  if (quoteOn){//hide sign in window
    for (i= 0; i < l; i++)
        {
          list[i].style.display='none';
        }
        quoteOn = false;
        if (blurOn){toggleBlur();}
    }
  else{//show sign in window
    for (i= 0; i < l; i++)
      {
        list[i].style.display='block';
      }
      quoteOn = true;
      if (!blurOn){toggleBlur();}
    }
}

function toggleOrder(){
  var list = [document.getElementById('CLOSE'), document.getElementById('orderWindow'), document.getElementById('orderBackground'), document.getElementById('orderText')];
  var i;
  var l = list.length;
  if (orderOn){//hide sign in window
    for (i= 0; i < l; i++)
        {
          list[i].style.display='none';
        }
        orderOn = false;
    }
  else{//show sign in window
    for (i= 0; i < l; i++)
      {
        list[i].style.display='block';
      }
      orderOn = true;
    }
}

function clearScreen(){
  if(signInOn){toggleSignIn();}
  if(quoteOn){toggleQuote();}
  if(registerOn){toggleRegister();}

}
var passportTextBox;
var said;
var ccode;
function RSACitizen()
  {
    var citizen = document.getElementById('RSAC');
    passportTextBox = document.getElementById('PASSPORTNO');
    said = document.getElementById('SAID');
    ccode = document.getElementById('CCODE');
    if(passportTextBox != null){
    if (!citizen.checked)
      {
        passportTextBox.style.opacity="1";
        passportTextBox.required=true;
        passportTextBox.disabled = false;
        ccode.style.opacity="1";
        ccode.required=true;
        ccode.disabled = false;

        said.style.opacity = '0.5';
        said.required = false;
        said.disabled = true;
        citizen=true;
      }
    else
      {
        said.style.opacity = '1';
        said.required = true;
        said.disabled =false;
        passportTextBox.style.opacity="0.5";
        passportTextBox.required=false;
        passportTextBox.disabled = true;
        ccode.style.opacity="0.5";
        ccode.required = false;
        ccode.disabled = true;
        citizen=false;}
      }
  }

var companylist;
function AsCompany()
  { var company = document.getElementById('ASC');
  var companyName = document.getElementById('COMPANY');
  var companyReg = document.getElementById('REGISTRATIONNO');
  companylist = [companyReg, companyName];
    var i;
    var l = companylist.length;
    if (company.checked)
      {
        for(i=0; i<l; i++)
          {
            companylist[i].style.display="inline-block";
            companylist[i].required=true;
          }
        company=true;
      }
    else
      {    for(i=0; i<l; i++)
            {
              companylist[i].style.display="none";
              companylist[i].required=false;
            }
        company=false;
      }
  }

function toggleRegister(){
  if(signInOn && blurOn){toggleSignIn();}
  toggleBlur();
var list = [document.getElementById("NUBackground"), document.getElementById("NUWindow")];

var i;
var l = list.length;
if (registerOn){//hide sign in window
  for (i= 0; i < l; i++)
      {
        list[i].style.display='none';
      }
      registerOn = false;

  }
else{//show sign in window
  for (i= 0; i < l; i++)
    {
      list[i].style.display='block';
    }
    registerOn= true;
  }

}


function changeCategory()
  {
    var sub = document.getElementById('subCat');
    var cat = document.getElementsByName('categoryRadio');
    var catDiv = document.getElementById('cat');

    var i;
    var l = cat.length;

    for(i = 0; i<l; i++)
      {
        if(cat[i].checked)
          {
            if (cat[i].value==="Graphic Design")
              {
                sub.style.display = 'block';
                catDiv.style.float = 'left';
                catDiv.style.marginLeft='29px';
              }
            else
              {
                sub.style.display = 'none';
                catDiv.style.float = 'none';
                catDiv.style.marginLeft='auto';
                catDiv.style.marginRight='auto';
              }
          }
      }
      changeServices();
  }

function changeServices()
  {
    var sub = document.getElementsByName('subCategoryRadio');
    var subDiv = document.getElementById('subCat');
    var cat = document.getElementsByName('categoryRadio');
    var services = document.getElementById('SELECTED_SERVICE');

    if(subDiv.style.display==='block')
      {

        var i;
        var l = sub.length;

        for(i = 0; i<l; i++)
          {
            if(sub[i].checked)
              {
                var code;
                switch (sub[i].value) {
                  case 'Social Media':
                      code = "<option value='Cover Page'>Cover Page</option><option value='Profile Picture'>Profile Picture</option><option value='Cover + Profile'>Both Cover & Profile</option>";
                      services.innerHTML = code;
                    break;
                  case 'Corporate':
                      code = "<option value='Logo Digitization'>Logo Digitization</option><option value='Logo Design'>Logo Design</option><option value='Business Card Design'>Business Card Design</option><option value='Letterhead'>Letterhead Design</option><option value='Corporate Id'>Full Corporate ID Development</option>";
                      services.innerHTML = code;
                    break;
                  case 'Other':
                      code = "<option value='Poster'>Poster</option><option value='Flyers'>Flyers</option><option value='Other'>Other | Details required</option>";
                      services.innerHTML = code;
                      break;
                }
              }
          }

      }
    else
      {
        var i;
        var l = cat.length;

        for(i = 0; i<l; i++)
          {
            if(cat[i].checked)
              {
                var code;
                switch (cat[i].value) {
                  case 'Web Development':
                      code = "<option value='Basic Web Development'>Basic Package</option><option value='Advanced Web Development'>Advanced Package</option><option value='Business Web Development'>Business Package</option><option value='Custom Web Development'>Custom Package</option>";
                      services.innerHTML = code;
                    break;
                  case 'App Development':
                      code = "<option value='Android App'>Android App</option><option value='Windows App'>Windows App</option>";
                      services.innerHTML = code;
                    break;
                }
              }
          }
        }
      }
function toggleConfirm(a)
  {
    var win = document.getElementById('confirmationWin');
    var text = document.getElementById('confirmationText');
    toggleBlur();
    switch(a){
      case 'Order':
        win.style.display = 'block';
        text.innerHTML = 'Order successful!';
        break;
      case 'LogIn':
        win.style.display = 'block';
        text.innerHTML = 'Sign successful!';
        break;
      case 'LogOut':
        win.style.display = 'block';
        text.innerHTML = 'Sign out successful!';
        break;
      case 'Registered':
        win.style.display = 'block';
        text.innerHTML = 'Successfully registered!';
        break;
      case 'hide':
        win.style.display = 'none';
        break;
      default:
        win.style.display = 'block';
        text.innerHTML = 'Error: unknown process!';
        break;
    }
  }
var accountOn = false;
function toggleAccount()
  {
    var accountInfo = document.getElementById('accountInfo');
    var expand = document.getElementById('accEx');

    if(accountOn){
      accountInfo.style.display = 'none';
      expand.innerHTML = '+';
      accountOn = false;
    }
    else{
      accountInfo.style.display = 'block';
      expand.innerHTML = '-';
      accountOn = true;
    }
  }
var projectsOn = false;
function toggleProjects()
  {
    if(accountOn)
      toggleAccount();
    var projectsInfo = document.getElementById('projectsInfo');
    var expand = document.getElementById('projEx');

    if(projectsOn){
      projectsInfo.style.display = 'none';
      expand.innerHTML = '+';
      projectsOn = false;
    }
    else{
      projectsInfo.style.display = 'block';
      expand.innerHTML = '-';
      projectsOn = true;
    }
  }
