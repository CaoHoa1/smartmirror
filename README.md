# smartmirror
for weather to work get your API key from here https://developer.accuweather.com/ and use refrence from here https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/1hour/%7BlocationKey%7D
edit in the index.php file 
function weather() {

var xmlhttp = new XMLHttpRequest();
var url = "http://dataservice.accuweather.com/forecasts/v1/hourly/1hour/206683?apikey=   pasteapi key here    &details=true&metric=true";
