
var newbox1=document.createElement("img"); 
var divElem = document.createElement("div");

//$('<div class="box"><img src="https://upload.wikimedia.org/wikipedia/ru/d/de/Movie_poster_the_shawshank_redemption.jpg"/>123</div>');
$(function(){
  $("#pobeg").mouseover(function(){
  	newbox1.src="photo/f1.jpg";
  	divElem.style="display:block";
  	divElem.id="imgs";
  	divElem.appendChild(newbox1);
  	document.getElementById('pobeg').appendChild(divElem);
  	 $("#imgs").animate({ opacity: "hide" }, 4000);
  	 $("#imgs").detach(":empty")
});
  })

$(function(){
  $("#kro").mouseover(function(){
  	newbox1.src="photo/f2.jpg";
  	divElem.style="display:block";
  	divElem.id="imgs";
  	divElem.appendChild(newbox1);
  	document.getElementById('kro').appendChild(divElem);
  	 //$("#imgs").animate({ opacity: "hide" }, 4000);
  	 $("#imgs").detach(":empty")
});
  })



$(function(){
  $("#kro2").mouseover(function(){
  	newbox1.src="photo/f3.jpg";
  	divElem.style="display:block";
  	divElem.id="imgs";
  	divElem.appendChild(newbox1);
  	document.getElementById('kro2').appendChild(divElem);
  	 //$("#imgs").animate({ opacity: "hide" }, 4000);
  	 $("#imgs").detach(":empty")
});
  })



$(function(){
  $("#TR").mouseover(function(){
  	newbox1.src="photo/f4.jpg";
  	divElem.style="display:block";
  	divElem.id="imgs";
  	divElem.appendChild(newbox1);
  	document.getElementById('TR').appendChild(divElem);
  	 $("#imgs").animate({ opacity: "hide" }, 4000);
  	 $("#imgs").detach(":empty")
});
  })


$(function(){
  $("#start").mouseover(function(){
  	newbox1.src="photo/f5.jpg";
  	divElem.style="display:block";
  	divElem.id="imgs";
   $("#imgs").opacity= 1.0;
  	divElem.appendChild(newbox1);
  	document.getElementById('start').appendChild(divElem);
  	// $("#imgs").animate({ opacity: "hide" }, 4000);
  	 $("#imgs").detach(":empty")
});
  })


$(function(){
	 $(".films").mouseout(function(){
$("#imgs").animate({ opacity: "hide" }, 4000);
});
  })