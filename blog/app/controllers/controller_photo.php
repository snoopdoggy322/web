<?php

require 'app/models/Photo.php';
class Controller_photo extends Controller
{
	function action_index()
	{	
		  $photo = new Photo();
		$this->view->generate('photo_view.php', 'template_view.php','photo.php');
	}
}