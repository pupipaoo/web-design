$(function(){
	
	$("#SMALL img").click(function(){
		
		var N = $(this).attr("id").substr(2);
		
		$("#BIG").attr( "src" , "images/dog" + N + ".jpg" );	
		
	});

});