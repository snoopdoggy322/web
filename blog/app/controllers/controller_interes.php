<?php

require 'app/models/Interests.php';
class Controller_interes extends Controller
{
	function action_index()
	{	
		$interestsC = new Interests();
		$this->view->generate('interes_view.php', 'template_view.php','Interests.php');
	}
}