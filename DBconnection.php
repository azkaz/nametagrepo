<meta charset="utf-8"/>
<?php 
	// creates all the variables needed to connect to database
	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname="visitordb";
	
	// creates a connection to the database
	$conn = new mysqli($servername, $username, $password, $dbname); 
	// handles errors 
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error); 
	}
	

	// sets variables to the info sent from form, from startpage.php 
	// and using real_escape_string we check if user has entered any strange symbols that 
	// can be used for sql injection attacks 
	$first_name	= $conn->real_escape_string($_REQUEST['first_name']); 
	$last_name = $conn->real_escape_string($_REQUEST['last_name']);
	$course_name = $conn->real_escape_string($_REQUEST['course_name']);
	$start_date = $conn->real_escape_string($_REQUEST['start_date']);
	$end_date = $conn->real_escape_string($_REQUEST['end_date']);
	$visitor_picture = $conn->real_escape_string($_REQUEST['visitor_picture']);
	$logotype = $conn->real_escape_string($_REQUEST['logotype']);

	// creates the sql statement string 
	$sql = "INSERT INTO visitation (visitor_id ,first_name, last_name, course_name, start_date, end_date, visitor_picture, logotype) 
	VALUES (default,'$first_name','$last_name','$course_name','$start_date','$end_date','visitor_pictures/$visitor_picture.jpg','logotypes/$logotype.png')";
	
	// if adding the data to the database is successfull 
	// we return to the startpage 
	if($conn->query($sql)===TRUE){
		header("LOCATION: http://localhost/startpage.php");

	}else {
		echo "Error: " . $sql . $conn->error; 
	}
	$conn->close(); 
 ?>