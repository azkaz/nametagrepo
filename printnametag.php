<?php 
	$servername = "localhost"; 
	$username = "root"; 
	$password = "mario64"; 
	$dbname="visitorDB";
	//echo "Code is Running";
	
	$conn = new mysqli($servername, $username, $password, $dbname); 

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error); 
	}



        $name_tag = '';
        $sql = "SELECT visitor_id, first_name, last_name, course_name, start_date, end_date, visitor_picture FROM visitation";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) 
         {

             // starting building a long string that is concatignated by using .= 
             // then echo out that string in html code below
             $name_tag .= '<br>';
             $name_tag .= '<div>';
             $name_tag .= '<p>'. $row["first_name"] .'</p>';
             $name_tag .= '<p>'. $row["last_name"] .'</p>';
             $name_tag .= '<p><b>'. $row["course_name"] .'</b></p>'; 
             $name_tag .= '<p>'. $row["start_date"] .'</p>';
             $name_tag .= '<p>'. $row["end_date"] .'</p>';
             $name_tag .= '</div>';

         }

    } 
    else {
    echo "0 results";
}
    $conn->close();
?>

<!DOCTYPE html>
<html>
<title>TEST</title>
<style>
p{
    font-size: 10px;
}
</style>
<body>
    <h1>Funkar det ?<h1>
        <div>
            <?php
                echo $name_tag;
            ?>
        </div>
</body>
</html>