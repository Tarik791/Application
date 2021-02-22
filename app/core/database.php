<?php 
//Class database
Class Database
{
	//Method for database connection
	public function db_connect()
	{
		//PDO and connection
		try{

			$string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
			return $db = new PDO($string,DB_USER,DB_PASS);
			
		}catch(PDOExecption $e){

			die($e->getMessage());
		}
	}

	//Method for read
	public function read($query,$data = [])
	{

		$DB = $this->db_connect();
		$stm = $DB->prepare($query);

		if(count($data) == 0)
		{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}else{

			$check = $stm->execute($data);
		}

		if($check)
		{
			$data = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($data) && count($data) > 0)
			{
				return $data;
			}

			return false;
		}else
		{
			return false;
		}
	}

	//Method for write
	public function write($query,$data = [])
	{

		$DB = $this->db_connect();
		$stm = $DB->prepare($query);

		if(count($data) == 0)
		{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}else{

			$check = $stm->execute($data);
		}

		if($check)
		{
			return true;
		}else
		{
			return false;
		}
	}


}