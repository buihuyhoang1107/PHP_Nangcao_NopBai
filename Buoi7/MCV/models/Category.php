<?php 
	require_once('Model.php');
	class Category extends Model{
		var $table= "categories";
		// function All(){
		//     // Cau lenh truy van co so du lieu
		//     $query = "SELECT * FROM categories";

		//     $data = array();

		//     // Thuc thi cau lenh truy van co so du lieu
		//     $result = $this->connection->query($query);

		//     while($row = $result->fetch_assoc()) { 
		//     	$data[] = $row;
		//     }

		//     return $data;
		// }
	 	// function store($data){
			
		// 	$query = "INSERT INTO categories(title,description) VALUES ('".$data['title']."', '".$data['description']."')";
		// 	$data = array();
			
		// 	$result = $this->connection->query($query);
		// 	//return  $result->fetch_assoc();
		// }
		// function find($id){
		// 	// Cau lenh truy van co so du lieu
		//     $query = "SELECT * FROM categories WHERE id=".$id;

		//     $data = array();

		//     // Thuc thi cau lenh truy van co so du lieu
		//     $result = $this->connection->query($query);

		// 	return  $result->fetch_assoc();
		  
		// }
		// function delete($id){
		// 	//echo $id;
		// 	$query = "DELETE FROM `categories` WHERE id=".$id;
		// 	//$data = array();
			
		// 	$result = $this->connection->query($query);
		// }
		function update($data){
			//var_dump($id);
			//var_dump($data);
			$query = "UPDATE categories SET title = '".$data['title']."' ,description ='".$data['description']."' WHERE id =".$data['id'];
			//$data = array();
			
			$result = $this->connection->query($query);
		}
  
	}
 ?>