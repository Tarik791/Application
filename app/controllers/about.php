<?php

//Class about and require class Controller
Class About extends Controller
{
	//Default function
	function index()
	{
		//Page title and view about
		$data['page_title'] = "About";
		$this->view("minima/about-us",$data);
	}

}