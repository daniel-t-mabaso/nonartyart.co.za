function expand(id){
  /*expands the button to reveal the full text*/
  var x = document.getElementById(id);
  if (x != 'undefined')
    {
      x.style.width= "200px";
      x.style.marginLeft = "-75px";
      var text;
      switch (id)
        {
          case ('GD'):
            text = 'Graphic Design';
            break;
          case ('WD'):
            text = 'Web Development';
            break;
          case ('AD'):
            text = 'App Development';
            break;
        }
      x.innerHTML = text;
    }
    else{console.log('not an object')}

    }

function contract(id){
  /*expands the button to reveal the full text*/
  var x = document.getElementById(id);
  if (x != 'undefined')
    {
      x.style.width= "45px";
      x.innerHTML = id;
      x.style.marginLeft = "0px";
    }
    else{console.log('not an object')}

    }
