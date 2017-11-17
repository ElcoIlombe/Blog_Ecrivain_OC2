<?php 

class DbConnexionManager {
	private $host = 'localhost';
	private $dbname = 'Blog_Ecrivain';
	private $user = 'root';
	private $password = '';

	function __construct dbConnexion($host, $dbname, $user, $password)
	{
		$db = new /PDO("mysql:host=$localhost; dbname =$dbname", $user, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	}
}