<?php 
	$servername = "localhost"; 
	$username = "root"; 
	$password = "mario64"; 
	$dbname="visitorDB";
	echo "Code is Running";
	
	$conn = new mysqli($servername, $username, $password, $dbname); 

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error); 
	}
	echo "Connected successfully";

	/*
	$sql = "INSERT INTO visitation (first_name, last_name, course_name, start_date, end_date) VALUES ('Mölle', 'Nöff', 'In the grim future there is only WAAAAR!!!', '2017-05-29','2017-05-30')";

	if($conn->query($sql)===TRUE){
		echo "new record created successfully"; 
	}else {
		echo "Error: " . $sql . <br> . $conn->error; 
	}*/
	$conn->close(); 
 
 ?>