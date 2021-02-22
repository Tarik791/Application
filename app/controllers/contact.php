<?php
//Class contact and require class controller
Class Contact extends Controller 
{
	//Default function
	function index()
	{
 	 	
		//Page title and view page contatct
 	 	$data['page_title'] = "Contact Us";
		$this->view("minima/contact",$data);
	}

}