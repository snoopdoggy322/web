<?php
class Controller_stat extends Controller
{

	function action_stat()
	{	
		$this->view->generate('stat_view.php', 'template_admin.php');
	}
}