$(document).ready(function(){
$.ajax({
	url: "http://localhost/hung/dbstatsgraph.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var dbid=[];
		var nooforders=[];
		for(var i in data)
		{
			dbid.push("DB Id: "+ data[i].dbid+",Name: "+data[i].dbname);
			nooforders.push(data[i].nooforders);
		}
		var chartdata={
			labels:dbid,
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