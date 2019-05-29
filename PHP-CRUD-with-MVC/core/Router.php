<?php

namespace Core;

class Router 
{
	static $routes = [
		'GET' => [],
		'POST' => [],
		'_DELETE' => []
	];

	public static function get ($uri, $path) {
		Router::$routes['GET'][$uri] = $path; 
	}

	public static function post ($uri, $path) {
		Router::$routes['POST'][$uri] = $path; 
	}

	public static function delete ($uri, $path) {
		Router::$routes['_DELETE'][$uri] = $path; 
	}

	public static function validate ($uri, $method) {
		$method = (isset($_POST['_method'])) ? $_POST['_method'] : $method;

		if (array_key_exists($uri, Router::$routes[$method])) {
			Router::callController(
                ...explode('@', Router::$routes[$method][$uri])
            );
		} else {
			echo '<h1>404 not found</h1>';
		}
	}

	public static function callController($controller, $method) {
		$pathController = "\\App\\Controllers\\$controller";
		$controller = new $pathController;
		$controller->$method();
	}
}