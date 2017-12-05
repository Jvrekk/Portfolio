
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

function galaxy(amount){
  const canv = document.querySelector('#stars');
  const ctx = canv.getContext('2d');
  let canvH = canv.height = innerHeight+0.2*innerHeight;
  let canvW = canv.width = innerWidth-17;
  
 
   
  addEventListener('resize', function(){
    canvH = canv.height = innerHeight+0.2*innerHeight;
    canvW = canv.width = innerWidth-17;
    init(amount);
  });
  
 
  ctx.fillStyle='#fff';
  function Star(x,y,size){
    this.x = x;
    this.y = y;
    this.size = size;
    
    this.draw = function(){
      ctx.fillRect(this.x,this.y,this.size,this.size);
    }
    
    this.update = function(){
      if(this.size==2){
        this.y-=1;
      }
      if(this.size==3){
        this.y-=.6;
      }
      if(this.size==4){
        this.y-=.4;
      }
      
      if(this.y<-this.size){
        this.y = canv.height;
      }
      this.draw();
    }
  }



  function init(amount){
    ctx.fillStyle='#fff';
    starsArr = [];
    for(let i=0;i<amount;i++){
    let sizeM = i%3 + 2;
    let x = Math.random()*canvW;
    let y = Math.random()*canvH; 

    starsArr.push(new Star(x,y,sizeM)); 
    }
  }

  function animate(){
    requestAnimationFrame(animate);
    ctx.clearRect(0,0,canvW,canvH);

    for(let i=0;i<starsArr.length;i++){
      starsArr[i].update();
    }
  }
  init(amount);
  animate(); 
}
galaxy(150);

