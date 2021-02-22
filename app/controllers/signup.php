<?php
//Class for signup and require controller class
Class Signup extends Controller 
{
	//Default function
	function index()
	{
 	 	//Page title 
 	 	$data['page_title'] = "Signup";
	
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
		$this->view("minima/signup",$data);
	}

}