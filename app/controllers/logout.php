<?php
//Class for logout and require controller
Class Logout extends Controller 
{
	//Default function
	function index()
	{
 	 	//Logout
 	 	$user = $this->loadModel("user");
 	 	$user->logout();
	}

}