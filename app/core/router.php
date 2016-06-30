<?php
class Router {

	static function start()
	{
		$controller = 'index';
		$action = 'index';
		$route = explode('/', $_SERVER['REQUEST_URI']);

		// Контроллер
		if (!empty($route[1]))
		{	
			$controller = $route[1];
		}
		
		// Экшн
		if (!empty($route[2]))
		{
			$action = $route[2];
		}

		// Айдишники
		if (!empty($route[3]))
		{
			$id = $route[3];
		}

		$model = 'Model_'.$controller;
		$controller = 'Controller_'.$controller;
		$action = 'action_'.$action;

		$model_file = strtolower($model).'.php';
		$model_path = 'app/models/'.$model_file;

		if(file_exists($model_path))
		{
			include "app/models/".$model_file;
		}

		$controller_file = strtolower($controller).'.php';
		$controller_path = 'app/controllers/'.$controller_file;
		if(file_exists($controller_path))
		{
			include "app/controllers/".$controller_file;
		}
		else
		{
			Router::ErrorPage404();
		}
		
		$controller = new $controller;
		
		if(method_exists($controller, $action))
		{
			if (!empty($id)) {
				$controller->$action($id);
			}else{
				$controller->$action();
			};
		}
		else
		{
			Router::ErrorPage404();
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
