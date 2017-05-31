
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome</title>
</head>
<body>
<form action="DBconnection.php" method="post" target="_self">
	First Name: <input type="text" name="first_name"><br>
	Last Name: <input type="text" name="last_name"><br>
	Course: <input type="text" name="course_name"><br>
	Start Date: <input type="date" name="start_date" placeholder="yyyy-mm-dd"><br>
	End Date: <input type="date" name="end_date" placeholder="yyyy-mm-dd"><br>
	<input type="submit" name="Submit">
</form>

<form action="printnametag.php">
    <input type="submit" name="print" value="Print nametags" />
</form>


</body>
</html>