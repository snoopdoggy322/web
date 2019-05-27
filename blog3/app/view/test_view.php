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
require_once ('app/models/Model_Test.php');
          if( isset( $_POST['conf'] ) )
    {
            if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
            else{
              $name="".$_POST['name']."";
              echo $name;
              $grup="".$_POST['group']."";
              $f="1";
               $s="0";
                $t="0";
              $params = [0,$name,$grup,$f,$s,$t];
            TestModel::save($params);
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
<?php
if($_SESSION['name']!=NULL){
//require 'app/models/Model_Test.php';
           $test = TestModel::find_all();

if (count($test)) {
    // Open the table
echo "<table border=1>";
          echo"<th>ФИО</th>";
      echo"<th>Группа</th>";
      echo"<th>1й вопрос</th>";
       echo"<th>2й вопрос</th>";
        echo"<th>3й вопрос</th>";
    foreach ($test as $tests) {
        // Parse the line, retriving the name and e-mail address
        // Output a row

        echo "<tr>";
        echo "<td>$tests[name]</td>";
        echo "<td>$tests[grup]</td>";
        echo "<td>$tests[f]</td>";
        echo "<td>$tests[s]</td>";
         echo "<td>$tests[t]</td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
}

//$test->save()
// уничтожает запись в БД
//$test->delete();
}
?>

</div>
</div>
</body>

