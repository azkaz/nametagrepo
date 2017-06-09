<meta charset="utf-8"/>
<?php 
	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname="visitordb";
	echo "Code is Running";
	
	$conn = new mysqli($servername, $username, $password, $dbname); 

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error); 
	}
	
	
					// checks after special charachters
			// so that people have harder time for sql injections
	$first_name	= $conn->real_escape_string($_REQUEST['first_name']); 
	$last_name = $conn->real_escape_string($_REQUEST['last_name']);
	$course_name = $conn->real_escape_string($_REQUEST['course_name']);
	$start_date = $conn->real_escape_string($_REQUEST['start_date']);
	$end_date = $conn->real_escape_string($_REQUEST['end_date']);
	$visitor_picture = $conn->real_escape_string($_REQUEST['visitor_picture']);
	$logotype = $conn->real_escape_string($_REQUEST['logotype']);
	$sql = "INSERT INTO visitation (visitor_id ,first_name, last_name, course_name, start_date, end_date, visitor_picture, logotype) 
	VALUES (default,'$first_name','$last_name','$course_name','$start_date','$end_date','visitor_pictures/$visitor_picture.jpg','logotypes/$logotype.png')";

	if($conn->query($sql)===TRUE){
		header("LOCATION: http://localhost/startpage.php");

	}else {
		echo "Error: " . $sql . $conn->error; 
	}
	$conn->close(); 
	 
 ?>