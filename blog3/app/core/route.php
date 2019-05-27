<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
spl_autoload_register(function ($name) {
    echo "Хочу загрузить $name.\n";
    throw new Exception("Невозможно загрузить $name.");
});

class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'main';
		$action_name = 'index';

		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$r=explode('?', $_SERVER['REQUEST_URI']);
		echo $r[0];
		if($r[1]){

$routes=explode('/', $r[0]);;

		}

		// получаем имя контроллера
		if ( !empty($routes[1]) )	$controller_name = $routes[1];
		// получаем имя экшена
		if ( !empty($routes[2]) )$action_name = $routes[2];
		


if($_REQUEST['admin_area']){
	// получаем имя контроллера
		if ( !empty($routes[2]) )	$controller_name = $routes[2];
		// получаем имя экшена
		if ( !empty($routes[3]) )$action_name = $routes[3];

$admin_path = 'admin/';

$admin_file_prefix = 'admin_';

$admin_class_prefix = 'Admin';

}else{
// получаем имя контроллера
		if ( !empty($routes[1]) )	$controller_name = $routes[1];
		// получаем имя экшена
		if ( !empty($routes[2]) )$action_name = $routes[2];
$admin_path = '';

$admin_file_prefix = '';

$admin_class_prefix = '';

}



		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		
		$model_file = strtolower($model_name).'.php';
		$model_path = "app/models/".$model_file;


		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "app/".$admin_path."controllers/".$controller_file;
		/*
		echo "Model: $model_name <br>";
		echo "Controller: $controller_name <br>";
		echo "Action: $action_name <br>";
		*/

		// подцепляем файл с классом модели (файла модели может и не быть)

		
		if(file_exists($model_path))
		{
			include "app/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
	
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			//Route::ErrorPage404();
		}
		//echo $controller_path." <br>";
		//echo $controller_name;

		// создаем контроллер
//include("app/${admin_path}controllers/". $admin_file_prefix.$controller_name.'.php');
		$controller = new $controller_name;
		$action = $action_name;

		if(method_exists($controller, $action))
		{
				//echo "пашол акшон";
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			
			//echo "непашол акшон";
			//Route::ErrorPage404();
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
