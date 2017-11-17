<?php

require_once("Model/Frontend/DbConnexionManager.php");

/**
* 
*/
class PostManager extends DbConnexionManager
{
	
	public function showAllPost ()
	{
		$ShowAllPost = $db->query
		('SELECT * 
		FROM posts')
		or die($db->errorInfo());

		return $ShowAllPost->fetch();
	}
}