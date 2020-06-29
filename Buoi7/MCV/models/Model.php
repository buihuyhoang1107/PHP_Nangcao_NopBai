<?php 
	require_once('Connection.php');
	class Model{
		var $connection;
        var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table."";

		    $data = array();
            
		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function find($id){
			// Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table." WHERE id=".$id;

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			return  $result->fetch_assoc();
		  
        }
        function delete($id){
			//echo $id;
			$query = "DELETE FROM ".$this->table." WHERE id=".$id;
			//$data = array();
			
			$result = $this->connection->query($query);
		}
		function store($data){
			$f= "";
			$v="";
			echo "<pre>";
				print_r($data);
			echo "</pre>";


		foreach ($data as $key => $value) {
				$f.=$key.",";
				$v.="'".$value."',";  
			# code...
			echo "<br> $v";
		
		}
		//Xóa 1 dấu , sau f;
		$v = trim("$v",",");
		$f = trim("$f",",");
		echo "<br> $v";
		echo "<br> $f";
		
			$query = "INSERT INTO ".$this->table."(".$f.") VALUES (".$v.")";
			$data = array();
		//echo "<br> $query";
			//$result = $this->connection->query($query);
		return $this->connection->query($query);
			//return  $result->fetch_assoc();
		}
	}
 ?>