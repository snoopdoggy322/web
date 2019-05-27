

<style>
    .error {
        color : red;
    }
</style>


<body>
	<link rel="stylesheet" href="public/css/style1.css">

	<header>
		<h1>Редактор блога</h1>
	</header>
    <?php
date_default_timezone_set('Etc/GMT-3')
?>
<div class="tex">
 <form method="POST"  enctype="multipart/form-data" name="form_editor" style="font-size: 20px"><br>
Тема <input placeholder="Тема записи в блог"  maxlength="100" name="name" type= text class="formDesign" > </input> <br>



    <?php

   if( isset( $_POST['accept'] ) ){
   if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
}

?>

Изображение <input type="image" placeholder="Тема записи в блог"  maxlength="100" name="name" type= text class="formDesign" ></input><br>
<input type="file" accept="image/*,image/jpeg" placeholder="Тема записи в блог"  maxlength="100" name="file" type= text class="formDesign" ></input><br>
Тест сообщения <textarea type="text" placeholder="Текст записи" rows="25" cols="150" maxlength="1000" name="text" type= text class="formDesign" ></textarea>

  <?php

require 'app/models/Model_Blog.php';



   if( isset( $_POST['accept'] ) ){
   if($model && $model->getErrorByField('text')) {
                echo "<div class='error'>" . $model->getErrorByField('text')."</div>";
            }
else{   

$ImageName = $_FILES['file']['name'];
$fileElementName = 'file';
$path = 'public/photo/'; 
$location = $path . $_FILES['file']['name']; 
move_uploaded_file($_FILES['file']['tmp_name'], $location); 


$DateTime = date('Y-m-d(H:i)');
                echo $DateTime;
              $theme="".$_POST['name']."";
              echo $theme;

              $text="".$_POST['text']."";
                echo $text;
                $path=$location;
                echo $location ;
              $params = [0,$DateTime,$theme,$text,$path];
              print($params);
            BlogModel::save($params);
            }
            }

?>
<br>
<input type="submit" name="accept">
<br>
<input type="f" name="date" value="<?php echo date('Y-m-d(H:i)'); ?> "disabled>
 </form>

</div>
<div class="tex">
    <form method="POST"  enctype="multipart/form-data" >
  Выберите .csv файл <input type="file" accept=".csv" placeholder="csv" name="csvfile"  ></input><br>
<input type="submit" name="accept1"></form>

  <?php
  if( isset( $_POST['accept1'] ) ){
$ImageName = $_FILES['csvfile']['name'];
$fileElementName = 'csvfile';
$path = 'public/photo/'; 
$location = $path . $_FILES['csvfile']['name']; 
move_uploaded_file($_FILES['csvfile']['tmp_name'], $location); 
$row=1;
if (($handle = fopen($location, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
      $data = fgetcsv($handle, 1000, ";");
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
      
          
echo $data[0] . "<br />\n";
echo $data[1] . "<br />\n";
echo $data[2] . "<br />\n";
        $params = [0,$data[2],$data[0],$data[1],""];
              print($params);
            BlogModel::save($params); 
    }
    fclose($handle);
}

unlink($location);
}
?>






</div>

    </div>
</div>




















</body>

