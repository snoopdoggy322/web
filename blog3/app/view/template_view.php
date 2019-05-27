 <!DOCTYPE html>
<html >
<head>

<meta charset="utf-8">
	<title>Гусев В.Я.</title>
	<div style="
width:200px;
height:120px;
position:absolute;
right: 5px;
font-size: 20;
text-decoration-color: #00d4ff;
background-color: #00d4ff;
opacity: 0.7;
">

<?php
require_once "app/view/login.php";
if($_SESSION['name']==NULL){
echo '<form action="" method="post" 
>
 Логин: <input type="text" name="login" />
<br>
 <input type="hidden" name="actionFunc" value="enter" />
 Пароль: <input type="password" name="password" /><br>
 <input type="submit" value="Войти" name="log_in" />
<a href="registration">Регистрация</a></li>
 </form>' //если переменной нет, выводим форму
;
}
 else {
 	echo $_SESSION['name'];
 	//echo $_SESSION['admin'];
 	if($_SESSION['admin']!=NULL)
 		echo '<br><a href="admin?admin_area=1">Админ меню</a>';
 	echo  '
<form action="" method="post" >
 <input type="hidden" name="actionFunc" value="logout" />
 	<input type="submit" value="Выход" name="logout" />
</form>
 	';
}
?>

</div>
<ul class="menu">
<li><a href="main">Главная страница</a></li>
<li><a href="about">Обо мне</a></li>
<li><a href="interes">Мои инетересы</a>
<ul class="submenu">
<li><a href=interes#увлечение1>Мое хобби</a></li>
  <li><a href=interes#увлечение2>Мои любимые фильмы</a></li>
  <li><a href=interes#увлечение3>Моя любимая музыка</a></li>
  <li><a href=interes#увлечение4>Мое увлечение №4</a></li>
</ul>
</li>
<li><a href="study">Учеба</a></li>
<li><a href="photo">Фотоальбом</a></li>
<li><a href="contact">Контакты</a></li>
<li><a href="test">Тест</a></li>
<li><a href="blog">Мой блог</a>
<ul class="submenu">
 <li><a href=blogeditor>Редактор блога</a></li>
 </ul>
</li>
<li><a href="guest">Гостевая книга</a>
<ul class="submenu">
 <li><a href=guesteditor>Загрузка сообщений гостевой книги</a></li>
 </ul>
</li>
<!-- <li><a href="history">Исторя просмотра</a></li> -->
</ul>




</head>
<body background="public/img/1.jpg" >
<?php 
//require "app/models/Model_stat.php";


//StatModel::save_statistic($_SERVER['REQUEST_URI']);

 ?>

  <div class="info">
          <?php include 'app/view/'.$content_view; ?>
        </div> 
	<div id="footer">
		<marquee direction = "left" bgcolor=Red> Гусев Владислав Яковлевич      |         Студент группы ИС/б-32-о    Лабораторная работа №1
		</div>
	

	</html>
}


