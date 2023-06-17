/*Validates cell number*/
function validateNo(){
	var number = document.getElementById('phone').value.trim();
	if (number.length==10){
		for (var i=0; i < number.length; i++){
			if (i< (number.length-1))
			{
				var t = number.substring(i, (i+1));
				if(number.substring(0,1)==0)
					continue
				else
					return false;
				if(!isNaN(t))
					continue;
				return false;
			}
			else
				{
					if(!isNaN(number.substring(i, (i+1))))
						return true;
					return false;
				}
		}
	}
	return false;
}
function validateName(){
	var number = document.getElementById('name').value.trim();
	if (number.length>0){
		return true;
	}
	return false;
}
function ValidateEmail(){
	var number = document.getElementById('email').value.trim();
	if (number.length>8 && !number.includes('?') && !number.includes('/') && !number.includes('\\') && !number.includes('|') && !number.includes('[') && !number.includes(']') && !number.includes('{') && !number.includes('}') && !number.includes('+') && !number.includes('=') && !number.includes(')') && !number.includes('(') && !number.includes('*') && !number.includes('&') && !number.includes('^') && !number.includes('%') && !number.includes('$') && !number.includes('#') && !number.includes('!') && !number.includes('>') && !number.includes('<') && !number.includes(',') && !number.includes(':') && !number.includes(';') && !number.includes(' ')){
		if(number.includes('@') &&number.includes('.'))
		return true;
	}
	return false;
}
function validateComment(){
	var number = document.getElementById('textarea').value.trim();
	if (number.length>0){
		return true;
	}
	return false;
}
function validateRecaptcha(){
   var result = document.getElementById('validate-recapture').value.trim();
   if (result.length>0){
		return true;
	}
	return false;
}
function submitForm(){
	var form = document.getElementById('contactForm');
	if(validateName()){
		//alert('Correct phone format! Enter digits only.')
		if(ValidateEmail())
		{
			if(validateNo()){
				if (validateComment()){
				    if(validateRecaptcha()){
					form.submit();}
					else{
					    alert('Complete reCAPTCHA');
					    }
				}else{
					alert('Please tell us a bit about it.');}
			}
			else
			alert('Please enter a valid RSA phone number!');
		}
		else
		alert('Please enter a valid email address!');
	}
		
	else
		alert('Please enter your name!');
}