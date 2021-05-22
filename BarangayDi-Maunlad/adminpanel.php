<?php

function view(){
	include('connect.php');

	$sql = "SELECT * FROM people";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result); 

	if( $count > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['id']."<td>".$row['type']."<td>".$row['fname']."<td>". $row['lname']. "<td>". $row['age']. "<td>". $row["gender"]. "<td>".$row['purok'];
		}
		echo "</table>";
	}
}

if(isset($_POST['submit'])){ //submit is clicked call add.
	add();
} 
function add(){
	include('connect.php');
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$purok = $_POST['purok'];

	$sql = "INSERT INTO people (type, fname, lname, age, gender, purok) VALUES ('regular', '$fname', '$lname', '$age', '$gender', '$purok')";
	$result = mysqli_query($connection, $sql); 
	
	if($result){
		header("location: admin.php");
		exit();
	} else{
		echo "<script> alert('Something Went Wrong'); window.location='admin.php'; </script>";
	}

}

if(isset($_POST['delete'])){
	delete();
}

function delete(){
	include('connect.php');
	$id = $_POST['id'];

	$sql = "DELETE FROM people WHERE id= '$id'";

	if(isset($_POST['no'])){
		exit();
	} else{
		$result = mysqli_query($connection, $sql);

		if($result){
			"<script> alert('Delete Successful!!'); window.location='admin.php'; </script>";
			exit();
		} else{
			"<script> alert('Delete Successful!!'); window.location='admin.php'; </script>";
			exit();
		}

	}

}

?>