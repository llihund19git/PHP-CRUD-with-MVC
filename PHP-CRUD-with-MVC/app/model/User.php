<?php

namespace App\Model;

class User
{
	private $id;
	private $name;

	public function getId () {
		return $this->id;
	}

	public function getName () {
		return $this->name;
	}
}