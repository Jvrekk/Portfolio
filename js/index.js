let navWidth = $(".menu").css("width");
let buttonWidth = $(".button").css("width");

$(".button").click(function(){
	$('.menu').css('transform',"translateX(-"+navWidth+")");
	$('#page').css('transform',"translateX(-"+navWidth+")");
	$(this).fadeOut();
	$(this).css('transform',"translateX("+buttonWidth+")");
	$('.menu ul').css('transform',"translateX(0)");
});
$("#page").click(function(){
	$('.menu').css('transform',"translateX(0px)");
	$(this).css('transform',"translateX(0px)");
	$('.button').fadeIn()
	$('.button').css('transform',"translateX(0px)");
	$('.menu ul').css('transform',"translateX(-200px)");	
});
