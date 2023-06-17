var offset;
			var r3 ;
			function offSet(el) {
				var rect = el.getBoundingClientRect(),
				scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
				scrollTop = window.pageYOffset || document.documentElement.scrollTop;
				return { top: -rect.top , left: rect.left}
			}
			window.addEventListener('load', function(){toggleHeader();});
			window.addEventListener('scroll', function(){toggleHeader();});
			
			function toggleHeader(){
				var header = document.getElementById('ROW-1');
				var logo = document.getElementById('header-logo');
				var bar = document.getElementById('header-navigation-bar');
				r3 = document.getElementById('ROW-3');
				offset = offSet(r3);
				
				if(window.innerWidth > 1080){
					if(offset.top>0){
						header.style.position = 'fixed';
						header.style.zIndex = '2';
						header.style.top = '0px';
						header.style.boxShadow = '1px 1px 1px 0px #7b7b7b';
						logo.style.opacity = 1;
						//bar.style.color = '#282828';
						//bar.style.opacity = 1;
					}
					else{header.style.position = 'absolute';
						header.style.zIndex = '1';
						header.style.top = '100%';
						header.style.boxShadow = 'none';
						logo.style.opacity = 0;
						//bar.style.color = 'white';
						//bar.style.opacity = 0.7;
						//logo.style.opacity = (document.body.offsetHeight/(document.body.offsetHeight-offset.top)-0.35);
					
					}
					//console.log(document.body.offsetHeight/(document.body.offsetHeight-offset.top)-0.4);
				}else{
					header.style.position = 'fixed';
						header.style.zIndex = '2';
						header.style.top = '0px';
						header.style.boxShadow = '1px 1px 1px 0px #7b7b7b';
						logo.style.opacity = 1;
				}
			}