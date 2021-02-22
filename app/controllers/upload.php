<?php
//Class Upload and require class Controller
Class Upload extends Controller 
{	
	//Default function 
	function index()
	{
		//Redirect for location upload image
 	 	header("Location:". ROOT . "upload/image");
		die;
	}

	//Function for image
	function image()
	{
 	 	
 	 	$user = $this->loadModel("user");
		
		//check if the user is logged in and redirect on next page login
 	 	if(!$result = $user->check_logged_in())
 	 	{
 	 		header("Location:". ROOT . "login");
			die;
 	 	}
		  
 	 	if(isset($_POST['title']) && isset($_FILES['file']))
 	 	{
 	 		$uploader = $this->loadModel("upload_file");
 	 		$uploader->upload($_POST,$_FILES);
 	 	}
 	 	
 	 	$data['page_title'] = "Upload";
		$this->view("minima/upload",$data);
	}



}