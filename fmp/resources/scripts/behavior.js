function httpGet(theUrl)
{
	/*
	* Retrieves data in string format from an html request
	*/
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            return xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", theUrl, true );
    xmlhttp.send();    
}


function extractFileData(csvFile)
	{
			/*
			* Extracts location data from csv file 
			* Returns string containing file data
			*/
			var rawFile = new XMLHttpRequest();
			var fileData;
			rawFile.open("GET", csvFile, false);
			if(rawFile.readyState === 4)
			{
				if(rawFile.status === 200 || rawFile.status == 0)
				{
					return rawFile.responseText;
				}
			}
			rawFile.send(null);
	}
	
function getLocations(string)
	{
		/*
		* Extracts location data from string
		* Returns an array of locations
		*/
		
		var locationsList = new Array();
		//split string at new line
		var stringLines = string.split('\n');
		var i, length = stringLines.length;
		for	(i = 0; i< length; i++)
			{
				var index = stringLines[i].indexOf(';');//index of first semicolon
				var loc = stringLines[i].slice(0, index);//slices string from start until first semicolon
				locationsList.push(loc);
			}
		return locationsList;
	}
function spaceToUnderscore(string)
	{
		/*
		* Replaces spaces with underscores in given string 
		* Returns string result
		*/
		return string.replace(/\s/g,'_');
	}
	
function getCoordinates(string)
	{
		/*
		* Gets coordinates from returned string in google geocoding API
		* Returns a dictionary with keys Lat & Lon with their respective values
		*/
	
	}
function initMap() {/*
var x = {lat: -33.957743, lng: 18.461282};
var y = {lat: -33.957743, lng: 18.466272};
var z = {lat: -33.955743, lng: 18.469262};
var a = {lat: -33.959743, lng: 18.470252};
var b = {lat: -33.957743, lng: 18.470242};
var c = {lat: -33.953743, lng: 18.471232};

var list = [x, y, z, a, b, c, d];*/
var d = {
	   "lat" : -33.9536132,
	   "lng" : 18.4726713
	};
var list = new Array();
	data = "Varietas Residence university of cape town;Vee Shenge;7 Room(s);House,Fully furnished;Jammie Shuttle, Public transport;Parking, Internet, Laundry, Digs in great condition. Right across Kilindini Residence, close to shops. Open plan kitchen, comfortable lounge, fully furnished. 2 showers. Uncapped internet. Cleaner once a week for common areas\nKilindini Residence Main Road;Vee Shenge;7 Room(s);House,Fully furnished;Jammie Shuttle, Public transport;Parking, Internet, Laundry, Digs in great condition. Right across Kilindini Residence, close to shops. Open plan kitchen, comfortable lounge, fully furnished. 2 showers. Uncapped internet. Cleaner once a week for common areas\nFuller Hall Residence Road;Vee Shenge;7 Room(s);House,Fully furnished;Jammie Shuttle, Public transport;Parking, Internet, Laundry, Digs in great condition. Right across Kilindini Residence, close to shops. Open plan kitchen, comfortable lounge, fully furnished. 2 showers. Uncapped internet. Cleaner once a week for common areas\nSmuts Hall Residence Road;Vee Shenge;7 Room(s);House,Fully furnished;Jammie Shuttle, Public transport;Parking, Internet, Laundry, Digs in great condition. Right across Kilindini Residence, close to shops. Open plan kitchen, comfortable lounge, fully furnished. 2 showers. Uncapped internet. Cleaner once a week for common areas\nForest hill residence university of cape town;Vee Shenge;7 Room(s);House,Fully furnished;Jammie Shuttle, Public transport;Parking, Internet, Laundry, Digs in great condition. Right across Kilindini Residence, close to shops. Open plan kitchen, comfortable lounge, fully furnished. 2 showers. Uncapped internet. Cleaner once a week for common areas\nKopano Residence University of Cape town;Jessica Kietzmann;1 Room(s);House,Fully furnished; Jammie Shuttle,;SHORT TERM. 10% midweek discount. Private entrance, double bed, fully equipped kitchenette, en-suite bathroom, walk-in cupboard and TV (with DVD's)\nGlen Res university of cape town;Lynn Chamberlain;1 Room(s), Smoking allowed, Drinking allowed;Garden cottage,Fully furnished;Jammie Shuttle, Public transport;Parking, Security, DSTV, Laundry, Fully furnished cottage with lounge, bathroom, bedroom & kitchen. Possibly another room if wanted. Serviced once a month and linen provided.\nWoolsack residence woolsack road;Wendy Orpen-Lyall;1 Room(s)  ;House,Fully furnished;Jammie Shuttle, Public transport;Security, Internet, DSTV, Fully furnished, independent, en-suite room, for short term rentals. It has DSTV, wifi, kettle, microwave and fridge\nLeo Marquad Hall baxter rd;Karen Loseby;2 Room(s), Drinking allowed ;Flat,Semi-furnished;Jammie Shuttle ;R12 000 including weekly cleaning of R300 or R11 000\nCollege house residence main road cape town;Sino Jwacu;1 Room(s), Drinking allowed ;House,Fully furnished;Public transport ;Security, Laundry, Female tenants preferred\nGraca Machel Hall University of cape town;Mike Metelerkamp;12 & 7 Room(s), Smoking allowed, Drinking allowed;House,Fully furnished;Jammie Shuttle ;Security, Internet, Laundry, Fully furnished/ Serviced Mon-Fri. Electricity on prepaid for tenant account. Close to Jammie, station, taxi rank. 1km to upper campus.\nLiesbeeck Gardens selby rd;Nabeelah Moosa;9 Room(s)  ;Room in flat,Fully furnished;Public transport ;Parking, Internet, Laundry, Rental includes electricity. Deposit required. Contact owner for more information\nBaxter Hall cecil rd;Duncan Liang;1 Room(s)  ;Room in flat,Semi-furnished;Jammie Shuttle, Public transport;For female students only, walking distance to campus. Rent excludes water and electricity\nTugwell Hall baxter rd cape town;Gorgina Djan;3 Room(s)  ;House,Semi-furnished;Jammie Shuttle, Public transport;Parking, Security, Laundry, THREE FRIENDS IN A HOUSE. A Victorian hide-away. Three small rooms, two bathrooms, DSTV connection for tenants optional subscription, security alarm, washing machine, prepaid electricity metre, open plan kitchen and lounge" 
	//get locations
	locations = getLocations(data);
	//prepare locations

var geocoder = new google.maps.Geocoder();
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 15,
  center: d
});

var marker, i, l = locations.length;

var markerType= 'Student Residence', iconName, iconPath= './resources/images/';
for (i=0; i<l; i++)
	{
		var locationToGet = spaceToUnderscore(locations[i]);
		var lnglat = geocoder.geocode({'address': locationToGet},function(results, status) {
			  if (status == 'OK') {
				if(markerType === 'Student Residence')
					{
						iconName = 'lodging.png';
					}
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location,
					icon: iconPath + iconName ,
					title: locationToGet
				});
				marker.addListener('click', function() {
				infowindow.open(map, marker);
				});
			  } else {
				//alert('Geocode was not successful for the following reason: ' + status);
			  }
			}); 
	var infowindow = new google.maps.InfoWindow({
	  content: markerType
	});
	}
/*for (i = 0; i < list.length ; i++)
	{
		
		marker = new google.maps.Marker({
  position: list[i],
  map: map,
  icon: './resources/images/lodging.png'
});       
}*/
}
var menuOn =  false;
var prevSize;
function checkMenuOnScreenChange()
	{	
	var menuList = document.getElementById('menuList');
	var menuButton = document.getElementById('menuButton');
	var filterList = document.getElementById('filterPanel');
	var filterButton = document.getElementById('filterButton');
	if(window.screen.width < 736)
		{
			menuButton.style.display = 'block';
			if(prevSize>736 || prevSize===null)
				{
					toggleMenu();
				}
		}	
	else if (window.screen.width < 1080 && window.screen.width >736)
		{
			menuList.style.display= 'inline';
			menuOn = true;
			menuButton.style.display = 'none';
			menuButton.innerHTML = 'close';
			
			filterButton.style.display = 'block';		
			if(prevSize>1080)
				{
					toggleFilter();
				}
		}
		else
		{
			menuList.style.display= 'inline';
			menuOn = true;
			menuButton.style.display = 'none';
			menuButton.innerHTML = 'close';
			filterList.style.display= 'block';
			filterOn = true;
			filterButton.style.display = 'none';
			filterButton.innerHTML = 'close';
			
		}
		prevSize = window.screen.width;
	}
function toggleMenu() {

	var menuList = document.getElementById('menuList');
	var menuButton = document.getElementById('menuButton');
	var bgBlur =  document.getElementById('bgBlur');
	if(filterOn)
		{
			toggleFilter();
		}
	if(menuOn)
		{
			menuList.style.display= 'none';
			menuOn = false;
			menuButton.style.color = 'inherit';
			menuButton.innerHTML = 'menu';
			menuButton.style.background = 'none';
			bgBlur.style.display = 'none';
		}
	else
		{
			
			menuList.style.display= 'block';
			menuOn = true;
			menuButton.style.color = '#fcfcfc';
			menuButton.style.backgroundColor = '#6894ed';
			menuButton.style.borderRadius = '10';
			menuButton.innerHTML = 'x';
			bgBlur.style.display = 'block';
			
			
		}
	}
var filterOn = false;
function clearScreen()
	{
		if (filterOn)
			toggleFilter();
		if (menuOn)
			toggleMenu();
	}
function toggleFilter() {

	var filterList = document.getElementById('filterPanel');
	var filterButton = document.getElementById('filterButton');
	var bgBlur =  document.getElementById('bgBlur');
			if(filterOn)
				{
					filterList.style.display= 'none';
					filterOn = false;
					filterButton.innerHTML = 'filters';
					filterButton.style.backgroundColor = '#6894ed';
					filterButton.style.color = 'white';
					bgBlur.style.display = 'none';
				}
			else
				{
					
					filterList.style.display= 'block';
					filterOn = true;
					filterButton.style.color = '#4b4b4b';
					filterButton.style.backgroundColor = 'orange';
					filterButton.innerHTML = 'close';
					bgBlur.style.display = 'block';
					
					
				}
	}

function displayFilterOptions(filterHeading)
	{
		var heading = document.getElementById(filterHeading);
		var thisOptions = document.getElementById(filterHeading).getElementsByClassName('filterOptions'); //gets options of clicked filter heading
		var allOptions = document.getElementsByClassName('filterOptions');
		var allHeadings = document.getElementsByClassName('filterHeading');
		var i, l= allOptions.length, l2 = thisOptions.length, l3 = allHeadings.length;
		for (i=0; i<l; i++)
			{
				allOptions[i].style.display = 'none';
			}
		for (i=0; i<l2; i++)
			{
				thisOptions[i].style.display = 'block';
			}
		for (i=0; i<l3; i++)
			{
				allHeadings[i].style.background ='none';
			}
		heading.style.backgroundColor ='#7b7b7b';
		
	}

