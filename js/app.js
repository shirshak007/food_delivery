$(document).ready(function(){
$.ajax({
	url: "http://localhost/hung/menustatsgraph.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var fid=[];
		var price=[];
		for(var i in data)
		{
			fid.push("Food Id: "+ data[i].fid+","+data[i].fdesc);
			price.push(data[i].income);
		}
		var chartdata={
			labels:fid,
			datasets:[
			{
				label: 'Price',
				backgroundColor: 'rgba(200,200,200,0.75)',
				borderColor:'rgba(200,200,200,0.75)',
				hoverBackgroundColor:'rgba(200,200,200,1)',
				hoverBorderColor:'rgba(200,200,200,1)',
				data:price
				
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