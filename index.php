<!DOCTYPE html>

<html>
<head>
<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
<link rel="stylesheet" href="animate.css">
<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<style type="text/css">
		<?php include('css/main.css') ?>
	</style>


 <title>Smart Mirror</title></head>
<style>
 div{
 
 -webkit-animation-duration: 10s;
  -webkit-animation-delay: 5s;
  -webkit-animation-iteration-count: infinite;
 }
 #date_time{
	 
	 -webkit-animation-duration: 10s;
  
  -webkit-animation-iteration-count: infinite;
	 
 }
 #stoc1{
	 
	 -webkit-animation-duration: 10s;
  
  -webkit-animation-iteration-count: infinite;
	 
 }
 #stoc2{
	 
	 -webkit-animation-duration: 10s;
  
  -webkit-animation-iteration-count: infinite;
	 
 }
 #weather{
	 
	 -webkit-animation-duration: 10s;
  
  -webkit-animation-iteration-count: infinite;
	 
 }
 </style>

<body>
<script>
var iconTable= {
	"1":"wi-day-sunny",
	"2": "wi-day-cloudy",
	"3":"wi-day-cloudy",
	"4":"wi-day-cloudy",
	"5": "wi-day-sunny",
	"6":"wi-day-cloudy-high",
	"7":"wi-cloudy",
	"8": "wi-cloudy",
	"9":"wi-day-sunny",
	"10":"wi-day-sunny",
	"11": "wi-fog",
	"12":"wi-rain",
	"13":"wi-day-rain",
	"14": "wi-day-rain",
	"15":"wi-storm-showers",
	"16":"wi-day-sunny",
	"17": "wi-day-sunny",
	"18":"wi-rain",
	"19":"wi-day-sunny",
	"20": "wi-day-sunny",
	"21":"wi-day-sunny",
	"22": "wi-day-sunny",
	"23":"wi-day-sunny",
	"24":"wi-snowflake-cold",
	"25": "wi-day-sunny",
	"26":"wi-day-sunny",
	"27":"wi-day-sunny",
	"28": "wi-day-sunny",
	"29":"wi-day-sunny",
	"30":"wi-hot",
	"31": "wi-snowflake-cold",
	"32":"wi-day-sunny",
	"33":"wi-night-clear",
	"34": "wi-night-clear",
	"35":"wi-night-cloudy-gusts",
	"36":"wi-cloud",
	"37": "wi-night-cloudy-gusts",
	"38":"wi-cloudy",
	"39":"wi-showers",
	"40": "wi-showers",
	"41":"wi-thunderstorm",
	"42": "wi-thunderstorm",
	"43":"wi-snow",
	"44":"wi-snow-wind",
};
function weather() {

var xmlhttp = new XMLHttpRequest();
var url = "http://dataservice.accuweather.com/forecasts/v1/hourly/1hour/206683?apikey=pasteapi key here&details=true&metric=true";

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
       //console.log(myArr[0]);
		//console.log(myArr[0].IconPhrase);
		//console.log(myArr[0].Temperature.Value +"°" +myArr[0].Temperature.Unit);
		//console.log(myArr[0].Wind.Speed.Value + myArr[0].Wind.Speed.Unit);
		
		var IconPhrase=myArr[0].IconPhrase;
		document.getElementById('IconPhrase').innerHTML =IconPhrase;
		var temp=myArr[0].Temperature.Value +"°" +myArr[0].Temperature.Unit;
		var wind="Wind Speed  "+myArr[0].Wind.Speed.Value + myArr[0].Wind.Speed.Unit;
		document.getElementById('wind').innerHTML =wind;
		
		
		var icon_no=myArr[0].WeatherIcon;
		//console.log(iconTable[icon_no]);
		icon(iconTable[icon_no],temp);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

}
function icon(p,temp) {
	
var str=  '<div  >'+temp+'  <i class="'+p+'  wi "></i></div> ';

  $("#tem").append(str);
}


</script>
<script>
function news() {
setInterval(function(){

YUI().use('yql', function(Y){
	
	var x = Math.floor((Math.random() * 2) + 1);
	if (x==1) {
	var query = 'select * from rss where url = "http://www.hindustantimes.com/rss/topnews/rssfeed.xml"'}
	else if (x==2) {
	var query = 'select * from rss where url = "http://www.hindustantimes.com/rss/cities/delhi/rssfeed.xml"'
	}
    var q = Y.YQL(query, function(r){
        //r now contains the result of the YQL Query as a JSON
		
		
	
       //console.log(Math.floor(Math.random() *(r['query'].results['item']).length ));
		var _randomIndex= Math.floor(Math.random() *(r['query'].results['item']).length );
		var msg= r['query'].results['item'][_randomIndex].title;
		document.getElementById('txt2').innerHTML =msg;
		
    })
	
	
	
})
}, 3000);
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript" src="date_time.js"></script>
<script type="text/javascript" src="comments.js"></script>

<script type="text/javascript" src="stocks.js"></script>



<div class="top left "></>
<div id="date_time"class="date small time animated flash "></div>
<div id="weather"class=" small animated flash ">
<div id="tem" class="medium" ></div>

<div id="IconPhrase" class="xsmall"  ></div>
<div id="wind" class="xsmall"  ></div>
</div>
</div>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
			<script type="text/javascript">window.onload = comments('comments');</script>
			<script type="text/javascript">window.onload = news();</script>
			<script type="text/javascript">window.onload = stocks('stocks');</script>
			<script type="text/javascript">window.onload = weather();</script>
			
<div class="top right ">			
<div id="stoc1"class=" animated flash xsmall"></div>	
<div id="stoc2"class=" animated flash xsmall "></div>	</div>
 <div id="txt" class="  animated bounce lower-third center-hor"></div>
 
<div class="bottom center-hor"><div class="news medium"><div id="txt2"class="  animated pulse " ></div></div></div>
 

 



</body>
</html>