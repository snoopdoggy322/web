<?php
 	require_once( 'app/models/Model_users.php');
	$login = $_POST['login']; 
	//echo $login;
           if (UsersModel::find_param("login",$login)!=NULL)
           echo "off";
       else {
echo "on";
       }
	
class Controller_ajax extends Controller
{
   
}


?>