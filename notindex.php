<?php
	// SQL connection
	$servername = "us-cdbr-iron-east-04.cleardb.net";
	$username = "bdf0f0d3e7f01e";
	$password = "f81e01e1";
	$dbname = "heroku_fe5f03904fe1270";

	// create connection and test
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully<br>";

	$sql = "SELECT id, email FROM subscribers";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		// output data of each row
		while($row = $result->fetch_assoc()){
			echo "id: " . $row["id"] . ", email: " . $row["email"] . "<br>";
		}
	}else{
		echo "0 results";
	}	
?>