<?php 
	class DB {
		
		private $host = 'localhost';
		private $dbName = 'ejemplo';
		private $username = 'homestead';
		private $password = 'secret';

		public function __construct()
		{
 
		}

		public function getConnection() 
		{
			$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
			$conn = new PDO($dsn, $this->username, $this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}