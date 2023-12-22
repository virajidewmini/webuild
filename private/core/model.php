<?php 
	class Model extends Database{

		public $errors = array();
		public function __construct(){
		// 	if(!property_exists($this, 'table'))
		// {
		// 	$this->table = strtolower($this::class) . "s";
		// }
		}

		public function where($column, $value){

			$column = addslashes($column);
			$query= "select * from $this->table where $column =:value";
			$data =  $this->query($query,[
				'value'=>$value
			]);

			if(is_array($data)){
				if(property_exists($this, 'afterSelect')){
					foreach($this->afterSelect as $func){
						$data = $this->$func($data);
					}
				}
			}

			return $data;
		}

		public function where2($column1, $value1, $column2, $value2) {
			$column1 = addslashes($column1);
			$column2 = addslashes($column2);
		
			$query = "SELECT * FROM $this->table WHERE $column1 = :value1 AND $column2 = :value2";
			
			return $this->query($query, [
				'value1' => $value1,
				'value2' => $value2
			]);
		}
		

		public function findAll(){

			
			$query= "select * from $this->table";
			$data = $this->query($query);

			//run function after select
			if(is_array($data)){
				if(property_exists($this, 'afterSelect')){
					foreach($this->afterSelect as $func){
						$data = $this->$func($data);
					}
				}
			}

			return $data;
		}

		public function insert($data){

			//remove unwanted columns
			if(property_exists($this, 'allowedColumns')){
				foreach ($data as $key => $column) {
					if(!in_array($key,$this->allowedColumns)){
						unset($data[$key]);
					}
				}
			}


			//run functons before insert
			if(property_exists($this, 'beforeInsert')){
				foreach ($this->beforeInsert as $func) {
					$data =$this->$func($data);
				}
			}
			$keys =array_keys($data);
			$columns=implode(',',$keys);
			$values=implode(',:',$keys);
			$query= "insert into $this->table ($columns) values(:$values)";
			return $this->query($query,$data);
		}
		

		 public function update($id,$data){

			$str = "";
			foreach ($data as $key => $value) {
				//code
				$str .= $key. "=:". $key.",";
			}

			$str = trim($str,",");//trim trims from the beg and the end
 
			$data['id'] = $id;
			$query = "update $this->table set $str where id = :id";

			return $this->query($query,$data);
		}

		public function delete($id){

			$query = "delete from $this->table where id = :id";
			$data['id'] = $id;
			return $this->query($query,$data);
		}

		// Pramuka

		public function alldpr($value){
	
			$query = "SELECT $this->table3.project_id ,$this->table3.s_user_id, $this->table3.dpr_id, $this->table3.date
					  FROM $this->table1
					  INNER JOIN $this->table2 ON $this->table1.m_user_id = $this->table2.id
					  INNER JOIN $this->table3 ON $this->table1.s_user_id = $this->table3.s_user_id
					  WHERE $this->table1.m_user_id = :value
					  AND $this->table1.action = 'ongoing'
					  AND $this->table3.dpr_action = 'done' ORDER BY project_dprs.date ASC";
	
			// Assuming you have a method named 'query' to execute the query
			return $this->query($query, [
				'value' => $value,
			]);
		}

		public function alltask($value){
	
			$query = "SELECT $this->table4.*
					  FROM $this->table1
					  INNER JOIN $this->table4 ON $this->table1.project_id = $this->table4.project_id
					  WHERE $this->table1.m_user_id = :value
					  AND $this->table4.action = 'ongoing'ORDER BY $this->table4.start_date ASC";
	
			// Assuming you have a method named 'query' to execute the query
			return $this->query($query, [
				'value' => $value,
			]);
		}


		//Gaveesha

		public function requests($value){
	
			$query = "SELECT $this->table3.project_id ,$this->table3.s_user_id, $this->table3.dpr_id, $this->table3.date
					  FROM $this->table1
					  INNER JOIN $this->table2 ON $this->table1.m_user_id = $this->table2.id
					  INNER JOIN $this->table3 ON $this->table1.s_user_id = $this->table3.s_user_id
					  WHERE $this->table1.m_user_id = :value
					  AND $this->table1.action = 'ongoing'
					  AND $this->table3.dpr_action = 'done' ORDER BY project_dprs.date ASC";
	
			// Assuming you have a method named 'query' to execute the query
			return $this->query($query, [
				'value' => $value,
			]);
		}


	
	}

?>