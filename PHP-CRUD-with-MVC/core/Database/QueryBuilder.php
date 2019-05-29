<?php

namespace Core\Database;

use PDO;
use App\Model\User;

class QueryBuilder 
{
	
	private $pdo;

	public function __construct($connection) 
	{
		$this->pdo = $connection;
	}

	public function selectAll($table) 
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, User::class);
	}

	public function selectWhere($table, $data) 
	{
		$dataKeys = array_keys($data);
		$strKeys = implode(',', $dataKeys);
		$strData = implode(',', $data);

		$statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$strKeys} = {$strData}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, User::class);
	}

	public function insertData($table, $data) {
		$dataKeys = array_keys($data);
		$strKeys = implode(',', $dataKeys);
		$strData = implode(',', $data);

		$statement = $this->pdo->prepare("INSERT INTO {$table}({$strKeys}) VALUE({$strData})");
		$statement->execute();
	}

	public function updateData($table, $condition, $data) {
		$conditionKeys = array_keys($condition);
		$strConditionKeys = implode(',', $conditionKeys);
		$strConditionData = implode(',', $condition);

		$dataKeys = array_keys($data);
		$strKeys = implode(',', $dataKeys);
		$strData = implode(',', $data);

		$statement = $this->pdo->prepare("UPDATE {$table} SET {$strKeys} = {$strData} WHERE {$strConditionKeys} = {$strConditionData}");
		
		$statement->execute();
	}

	public function deleteData($table, $data) {
		$dataKeys = array_keys($data);
		$strKeys = implode(',', $dataKeys);
		$strData = implode(',', $data);

		$statement = $this->pdo->prepare("DELETE FROM {$table} WHERE {$strKeys} = {$strData}");
		$statement->execute(); 
	}
}