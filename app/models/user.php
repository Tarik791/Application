<?php 
//Class for User
Class User 
{

	//Function for login and post method
	function login($POST)
	{	
		//Require database
		$DB = new Database();

		//Session for error message
		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']))
		{

			$arr['username'] = $POST['username'];
			$arr['password'] = $POST['password'];

			//Query select
			$query = "select * from users where username = :username && password = :password limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
 				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_address;

				//redirect after login location is home
				header("Location:". ROOT . "home");
				die;

			}else{
				//error message
				$_SESSION['error'] = "wrong username or password";
			}
		}else{

			//error message
			$_SESSION['error'] = "please enter a valid username and password";
		}

	}

	//Function for register and post method
	function signup($POST)
	{

		//Require database
		$DB = new Database();

		//Session for error message
		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']))
		{

			$arr['username'] = $POST['username'];
			$arr['password'] = $POST['password'];
			$arr['email'] = $POST['email'];
			$arr['url_address'] = get_random_string_max(60);
			$arr['date'] = date("Y-m-d H:i:s");

			//Query insert 
			$query = "insert into users (username,password,email,url_address,date) values (:username,:password,:email,:url_address,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				//Redirect next location is login after reg
				header("Location:". ROOT . "login");
				die;
			}

		}else{
			//Error message
			$_SESSION['error'] = "please enter a valid username and password";
		}
	}

	//Function for check logged in
	function check_logged_in()
	{
		//Require database
		$DB = new Database();
		if(isset($_SESSION['user_url']))
		{

			$arr['user_url'] = $_SESSION['user_url'];

			//Query select
			$query = "select * from users where url_address = :user_url limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_address;

				return true;
			}
		}

		return false;

	}

	//Logout
	function logout()
	{
		//logged in
		unset($_SESSION['user_name']);
		unset($_SESSION['user_url']);

		header("Location:". ROOT . "login");
		die;
	}


}