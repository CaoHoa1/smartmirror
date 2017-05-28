function news(id) {
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
		
		
	
        console.log(r);
		var _randomIndex= Math.floor(Math.random() *(r['query'].results['item']).length );
		var msg= r['query'].results['item'][_randomIndex].title;
		document.getElementById('txt2').innerHTML =msg;
		
    })
	
	
	
})
}, 3000);
}