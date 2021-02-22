<?php
//Class for login and require controller class
Class Login extends Controller 
{
	//Default function
	function index()
	{
 	 	//Page title
 	 	$data['page_title'] = "Login";

		  //Method post and email name of form
 	 	if(isset($_POST['email']))
 	 	{
			//Sign up
 	 		$user = $this->loadModel("user");
 	 		$user->signup($_POST);

		
 	 	}elseif(isset($_POST['username']) && !isset($_POST['email'])){
			
			//Login
 	 		$user = $this->loadModel("user");
 	 		$user->login($_POST);
 	 	}
		  //View of page 
		$this->view("minima/login",$data);
	}

}