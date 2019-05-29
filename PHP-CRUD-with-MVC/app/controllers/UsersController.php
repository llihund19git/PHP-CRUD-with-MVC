<?php 

namespace App\Controllers;

use Core\App;

class UsersController 
{

	public function index () {		
		$users = App::get('database')->selectAll('users');

		view('index.view.php', ['users' => $users]);
	}

	public function store () {
		$name = $_POST['name'];
 
		App::get('database')->insertData('users', [
			'id' => 0,
			'name' => "'$name'"
		]);

		header('Location: /');
	}

	public function edit () {
		if (isset($_GET['id'])){
			$id = $_GET['id'];

			$user = App::get('database')->selectWhere('users', ['id' => "'$id'"]);
			if (sizeof($user) > 0) {
				view('edit.view.php', ['user' => $user[0]]);
			} else {
				header('Location: /');
			}

		} else {
			header('Location: /');
		}
	}

	public function update () {
		if (isset($_POST['id']) && isset($_POST['name'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];

			$user = App::get('database')->updateData('users', ['id' => "'$id'"], ['name' => "'$name'"]);

		} 
		header('Location: /');
	}

	public function delete () {
		$id = $_POST['id'];

		if ($_POST['delete']) {
			$users = App::get('database')->deleteData('users', ['id' => "'$id'"]);
		}

		header('Location: /');
	}
}
