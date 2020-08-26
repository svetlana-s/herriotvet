<?php

/*
 * Route class to define the requested page.
 * - takes classes of controllers and models;
 * - instantiates page controllers and invokes the actions of those controllers.
*/
class Route
{
	public static function start(): void
	{
		// Default controller and action
		$controller_name = 'Main';
		$action_name = 'index';
		
		// $_SERVER['REQUEST_URI'] - the full address to which the user contacted
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// get the name of controller
		if (!empty($routes[1]))
		{	
			$controller_name = $routes[1];
		}
		
		// get the name of action
		if (!empty($routes[2]))
		{
			$action_name = $routes[2];
		}

		// add prefixes
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		// take the file with the model class
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// take the file with the controller class
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			// if this controller doesn't exist - redirect to 404 page
			Route::ErrorPage404();
		}
		
		// create controller
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// call controller action
			$controller->$action();
		}
		else
		{
			// it's better to throw an exception here
		    Route::ErrorPage404();
		}
	
	}

	public function ErrorPage404(): void
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header('Location:'.$host.'404');
    }
    
}
