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
?>




<html>
    <head>  
        <meta charset="utf-8"/>
    </head>
<body>
Här ska vi printa ut nametagsen genom föregående sida

    <div>
<?php
        $sql = "SELECT visitor_id, first_name, last_name FROM visitation";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) {
         echo "id: " . $row["visitor_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
?>
    </div>
</body>
</html>