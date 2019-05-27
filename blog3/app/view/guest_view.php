<style>
    .error {
        color : red;
    }
</style>
<body>
	<link rel="stylesheet" href="public/css/style1.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<header>
		<h1>Гостевая книга</h1>
	</header>
<div class="tex">
 <form method="POST"  enctype="multipart/form-data" name="form_editor" style="font-size: 20px"><br>
Фамилия <input placeholder="Фамилия"  maxlength="100" name="name" type= text class="formDesign" > </input> <br>
 Имя<input placeholder=" Имя"  maxlength="100" name="name1" type= text class="formDesign" > </input> <br>
Отчество <input placeholder="Отчество"  maxlength="100" name="name2" type= text class="formDesign" > </input> <br>
  <?php

   if( isset( $_POST['accept'] ) ){
   if($model && $model->getErrorByField('name')) {
                echo "<div class='error'>" . $model->getErrorByField('name')."</div>";
            }
            else {

$path = 'public/files/'; 
$location = $path . "messages.inс"; 
$handle = fopen($location, "a");

$DateTime = date('Y-m-d(H:i)').",";
$name=$_POST['name'].",";
$name1=$_POST['name1'].",";
$name2=$_POST['name2'].",";
$email=$_POST['email'].",";
$txt=$_POST['text']."\n";

$writetext = $DateTime.$name.$name1.$name2.$email.$txt;
if (fwrite($handle, $writetext)) {

header('Location: main');
unset($_POST);

}

else {

echo "Произошла ошибка при записи данных";



    fclose($handle);
}

            }
}

?>
e-mail <input placeholder="e-mail"  maxlength="100" name="email" type= email class="formDesign" > </input> <br>
Отзыв <textarea type="text" placeholder="Отзыв" rows="10" cols="150" maxlength="1000" name="text" type= text class="formDesign" ></textarea>
  


<br>
<input type="submit" name="accept">
<br>
<input type="reset" name="reset">
<input type="f" name="date" value="<?php echo date('Y-m-d(H:i)'); ?> "disabled>
 </form>
</div>




<div display="inline-block"; class="tex">

	<?php

$path = "public/files/"; 
$location = $path . "messages.inс"; 
$row=1;
if (($handle = fopen($location, "r")) !== FALSE) {
    $data = fgetcsv($handle, 1000, ",");
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
       // echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;

echo '<table border="1" width=100%;>
    <tr>
        <td style="width: 15%;">'.$data[0].'</td>
        <td style="width: 15%;">'.$data[4].'</td>
    </tr>
    <tr>
        <td colspan="2" style="width: 30%";>'.$data[1]." ".$data[2]." ".$data[3].'</td>
        <td >'.$data[5].'</td>
    </tr>
</table>
<br><br><br>
';
           }
    fclose($handle);
}


?>

</table>
</div>

</body>

