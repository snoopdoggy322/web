<body>
	<meta charset="utf-8">
	<title>Гусев В.Я. Обо мне</title>
		<link rel="stylesheet" href="public/css/style1.css">
<script src="public/scripts/jquery.js"></script>

<body background="1.jpg" >
	<header>
		<h1>Регистрация</h1>
	</header>
<div class ="tex" display="inline-block";>


<form method="POST"  name="form_regisration" style="font-size: 20px"><br>
ФИО <input placeholder="ФИО"  maxlength="100" name="name" type= text class="formDesign" required> </input> <br>
    <?php

   if( isset( $_POST['accept'] ) ){
   if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
}

?>
e-mail <input type="email"   maxlength="100" name="email" class="formDesign" required></input><br>
Логин <input type="text"   maxlength="100" name="login" id="login"  class="formDesign" onblur="checkLogin(this.value)" required></input><br>
Пароль <input type="password"  maxlength="100" name="pass" class="formDesign" required></input><br>

<?php 
require_once "app/view/login.php";
echo '<input type="hidden" name="actionFunc" value="reg" >';
?>

<br>
<span id="check_login"></span>


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
  function checkLogin(login) {
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open("POST", 'ajax', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем тип содержимого
   
    xmlhttp.send("login=" +  $("#login").val()); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
        	//alert(xmlhttp.responseText);
          if (xmlhttp.responseText=="/ajaxoff") document.getElementById("check_login").innerHTML = "Логин занят!";
          else document.getElementById("check_login").innerHTML = "Логин свободен!";
        }
      }
    };
  }
</script>



<input type="submit" name="accept" value="Регистрация" >


<br>

</div>

</body>
