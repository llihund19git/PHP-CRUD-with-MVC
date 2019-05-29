<?php

namespace Core\Database;

use PDO;
use PDOException;

class DatabaseConnection {
	
	public static function connect () {
		try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_dunhill', 'root', 'Dunlynstore');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
		
	}
}