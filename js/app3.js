$(document).ready(function(){
$.ajax({
	url: "http://localhost/hung/reststatsgraph.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var rid=[];
		var nooforders=[];
		for(var i in data)
		{
			rid.push("Rest Id: "+ data[i].rid+","+data[i].rname);
			nooforders.push(data[i].nooforders);
		}
		var chartdata={
			labels:rid,
			datasets:[
			{
				label: 'orders',
				backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor:'rgba(200,200,200,0.75)',
				hoverBackgroundColor:'rgba(200,200,200,1)',
				hoverBorderColor:'rgba(200,200,200,1)',
				data:nooforders
				
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