function stocks(id) {
setInterval(function(){
    var _list1 = [];
	
	
	
	
	
	
	
$.ajaxSetup({ cache: false});
$.getJSON('stocks.json', function(data){

            _list1=data;
			var msg1= "S&P BSE SENSEX -- " +_list1['sensex'];
			var msg2= "NIFTY 50 -- " +_list1['Nifty 50'];
			var msg3= "Top Gainer SENSEX" +"\n"+ _list1['tpsen1_name']+" -- "+_list1['tpsen1_val']+"\n"+ _list1['tpsen2_name']+" -- "+_list1['tpsen2_val'];
			var msg4= "Top Gainer NIFTY 50" +"\n"+ _list1['tpnif1_name']+" -- "+_list1['tpnif1_val']+"\n"+ _list1['tpnif2_name']+" -- "+_list1['tpnif2_val'];
			
			
			
			document.getElementById('stoc1').innerHTML =msg1;
			
			document.getElementById('stoc2').innerHTML =msg2;
			
			
			
            
            
}
);




}, 10000);
}