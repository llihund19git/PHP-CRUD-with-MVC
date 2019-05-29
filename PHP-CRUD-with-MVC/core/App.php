<?php

namespace Core;

class App
{
	
	protected static $registry = [];

	public static function bind ($key, $value) {
		App::$registry[$key] = $value;
	}

	public static function get ($key) {
		return App::$registry[$key];
	}
}