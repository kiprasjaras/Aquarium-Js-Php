<?php
include "dbClass.php";
class all_function extends dbClass
{
	// function 1
	public function insert_data($table,$data){
		// INSERT INTO table( , , ) VALUES ('','','');
		$sql ="INSERT INTO ".$table;
		$sql .=" (".implode(",",array_keys($data)).") VALUES";
		$sql .=" ('".implode("','", array_values($data))."')";
		$query=$this->conn->query($sql);
		if ($query) {
			return true;
		}
	else{
			return false;
		}
		$query->close();
//		 echo $sql;
	}

	// function 2

	public function fetch_data($table){
		// SELECT * FROM table;
       $sql ="SELECT * FROM ".$table;
       $query=$this->conn->query($sql);

       $arrayName = array();
       if ($query) {
       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
       	
       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
	}

// function 3

		public function fetch_data_or($table,$column,$asc){
		// SELECT * FROM table;
       $sql ="SELECT * FROM ".$table." ORDER BY ".$column." ".$asc;
       $query=$this->conn->query($sql);
       $arrayName = array();
       if ($query) {
       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
       	
       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
	}

	// function 4

	public function select_data($table,$condition){
			// SELECT * FROM table WHERE id='1' AND name='yes';
		$sql = "SELECT * FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$arrayName=array();
		$query=$this->conn->query($sql);
		// $this->conn->close();
		if ($query) {

       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
		

       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
		// echo $sql;
	}


// function 5 


	public function select_data_or($table,$condition,$column,$asc){
			// SELECT * FROM table WHERE id='1' AND name='yes';
		$sql = "SELECT * FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$sql .=" ORDER BY ".$column." ".$asc;
		$arrayName=array();
		$query=$this->conn->query($sql);
		if ($query) {

       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
       	
       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
		// echo $sql;
	}

// function 6 


	public function search_data($table,$condition){
			// SELECT * FROM table WHERE id='1' AND name='yes';
		$sql = "SELECT * FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key." LIKE '%".$value."%' OR ";
		}
		$sql=substr($sql,0,-3);
		$arrayName=array();
		$query=$this->conn->query($sql);
		// $this->conn->close();
		if ($query) {

       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
		

       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
		// echo $sql;
	}

 // function 7 


	public function distinct_data($table,$column){
			// SELECT colum DISTINCT FROM table;
		$sql = "SELECT  DISTINCT ";
		foreach ($column as $key => $value) {
			$sql .=$key." , ";
		}
		$sql=substr($sql,0,-2);
		$sql=$sql." FROM ".$table;
		$arrayName=array();
		$query=$this->conn->query($sql);
		if ($query) {

       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
       	
       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
	// echo $sql;
	}

 // function 8 

	public function distinct_data_con($table,$column,$condition){
			// SELECT colum DISTINCT FROM table WHERE id='1' AND name='yes';
		$sql = "SELECT  DISTINCT ";
		foreach ($column as $key => $value) {
			$sql .=$key." , ";
		}
		$sql=substr($sql,0,-2);
		$sql=$sql." FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$arrayName=array();
		$query=$this->conn->query($sql);
		if ($query) {

       	while ($row=$query->fetch_array()) {
       		$arrayName[]=$row;
       	}
       	
       	return $arrayName;
       }
       else{
       	return false;
       }
       $query->close();
	// echo $sql;
	}

	

// function 9 


	public function delete_data($table,$condition){
      // DELETE FROM table WHERE id='1' AND name='yes';
		$sql = "DELETE FROM ".$table. " WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql, 0, -5);
		$query=$this->conn->query($sql);

		if ($query) {
			# code...
			
			return true;
		}
		else{
			return false;
		}
		$query->close();
		// echo $sql;
	}

// function 10

	public function edit_data($table,$data,$condition){
		// UPDATE table SET name='yes' , age='22' WHERE id='1' AND name='yes';
		$sql = "UPDATE ".$table." SET ";
		foreach ($data as $key => $value) {
			$sql .=$key."='".$value."', ";
		}
		$sql =substr($sql,0,-2);
		$sql .=" WHERE ";
		foreach ($condition as $key => $value) {
		    $sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$query=$this->conn->query($sql);
		if ($query) {
			# code...

			return true;

		}
		else{
			return false;
		}
		$query->close();
//		echo $query;

	}

// function 11


	public function one_value($table,$condition){
			// SELECT * FROM table WHERE id='1' AND name='inam';
		$sql = "SELECT * FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$query=$this->conn->query($sql);
		$result=$query->fetch_array();
		if ($result) {
			
       	return $result;

       }
       else{
       	return false;
       }
       	$query->close();
		// echo $sql;
	}

	// function 12 


	public function one_value_or($table,$condition,$column,$asc){
			// SELECT * FROM table WHERE id='1' AND name='inam';
		$sql = "SELECT * FROM ".$table." WHERE ";
		foreach ($condition as $key => $value) {
			$sql .=$key."='".$value."' AND ";
		}
		$sql=substr($sql,0,-5);
		$sql =$sql." ORDER BY ".$column." ".$asc;
		$query=$this->conn->query($sql);
		$result=$query->fetch_array();
		if ($result) {
			
       	return $result;

       }
       else{
       	return false;
       }
       	$query->close();
		// echo $sql;
	}


// function 13 

	public function row_count($table){
		$sql="SELECT * FROM ".$table;
		$query=$this->conn->query($sql);
		$num=$query->num_rows;
		return $num;
		$query->close();
		
	}

	// function 14

	public function row_count_con($table,$con){
		$sql="SELECT * FROM ".$table." WHERE ";
		foreach ($con as $key => $value) {
		    $sql .=$key."='".$value."' AND ";
		}
		$sql =substr($sql,0,-5);
		$query=$this->conn->query($sql);
		$num=$query->num_rows;
		
		return $num;
		$query->close();
	}
    

    // function 15

	public function inner_join($table,$con)
	{
		// SELECT * FROM table1 tbl1, table2 tbl2 WHERE tbl1.id=tbl2.tbl1_id;
		$sql="SELECT * FROM ";
		foreach ($table as $key => $value) {
			$sql .=$value." ".$key." ,";
		}
		$sql =substr($sql,0,-1);

		$sql .="WHERE ";
		foreach ($con as $key => $value) {
			$sql .=$key."=".$value." AND ";
		}
		$sql =substr($sql,0,-5);
		$arrayName=array();
		$query=$this->conn->query($sql);
		if ($query) {
				while ($row=$query->fetch_array()) {
				$arrayName[]=$row;
			}
			
			return $arrayName;
		}else{
			return false;
		}
		$query->close();
               // echo $sql;
	}
	 

	// function 16


	public function inner_join_column($column,$table,$con)
	{
		// SELECT tbl1.id,tbl2.one_id,tbl1.name,tbl2.name FROM table1 tbl1, table2 tbl2 WHERE tbl1.id=tbl2.tbl1_id;
		$sql="SELECT ";
		foreach ($column as $key => $value) {
			$sql .=$key." ".$value." ,";
		}
		$sql =substr($sql,0,-1);
		$sql .=" FROM ";
		foreach ($table as $key => $value) {
			$sql .=$value." ".$key." ,";
		}
		$sql =substr($sql,0,-1);

		$sql .="WHERE ";
		foreach ($con as $key => $value) {
			$sql .=$key."=".$value." AND ";
		}
		$sql =substr($sql,0,-5);
		$arrayName=array();
		$query=$this->conn->query($sql);
		if ($query) {
				while ($row=$query->fetch_array()) {
				$arrayName[]=$row;
			}
			
			return $arrayName;
		}else{
			return false;
		}
		$query->close();
               // echo $sql;
	}
       

}

$fun=new all_function();


 ?>
