$(document).ready(function(){
$.ajax({
	url: "http://localhost/hung/noofdbgraph.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var area=[];
		var noofdb=[];
		for(var i in data)
		{
			area.push("Area: "+ data[i].area+", PIN: "+data[i].pin);
			noofdb.push(data[i].noofdb);
		}
		var chartdata={
			labels:area,
			datasets:[
			{
				label: 'Delivery Boys',
				backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor:'rgba(200,200,200,0.75)',
				hoverBackgroundColor:'rgba(200,200,200,1)',
				hoverBorderColor:'rgba(200,200,200,1)',
				data:noofdb
				
			}
			]
		};
		var ctx=$("#mycanvas");
		var barGraph=new Chart(ctx,{
			type:'bar',
			data:chartdata
		});
	},
	error: function(data){
		console.log(data);
	}
	
});
});