<?php
	// mag base ka parin dun sa dati natin sinubmit yung mga condition dun
	// tapos dag dag lang ng ibang details like ilan residence ng purok 1,2,3.
	function age(){
		include('connect.php');

		$sql = "SELECT COUNT(*) AS count FROM people WHERE age BETWEEN 20 and 35";
		$result = mysqli_query($connection, $sql);
		while($row = mysqli_fetch_assoc($result)){
			echo $output = $row['count'];
		}



}

	function filter(){
		include('connect.php');

		if(isset($_POST['value'])){
			if($_POST['value'] == 'All'){
				$sql = "SELECT COUNT(*) AS count FROM people WHERE age BETWEEN 20 and 35";
				$result = mysqli_query($connection, $sql);
		
				while($row = mysqli_fetch_assoc($result)){
				echo $output = $row['count'];
		}

			}
		}
}


?>