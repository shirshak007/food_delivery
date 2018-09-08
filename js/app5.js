$(document).ready(function(){
$.ajax({
	url: "http://localhost/hung/noofrestgraph.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var area=[];
		var noofrest=[];
		for(var i in data)
		{
			area.push("Area: "+ data[i].area+", PIN: "+data[i].pin);
			noofrest.push(data[i].noofrest);
		}
		var chartdata={
			labels:area,
			datasets:[
			{
				label: 'restaurants',
				backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor:'rgba(200,200,200,0.75)',
				hoverBackgroundColor:'rgba(200,200,200,1)',
				hoverBorderColor:'rgba(200,200,200,1)',
				data:noofrest
				
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