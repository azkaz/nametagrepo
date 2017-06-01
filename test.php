
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	
</head>
<body>
<form action="DBconnection.php" method="post" target="_self" enctype="multiform/form-data">
	First Name: <input type="text" name="first_name"><br>
	Last Name: <input type="text" name="last_name"><br>
	Course: <input type="text" name="course_name"><br>
	Start Date: <input type="date" name="start_date" placeholder="yyyy-mm-dd"><br>
	End Date: <input type="date" name="end_date" placeholder="yyyy-mm-dd"><br>
	Complany Logo: <input id="companyText" type="text" name="visitor_picture" placeholder="vänligen välj loga nedanför" >
	<div style="width:150px;height:150px">
	<image src="Angry_Marine.jpg" style="max-width:100%;max-height:100%"></image>
	</div>
	<input type="submit" name="Submit">
</form>
	
<div class="container">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Logo
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
    </ul>
  </div>
</div>

<input type="button" name="print" value="print nametags" onclick="">


<form action="printnametag.php">
    <input type="submit" name="print" value="Print nametags" />
</form>
<script>
	$('dropdown-menu li').on('mouseover', function(){
		$('companyText').val(this).text();
	});
</script>
</body>
</html>