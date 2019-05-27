<?php
class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($content_view, $template_view,$model = NULL, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}function render($content_view, $title, $model = NULL, $layout = 'layout.php')
		*/
		
			if(file_exists('app/admin/view/'.$template_view))
			{
				echo "1";
		include 'app/admin/view/'.$template_view;
	}
	else 
	{echo "2";
		include 'app/view/'.$template_view;
	}
}
}
?>