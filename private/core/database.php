<?php

/**
 * Database connection
 */
class Database
{
	
	private function connect()
	{
		// code..
		$string = DBDRIVER . ":host=".DBHOST.";dbname=".DBNAME;
		if(!$con = new PDO($string,DBUSER,DBPASS)){
			die("could not connect to database");
		}

		return $con;
	}

	public function query($query,$data = array(),$data_type = "object")
	{

		$con = $this->connect();
		$stm = $con->prepare($query); // similar to SELECT 8 FROM User WHERE "name"=? ----------- this is called prepared statement

		$result = false;
		

		if($stm){
			$check = $stm->execute($data);//This is where any parameters in the SQL query are replaced with the actual values.
			if($check){
				if($data_type == "object"){
					$result = $stm->fetchAll(PDO::FETCH_OBJ);
				}else{
					$result = $stm->fetchAll(PDO::FETCH_ASSOC);
				}
 
 			}
		}

		//run functions after select
		if(is_array($result)){
			if(property_exists($this, 'afterSelect'))
			{
				foreach($this->afterSelect as $func)
				{
					$result = $this->$func($result);
				}
			}
		}

		if(is_array($result) && count($result) >0){
			return $result;
		}

		return false;
	}

	private function con()
	{ 
		$con=mysqli_connect(DBHOST,DBUSER,'',DBDRIVER);
	 {

       if(mysqli_connect_errno()){
				echo "Connection Error" . mysqli_connect_error();
			 }
	 }
	}
	
}
