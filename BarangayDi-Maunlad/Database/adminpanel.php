<?php

function view(){
	include __DIR__ . ('/connect.php');

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
include __DIR__ . ('/connect.php');
	$type = $_POST['type'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$purok = $_POST['purok'];

	$sql = "INSERT INTO people (type, fname, lname, age, gender, purok) VALUES ('$type', '$fname', '$lname', '$age', '$gender', '$purok')";
	$result = mysqli_query($connection, $sql); 
	
	if($result){
		header("location: /admin.php");
		exit();
	} else{
		echo "<script> alert('Something Went Wrong'); window.location='/admin.php'; </script>";
	}

}

if(isset($_POST['delete'])){
	delete();
}

function delete(){
include __DIR__ . ('/connect.php');
	$id = $_POST['id'];

	$sql = "DELETE FROM people WHERE id= '$id'";

	$result = mysqli_query($connection, $sql);

	header("location: /admin.php");
		
	}



function edit(){

include __DIR__ . ('/connect.php');

	$sql = "SELECT * FROM people";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result); 
	if( $count > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row['id']."<td>".$row['type']."<td>".$row['fname']."<td>". $row['lname']. "<td>". $row['age']. "<td>". $row["gender"]. "<td>".$row['purok'];
			echo "<td><a href='update.php?id=$row[id]'><font color='green'>Edit</a>";
		}

		echo "</table>";
	}	

}

if(isset($_POST['update'])){
	updateprocess();
}

function updateprocess(){
include __DIR__ . ('/connect.php');

$id =  $_POST['id'];
$type =  $_POST['type'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age =  $_POST['age'];
$gender = $_POST['gender'];
$purok = $_POST['purok'];


$sql = " UPDATE people SET type='$type', fname='$fname', lname='$lname', age='$age', gender='$gender', purok='$purok' WHERE id='$id'";
$result = mysqli_query($connection, $sql);
	

	if($result){
			echo "<script> alert('Data Has Been Updated'); window.location='/admin.php'; </script>";
	}

	else{
			echo "<script> alert('Something Went Wrong'); window.location='/admin.php'; </script>";
	}
}


?>