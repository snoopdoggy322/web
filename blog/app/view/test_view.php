<style>
    .error {
        color : red;
    }
</style>

<!-- <script src="public/scripts/test.js"></script> -->

	<title>Гусев В.Я. Тест</title>
<link rel="stylesheet" href="public/css/style1.css">

<body>
	<header>
		<h1>Тест на знания Численных методов в информатике</h1>
	</header>
	 <div class="profile" align="center"><img src="https://50.img.avito.st/640x480/3772414150.jpg" width="30%" >
  </div>
<div display="inline-block"; class = "tex">

<div class="form" style="text-align: justify;">
 
  <form name = "Test"  method="POST">
    <div align="center">
      <label for="name">ФИО</label>
       <input type="text" name="name" class="formDesign" required>

<?php
          if( isset( $_POST['conf'] ) )
    {
            if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
            }
            ?>




    </div>
    <div align="center">
      <label >Группа</label>
      <select name = "group">
<option>ИС-1</option>
<option>ИС-2</option>
<option>ИС-3</option>
<option>ИС-4</option><
<option>ИС-5</option></select>
    </div>
<div>
	<p><b>Выберите 3 вида погрешностей</b></p>
  <input type="checkbox" name="option1" value="a1" >Неустранимая погрешность.<Br>
   <input type="checkbox" name="option2" value="a2">Погрешность метода<Br>
   <input type="checkbox" name="option3" value="a3">Вычислительная погрешность<Br>
   <input type="checkbox" name="option4" value="a4">Нустойчива погрешность<Br> 
</div>
 <div> 
<p><b>Метод называется ......, если в предположении
отсутствия ошибок округлений, получается точное решение за конечное
число шагов.</b></p>
 <select name = "z2"><option>Пропущенное слово</option>
<option>итерационным</option>
<option>первым</option>
<option>точным</option>
<option>преобразований</option><
<option>линейным</option></select>
 </div>
<div>
	<p><b>Запишите одну из формул Ньютона-Котеса</b></p>
<input type="text" name="z3" required>
</div>
    <input type="submit" name="conf" value="Готово" onclick="validF(document.forms.Test);">
     <input type="reset"value="Очистка формы"></button> 
  </form> 
</div>
</div>
</body>

