<?php 
class DbConnection
{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'mahasiswa';
	function __construct(argument)
	{
		if (isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			if (!$this->connection) {
				echo "Cannot connect to Databse server";
				exit;
			}
		}
		return $this->connection;
	}
}
 ?>