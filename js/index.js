let navWidth = $("#primary-menu").css("width");
$(".button").click(function(){
	$('#primary-menu').css('transform',"translateX(-"+navWidth+")");
	$('#page').css('transform',"translateX(-"+navWidth+")");
});
$("#page").click(function(){
	$('#primary-menu').css('transform',"translateX(0px)");
	$(this).css('transform',"translateX(0px)");
	
});