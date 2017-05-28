function comments(id) {
setInterval(function(){
    var _list1 = [];
	
	var _list3 = [];
	var today = new Date();
	var hour = today.getHours();
	
	
	
	if (hour >= 3 && hour < 12) {
$.ajaxSetup({ cache: false});
$.getJSON('results1.json', function(data){

            _list1=data;
			 var _randomIndex= Math.floor(Math.random() * _list1.length);
			
			var msg= _list1[_randomIndex].comm1;
			
			
            document.getElementById('txt').innerHTML =msg;
            
}
);
}
else if (hour >= 12 && hour < 17) {
$.ajaxSetup({ cache: false});
$.getJSON('results2.json', function(data){

            _list2=data;
			
			 var _randomIndex= Math.floor(Math.random() * _list2.length);
			 
			var msg= _list2[_randomIndex].comm2;
			
			
            document.getElementById('txt').innerHTML =msg;
			 
}
);
}
else if (hour >= 17 || hour < 3) {
$.ajaxSetup({ cache: false});
$.getJSON('results3.json', function(data){

            _list3=data;
			 var _randomIndex= Math.floor(Math.random() * _list3.length);
			var msg= _list3[_randomIndex].comm3;
			
            document.getElementById('txt').innerHTML =msg;
}
);
}

}, 3000);
}