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


        $picture_tag = '';
        $name_tag = '';
        $sql = "SELECT visitor_id, first_name, last_name, course_name, start_date, end_date, visitor_picture FROM visitation ORDER BY visitor_id DESC";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) 
         {

             // starting building a long string that is concatignated by using .= 
             // then echo out that string in html code below
             $name_tag .= '<br>';
             $name_tag .= '<div id="Carddiv">';
             $name_tag .= '<div id="Textdiv">';
             $name_tag .= '<p>'. $row["first_name"] .'</p>';
             $name_tag .= '<p>'. $row["last_name"] .'</p>';
             $name_tag .= '<p><b>'. $row["course_name"] .'</b></p>'; 
             $name_tag .= '<p>'. $row["start_date"] .'</p>';
             $name_tag .= '<p>'. $row["end_date"] .'</p>';
             $name_tag .= '</div>';
             $name_tag .= '<div id="Picturediv">';
             $name_tag .= '<img id="Visitor_picture" src="http://www.itmassa.se/wp-content/uploads/2016/09/Lexicon_IT-Konsult_RGB-BIGWhiteB.jpg"/>';
             $name_tag .= '</div>';
             $name_tag .= '<div id="Bottomdiv">';
             $name_tag .= '<h2>BESÖKARE</h2>';
             $name_tag .= '</div>';
             $name_tag .= '</div>';
             //$picture_tag .= '<img src="data:image/jpeg;base64,'.base64_encode( $row['Lexicon'] ).'"/>';
         }

    } 
    else {
    echo "0 results";
}
    $conn->close();
?>

<!DOCTYPE html>
<html>
<title>Skriv ut tidigare besökare</title>
    <head>
        <link rel="stylesheet" href="csssheet.css">
    </head>
<body>
    <h1>Alla tidigare besökare, sorterat nyaste överst<h1>
        <div>
            <?php
                echo $name_tag;
                echo $picture_tag;
            ?>
        </div>
</body>
</html>