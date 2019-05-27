<!DOCTYPE html>
<html >
<head>

<meta charset="utf-8">
	<title>Гусев В.Я.</title>


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
  <div class="info">
          <?php include 'app/view/'.$content_view; ?>
        </div> 
	<div id="footer">
		<marquee direction = "left" bgcolor=Red> Гусев Владислав Яковлевич      |         Студент группы ИС/б-32-о    Лабораторная работа №1
		</div>
	

	</html>

