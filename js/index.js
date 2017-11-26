(function(){
    const baseBodyClass = document.querySelector("body").className;
    const body = document.querySelector("body");
	function bodyClasser(){
		body.className = (body.className == baseBodyClass)?baseBodyClass+" menu-active":baseBodyClass;
	}


	document.querySelector(".menu-trigger").addEventListener("click", function(){
		bodyClasser();
	});
	document.querySelector("#page").addEventListener("click", function(){
		if(body.className != baseBodyClass){
			bodyClasser();
		}
	});
}).call(this);
