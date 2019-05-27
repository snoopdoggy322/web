<body>
	<link rel="stylesheet" href="public/css/style1.css">

	<header>
		<h1>Мой блог</h1>
	</header>

<div display="inline-block"; class="tex">

	<?php

$count = 4;// Количество записей на странице
  $page = $_GET["page"];// Узнаём номер страницы
  if (!$page) $page=1;
	$shift = $count * ($page -1);
//require_once 'app/models/Model_Blog.php';

$s= "SELECT * FROM `myblog` LIMIT $shift, $count";
$test = BlogModel::find_all();
echo $c=count($test);
 $test = BlogModel::find_q($s);

if (count($test)) {
    // Open the table
echo '<table border="1" bgcolor=#sdkfj cellspacing="5" cellpadding="2" width="100%" height="100% " text-align= "left"
text-indent= "1" color="white">';
          foreach ($test as $tests) {

 echo "
  <tr>

		<td>№</td>
        <td>  $tests[id]</td>
        <input hidden id=$tests[id] value = $tests[id] ></input>
        ";
            if($_SESSION['admin']!=NULL)
       echo "  <td> <a href='#edit' onclick='getblog($tests[id])'>Редактировать</a></td>";

  echo "  </tr>
     <tr  text-align='left'>
        <td>Дата</td>
        <td>$tests[date]</td>
    </tr>
    <tr>
        <td>Тема</td>
        <td>$tests[theme]</td>
    </tr>
    <tr>
        <td>Изображение</td>
        <td><img width='60%' align='left' src='$tests[path]' alt='$tests[path]'></td>
    </tr>
    <tr>
        <td>Текст</td>
        <td>$tests[text]</td>
    <tr>
        <td>Коментарии</td>
        <td><br>";
$s=BlogModel::find_comments($tests[id]);
if (count($s)){

 foreach ($s as $st) {
echo "Пользователь ".$st[name_user]." - ";
  echo $st[Text]."<br>";
 }}
else{
  echo "Коментариев пока нет";
}
if($_SESSION['name']!=NULL)
       echo "<a href='#addcomment' onclick='getblogid($tests[id])'>Добавить коментарий</a>";

        echo "
      </td>
    </tr>
    ";
}
    echo "</table>";
print "<center>".BlogModel::LeftRight($c,$page,"blog?page=",$count)."</center>";
}

?>
<style >
.modalbackground {
margin: 0; /* убираем отступы */
padding: 0; /* убираем отступы */
position: fixed; /* фиксируем положение */
top:0; /* растягиваем блок по всему экрану */
bottom:0;
left:0;
right:0;
background: rgba(0,0,0,0.5); /* полупрозрачный цвет фона */
z-index:100; /* выводим фон поверх всех слоев на странице браузера */
opacity:0; /* Делаем невидимым */
pointer-events: none; /* элемент невидим для событий мыши */
}

/* при отображении модального окно - именно здесь начинается магия */
.modalbackground:target {
    opacity: 1; /* делаем окно видимым */ 
    pointer-events: auto; /* элемент видим для событий мыши */
}

/* ширина диалогового окна и его отступы от экрана */
.modalwindow {
    width: 100%;
    max-width: 600px;
    margin: 10% auto;
    padding: 2%;
    background: #fff;
    border-radius: 3px;
}



/* вид кнопки ЗАКРЫТЬ */
.modalwindow  a {
color: black;
display: block;
color: #fff;
background: #369;
padding: 2%;
margin: 0 auto;
width: 50%;
border-radius: 3px;
text-align: center;
text-decoration: none;
}
.modalwindow form{
color: black;
}

/* вид кнопки ЗАКРЫТЬ при наведении на нее мыши */
.modalwindow a:hover {
background: #47a;
}
</style>

<div id="edit" class="modalbackground" >
    <div class="modalwindow">
        <form method="POST">
            <br>
            <input hidden  id="idedit" type="text" name="id"></input>
        Тема<input  id="themeedit" type="text" name="theme"></input><br>
       Текст <textarea id="textedit" type="text" name="text"></textarea>
       <br>
       <input type="submit" name="accept">
<?php
require_once 'app/models/Model_Blog.php';

   if( isset( $_POST['accept'] ) ){
$q = "UPDATE myblog SET theme='".$_POST[theme]."', text = '".$_POST[text]."' WHERE id = $_POST[id]";
echo $q;
BlogModel::get_q($q);
echo '<script>window.location = "blog";</script>';
}

?>


</form>
        <a href=" ">Закрыть</a>
    </div>
</div>


<script type="text/javascript">
  /* Функция, создающая экземпляр XMLHTTP */
  function getXmlHttp() {

    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (E) {
        xmlhttp = false;
      }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }
  function getblog(id) {
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open("POST", 'ajaxedit', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем тип содержимого
    xmlhttp.send("id=" +  id); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
            //alert(xmlhttp.responseText);
           var str=xmlhttp.responseText.split('/ajaxedit')[1];
           var theme= str.split('%')[0];
             var text= str.split('%')[1];
          document.getElementById("themeedit").value = theme;
          document.getElementById("textedit").value = text;
           document.getElementById("idedit").value = id;
        }
      }
    };
  }


  function getblogid(id) {
document.getElementById("id_coment").value = id;
}


</script>


<div id="addcomment" class="modalbackground" >




    <div class="modalwindow">
      <?php  
require_once "app/view/coment.php";
      ?>
<form action="" method="post" target="hiddenframe" enctype="multipart/form-data" >
  
   Текст коментария <textarea id="commentedit" type="text" name="text"></textarea>
    <input type="hidden" name="actionFunc2" value="addcoment" />
     <input hidden id="id_coment" type="text" name="id" />
     <br>
   <input type="submit" name="upload" id="upload" value="Коментировать" />

</form>
<iframe width="1000" height="400" hidden id="hiddenframe" name="hiddenframe"  src="">

</iframe>


<?php

?>


</form>
        <a href=" ">Закрыть</a>
    </div>
</div>


</table>
</div>

</body>

