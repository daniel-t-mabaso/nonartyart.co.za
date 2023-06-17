/**
		*-----------------------------HEADER--------------------------------
		* JavaScript code for changing images that depend on mouse position.
		* By Daniel Mabaso, at Non-Artistic Art (http://www.nonartart.co.za)
		* This code is free for use by anyone as long as this header is not 
		* altered nor removed. Enjoy moving your mouse around ;)
		* If you modify the code and want recognition, add your name below
		* and specify what you've changed/added.
		* Other Contributors:
		* -
		* -
		* -
		*----------------------------HEADER_END-----------------------------
		*/
		
		/**
		* event listeners
		*/
		//pass in the class name for the pictures
		var dpList = document.getElementsByClassName('personIcons');
		
		var mouseMoveEvent = document.addEventListener("mousemove", function(e){
		for(var i=0; i< dpList.length; i++){
		changePicture(e.clientX, e.clientY, dpList[i]);}
		});
		
		/**
		* picture properties
		*/
		function getPictureProperties(className){
		/*returns the properties of the picture
		*/
			return className.getBoundingClientRect();
		}
		
		/**
		* functionality
		*/
		function getMouseToPicture(x, y, className){
		/* returns the position of the mouse relative to the picture
		*  used to determine which 'quadrant' the mouse is in
		*/
			var properties = getPictureProperties(className);
			//p stands for picture
			//X is x-coordinate, Y is y-coordinate, H is height and W is width
			var pX = properties.left;
			var pY = properties.top;
			var pW = properties.width;
			var pH = properties.height;
			
			if(y<=pY){
			//if mouse if above the picture
				if ((x<=pX)){
				// and mouse is to the left of picture
					return 1;
				}
				else if((x>pX)&& (x <= (pX+pW-(0.13*pW)))){
				// and mouse is on top of picture
					return 2;
				}
				else{
				//and mouse is to the right of picture
				return 3}
			}
			else if((y > pY) && (y <= (pY+pH-(0.13*pH)))){
			//if mouse is next to the picture
				if ((x<=pX)){
				// and mouse is to the left of picture
					return 4;
				}
				else if((x>pX)&& (x <= (pX+pW-(0.13*pW)))){
				// and mouse is on picture
					return 5;
				}
				else{
				//and mouse is to the right of picture
				return 6;}
			}
			else{
			//if mouse if below the picture
				if ((x<=pX)){
				// and mouse is to the left of picture
					return 7;
				}
				else if((x>pX)&& (x <= (pX+pW-(0.13*pW)))){
				// and mouse is on top of picture
					return 8;
				}
				else{
				//and mouse is to the right of picture
				return 9}
			}
		}
		
		function changePicture(x, y, className){
		/* changes the picture depending on the position of the mouse
		*/
			var newPosition = getMouseToPicture(x, y, className);
			className.src = newPosition+".jpg";
			}