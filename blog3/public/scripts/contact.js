 function validname(selectObject) {

 var d=selectObject.querySelectorAll('[type="checkbox"]');
 var numberSelected=0;
 var eror="";
var valid = true;
var reg=/^[\s\dА-я]+$/;


if (!reg.test(selectObject.name.value))
eror+= "Пожалуйста введите коректное ФИО.\n";
if ( selectObject.name.value == "" )
        {
                eror+= "Пожалуйста заполните поле 'ФИО'.\n";
                selectObject.name.className="novalid bk";
                valid = false;
                return;
              }
               if(selectObject.name.value.split(" ").length<3){
                eror+= "Пожалуйста введите коректное ФИО.\n";
              selectObject.name.className="novalid bk";
              return
}

              selectObject.name.className="valid bk";
              }

function validphone(selectObject){

if((selectObject.phone.value.split(" ").length!=1)||(selectObject.phone.value.length<10)||
  (selectObject.phone.value.length>12)||(selectObject.phone.value[0]!="+")){
  selectObject.phone.className="novalid bk";
return;

}
selectObject.phone.className="valid bk";
}

function checkbtn(selectObject){
  if (selectObject.phone.className=="valid bk") 
    if(selectObject.name.className="valid bk"){
    document.getElementsByName("btn").style ="display:block";
alert();
  }

}
// if (eror!="")
// alert(eror);
//         return valid;
// }


function showdiv(){
	var div = document.getElementById("datadiv");
	div.style="display:block;";
}

function drawdateTable(){
var d="";
var div = document.getElementById("datadiv");
var table = document.createElement('TABLE');
var ins = document.getElementById("mydate");
var god = document.getElementById("god");
var mes = document.getElementById("mes");

table.onclick = function(event) {
  var target = event.target; // где был клик
  if (target.tagName != 'TD') return; // не на TD? тогда не интересует
 // alert(target.childNodes[0].nodeValue);
  target.style = "background-color:green; "; // подсветить TD
  div.style="display:none;";
  d=target.childNodes[0].nodeValue+".";
     d=d+mes.options[mes.selectedIndex].text+".";
  d=d+god.options[god.selectedIndex].text+";";

 ins.value=d;
};

table.onmouseover = function(event) {
var target = event.target; // где был клик
 if (target.tagName != 'TD') return; // не на TD? тогда не интересует
 // alert(target.childNodes[0].nodeValue);
  target.style = "background-color:red; "; // подсветить TD
};

table.onmouseout = function(event) {
var target = event.target; // где был клик
 if (target.tagName != 'TD') return; // не на TD? тогда не интересует
 // alert(target.childNodes[0].nodeValue);
  target.style = "background-color:#00d4ff; "; // подсветить TD
};



table.display="inline-block";
table.style="cursor: pointer;border:2px dashed silver; text-align: center;background-color: green;padding: 5px;opacity: 1;margin:10px; align:center;";
var tableBody = document.createElement('TBODY');
table.appendChild(tableBody);
for (var i = 0; i < 6; i++) {
	var tr = document.createElement('TR');
                tableBody.appendChild(tr);
                for (var j = 0; j < 7; j++) {
                	var td = document.createElement('TD');
                	 var cellText = document.createTextNode( (i*7 + j)+1);
                  	 td.className="calen";

                	 if (( i*7 + j)+1<=31)
                	 td.appendChild(cellText);
                    tr.appendChild(td);
                }
            }

div.appendChild(table);

}




(function($){
$(function() {

  $('span.jQtooltip').each(function() {
    var el = $(this);
    var title = el.attr('title');
    if (title && title != '') {
      el.attr('title', '').append('<div>' + title + '</div>');
      var width = el.find('div').width();
      var height = el.find('div').height();
      el.hover(
        function() {
          el.find('div')
            .clearQueue()
            .delay(200)
            .animate({width: width + 20, height: height + 20}, 200).show(200)
            .animate({width: width, height: height}, 200);
        },
        function() {
          el.find('div')
            .animate({width: width + 20, height: height + 20}, 150)
            .animate({width: 'hide', height: 'hide'}, 150);
        }
      ).mouseleave(function() {
        if (el.children().is(':hidden')) el.find('div').clearQueue();
      });
    }
  })

})
})(jQuery)


function realy(){

}

$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
  $('#go').click( function(event){ // лoвим клик пo ссылки с id="go"
    event.preventDefault(); // выключaем стaндaртную рoль элементa
    $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
      function(){ // пoсле выпoлнения предъидущей aнимaции
        $('#modal_form') 
          .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
          .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
    });
  });
  /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
  $('#modal_close,#modal_close1, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
    $('#modal_form')
      .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
        function(){ // пoсле aнимaции
          $(this).css('display', 'none'); // делaем ему display: none;
          $('#overlay').fadeOut(400); // скрывaем пoдлoжку
        }
      );
  });
});