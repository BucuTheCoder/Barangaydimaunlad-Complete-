<?php
//Created by Bryan Joshua Bucu
include  ('Database/connect.php');


//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql= "SELECT * FROM people WHERE id= $id";

$result = mysqli_query($connection, $sql);
$count= mysqli_num_rows($result);

if( $count > 0){
	while($row = mysqli_fetch_assoc($result)){
		$type = $row['type'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$age = $row['age'];
		$gender = $row['gender'];
		$purok = $row['purok'];
	}
}
?>


<html>
<head>	
	<title>Update Form Data</title>
	<link rel="stylesheet" href="style/update_style.css">
</head>

<body>

	<a href="/admin.php">Go back to admin</a>
	<br><br>
	
	<form action="Database/adminpanel.php" method="POST">
		<table border="0">
		
		
			<tr>
				<td>Type</td>
				<td><input id="inputform" type="text" name="type" value="<?php echo $type;?>"></td>
			</tr>
			
			<tr>
				<td>First Name</td>
				<td><input id="inputform" type="text" name="fname" value="<?php echo $fname;?>"></td>
			</tr>

			<tr>
				<td>Last Name</td>
				<td><input id="inputform" type="text" name="lname" value="<?php echo $lname;?>"></td>
			</tr>

			<tr>
				<td>Age</td>
				<td><input  type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
			</tr>

			<tr>
				<td>Purok</td>
				<td><input type="text" name="purok" value="<?php echo $purok;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value= <?php echo $_GET['id'];?> > </td>
				<td><input type="submit" name="update" value="UPDATE"></td>
			</tr>
		</table>
	</form>

</body>
</html>