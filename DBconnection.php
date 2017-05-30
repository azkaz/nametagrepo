<meta charset="utf-8"/>
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

	/*
	$sql = "INSERT INTO visitation (first_name, last_name, course_name, start_date, end_date) VALUES ('Mölle', 'Nöff', 'In the grim future there is only WAAAAR!!!', '2017-05-29','2017-05-30')";
	*/
	
	

	$first_name	= $conn->real_escape_string($_REQUEST['first_name']); 
	$last_name = $conn->real_escape_string($_REQUEST['last_name']);
	$course_name = $conn->real_escape_string($_REQUEST['course_name']);
	$start_date = $conn->real_escape_string($_REQUEST['start_date']);
	$end_date = $conn->real_escape_string($_REQUEST['end_date']);

	$sql = "INSERT INTO visitation (visitor_id ,first_name, last_name, course_name, start_date, end_date) VALUES (default,'$first_name','$last_name','$course_name','$start_date','$end_date')";

	if($conn->query($sql)===TRUE){
		header("LOCATION: http://localhost/test.php");

	}else {
		echo "Error: " . $sql . $conn->error; 
	}
	$conn->close(); 
	 
 ?>