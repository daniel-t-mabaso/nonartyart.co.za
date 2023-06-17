					
window.addEventListener('focus', function(){ text.innerHTML=''; 
				type(list[count++]);startTyping();
				//console.log('focused');console.log(typetext);
				
				});
				
window.addEventListener('blur', function(){clearInterval(typetext);clearInterval(typingInt);
					//console.log('blurred');console.log(typetext);
					
					});
				var text = document.getElementById('typed-text');
				var list = ['Non-Artistic Art', 'Graphic Design','Web Development', 'Designing tomorrow, today'];
				
				var count = 0;
				type(list[count++]);
				
				startTyping();
				
				var typetext;
				var typingInt;
				
				function startTyping(){
					typetext = setInterval(function(){
					if (count >= list.length)
							{
								count=0;
							}
							text.innerHTML= "";
						type(list[count++]);
					}, 6900);
				}
					
				function type(s)
					{ 
						typing = true;
						var c1 = 0;
						var c2 = 0;
						if(s)
						var c3 = s.length;
						else
							return;
						typingInt = setInterval(function(){
						
						if(c1< s.length)
							text.innerHTML = text.innerHTML + s[c1++];
						else if(c2 < 6)
							c2++;
						else if(c3>-1)
							text.innerHTML = s.substring(0,c3--);
							
							
							//text.innerHTML = text.innerHTML.substring(0, (s.length - (c2 - s.length)));
							
						//c2++;
						}, (3000/(s.length+5))
						);
						
						
					}
