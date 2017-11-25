let navWidth = $(".menu").css("width");

$(".button").click(function(){
	$('.menu').css('transform',"translateX(-"+navWidth+")");
	$('#page').css('transform',"translateX(-"+navWidth+")");
	$(this).css('opacity',"0");
});
$("#page").click(function(){
	$('.menu').css('transform',"translateX(0px)");
	$(this).css('transform',"translateX(0px)");
	$('.button').css('opacity',"1");
	
});