<?php
//Home class and require class controller
Class Home extends Controller 
{
	//Default function
	function index()
	{
 	 	//Page title 
 	 	$data['page_title'] = "Home";

		//Posts on this page
 	 	$posts = $this->loadModel("posts");

		//Result of posts
 	 	$result = $posts->get_all();

		//Pagination on this page
 	 	$pagination = $this->loadModel("pagination");
		//Pagination prev page
 	 	$data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
		//Pagination next page
 	 	$data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);


 	 	$data['posts'] = $result;
 	 	$image_class = $this->loadModel("image_class");

 	 	//page viewpage view
		$this->view("minima/index",$data);
	}

}