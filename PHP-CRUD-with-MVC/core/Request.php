<?php

namespace Core;

class Request
{
	public static function uri () {
		return explode('?', $_SERVER['REQUEST_URI'])[0];
	}

	public static function method () {
		return $_SERVER['REQUEST_METHOD'];
	}
}