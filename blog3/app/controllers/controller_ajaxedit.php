<?php
 	require_once( 'app/models/Model_blog.php');
	$id = $_POST['id']; 
	//echo "$login";
        $q=BlogModel::find_id($id);
           		 echo $q[0][theme];
           		 echo "%";
           		 echo $q[0][text];
           
          

	
class Controller_ajaxedit extends Controller
{
   
}


?>