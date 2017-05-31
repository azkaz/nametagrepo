
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome</title>
</head>
<body>
<form action="DBconnection.php" method="post" target="_self" enctype="multiform/form-data">
	First Name: <input type="text" name="first_name"><br>
	Last Name: <input type="text" name="last_name"><br>
	Course: <input type="text" name="course_name"><br>
	Start Date: <input type="date" name="start_date" placeholder="yyyy-mm-dd"><br>
	End Date: <input type="date" name="end_date" placeholder="yyyy-mm-dd"><br>
	Photo: <input type="file" name="image" accept="image/*"> 
	<input type="submit" name="Submit">
</form>

<input type="button" name="print" value="print nametags" onclick="">


<form action="printnametag.php">
    <input type="submit" name="print" value="Print nametags" />
</form>


</body>
</html>