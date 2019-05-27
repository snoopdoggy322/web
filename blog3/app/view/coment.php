<?php
/**
 * 
 */
class coment
{

function addcoment()
 {

echo $name_user="'".$_SESSION['name']."',";
echo $id_blog="'".$_POST['id']."',";
echo $text= "'".$_POST['text'];




$sql="INSERT INTO users_comments VALUES (0 , ".$name_user.$id_blog.$text."' );";
echo $sql;
BlogModel::get_q($sql);
echo "Запись успешно добавлена";
echo '<script>window.location = "blog";</script>';
 }
}




if(isset($_POST['actionFunc2'])){
    $action_func = $_POST['actionFunc2'];
    if (function_exists(coment::$action_func())){echo "2s";
        $action_func(); //Здесь вызов функции в нашем случае PlusTime;
    }
    else{
        //Если нет вашего метода то какая то логика
    }
}
else{
    //Если нет скрытого поля то какая то другая логика
}
