

<style>
    .error {
        color : red;
    }
</style>


<body>
	<link rel="stylesheet" href="public/css/style1.css">

	<header>
		<h1>Загрузка отзывов</h1>
	</header>
    <?php
date_default_timezone_set('Etc/GMT-3')
?>
<div class="tex">
 <form method="POST"  enctype="multipart/form-data" name="form_editor" style="font-size: 20px"><br>

<input type="file" accept=".inc" placeholder="Тема записи в блог"  maxlength="100" name="file" type= text class="formDesign" ></input><br>

<input type="submit" name="accept">
</form>

  <?php


   if( isset( $_POST['accept'] ) ){


$FileName = $_FILES['file']['name'];
$fileElementName = 'file';
$path = 'public/files/'; 
$location = $path . "messages.inс"; 
unlink($location);
move_uploaded_file($_FILES['file']['tmp_name'], $location); 


          
            }

?>

</div>

</div>

    </div>
</div>




















</body>

