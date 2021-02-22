<?php
//Single post class and require class controller
Class Single_post extends Controller 
{	
	//Default function
	function index($link = '')
	{
		//if a loop bound to a link
		if($link == "")
		{	
			//if the image is not found then the view takes us to the page not found
			$data['page_title'] = "Image not found";
			$this->view("minima/not_found",$data);
		}else{


	 	 	$posts = $this->loadModel("posts");
	 	 	$result = $posts->get_one($link);

	 	 	$data['post'] = $result;
	 	 	
	 	 	$data['page_title'] = "Single Post";
			$this->view("minima/single_post",$data);
		}

	}

}