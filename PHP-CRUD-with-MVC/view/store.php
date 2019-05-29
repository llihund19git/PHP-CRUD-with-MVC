<?php

echo 'inserting...';

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=php_dunhill', 'root', 'Dunlynstore');
	$name = $_POST['name'];
	$statement = $pdo->prepare("insert into users(name) values('{$name}')");
	$statement->execute();

	header('Location: /');
}
catch (PDOException $e) {
	die($e->getMessage());
}