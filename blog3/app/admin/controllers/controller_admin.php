<?php

class Controller_admin extends Controller{

function action_index(){

if($_SESSION['admin']!=NULL)

$this->view->generate(NULL, 'template_admin.php');
else 
$this->view->generate('main_view.php', 'template_view.php');
}
}