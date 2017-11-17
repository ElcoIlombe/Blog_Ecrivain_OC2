<?php 
require('view/content/HomePage.php');


class getFrontendInformation
{
	public function listOfPost ()
	{
		$postToShow = new PostManager();

		$post = $postToShow->showAllPost();	
	}
	
}