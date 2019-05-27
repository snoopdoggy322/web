 function validF(selectObject) {
 var d=selectObject.querySelectorAll('[type="checkbox"]');
 var numberSelected=0;
 var eror="";
 for (var i = 0; i < d.length; i++) {
if (d[i].checked==1)
numberSelected++;}

 
var valid = true;
if ( selectObject.Fname.value == "" )
        {
                eror+= "Пожалуйста заполните поле 'ФИО'.\n";
                valid = false;}
if ( selectObject.group.selectedIndex  == 0 ){
eror+= "Пожалуйста заполните поле 'Группа'.\n";
valid = false;}

if(numberSelected<3)
	eror+="Количество вариантов в 1 задании <3.\n";


if ( selectObject.z2.selectedIndex  == 0 ){
eror+= "Пожалуйста выполните заданиие 2'.\n";
valid = false;}


if ( selectObject.z3.value == "" ){
eror+= "Пожалуйста выполните заданиие 3'.\n";
valid = false;}


alert(eror);
        return valid;
}

