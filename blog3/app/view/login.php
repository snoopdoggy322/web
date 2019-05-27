<?php
/**
 * 
 */
class user
{

function logout ()
 { 
session_destroy();
header('Location: main');
echo '<script>window.location = "main";</script>';
 }

function enter ()
 { 
require_once ('app/models/Model_users.php');

if ($_POST['login'] != "" && $_POST['password'] != "") //если поля заполнены 	

{ 		
	$login = $_POST['login']; 
	$password = $_POST['password'];

	$q="SELECT * FROM users WHERE login= '".$login."';";
	$rez = UsersModel::find_q($q); //запрашиваем строку из БД с логином, введённым пользователем 	
	if (count($rez) == 1) //если нашлась одна строка, значит такой юзер существует в БД 	
	{ 
		$row = $rez[0]; 
		//echo md5($password);
		if (md5($password) == $row['pass']) //сравниваем хэшированный пароль из БД с хэшированными паролем					

		{ 
			session_start();	
			echo session_id();
		//пишем логин и хэшированный пароль в cookie, также создаём переменную сессии
		$_SESSION['id'] = $row['id'];	//записываем в сессию id пользователя 				
		$_SESSION['name'] = $row['name'];	//записываем в сессию id пользователя 				
		if($row['proper']=="admin"){ echo "Вы администратор!";
		$_SESSION['admin'] = $row['proper'];}
		else
		echo "Авторизация прошла успешно";			
		header('Location: main');			
				
	} 			
	else //если пароли не совпали 			

	{ 				
		$error = "Неверный пароль"; 										
			
	} 		
} 		
	else //если такого пользователя не найдено в БД 		

	{ 			
		$error = "Неверный логин и пароль"; 			
			
	} 	
} 	
 

	else 	
	{ 		
		$error = "Поля не должны быть пустыми!"; 				
		
	} 
print($error);
}


function reg ()
 { 
 	require_once( 'app/models/Model_users.php');
$error = array(); //массив для ошибок 	
if ($_POST['login'] != "" && $_POST['pass'] != "") //если поля заполнены 	
{ 		
	$name = $_POST['name'];
	$email = $_POST['email'];
	$login = $_POST['login']; 
	$password = $_POST['pass'];
$params = [0,$name,$email,$login,md5($password),"user"];
           if (UsersModel::find_param("login",$login)!=NULL)
           echo "Такой логин уже существует";
       else {
       	UsersModel::save($params);
header('Location: main');
       }
}
	
}
}

if(isset($_POST['actionFunc'])){
	echo "1";
    $action_func = $_POST['actionFunc'];
    if (function_exists(user::$action_func())){echo "2s";
        $action_func(); //Здесь вызов функции в нашем случае PlusTime;
    }
    else{
        //Если нет вашего метода то какая то логика
    }
}
else{
    //Если нет скрытого поля то какая то другая логика
}