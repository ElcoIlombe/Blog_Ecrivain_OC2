<?php 
require_once('jf/model/frontend/DbConnexionManager.php');
/**
* 
*/
class AddComments extends DbConnexionManager
{
	function AddComments(){
		$newComments = $db->prepare('INSERT INTO  comments (author, comment_date, content) VALUES (?, NOW(), ?)');
		$newComments->execute(array($_GET['author'], $_GET['content']));
	}
}