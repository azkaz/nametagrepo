
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
	<input type="text" name="first_name">- First Name<br>
	 <input type="text" name="last_name">- Last Name:<br>
	<input type="text" name="course_name">- Course: <br>
	<input type="date" name="start_date" placeholder="yyyy-mm-dd">- Start Date: <br>
	<input type="date" name="end_date" placeholder="yyyy-mm-dd">- End Date: <br>
<input id="companyText" type="text" name="visitor_picture" placeholder="vänligen välj loga nedanför" >- Company Logo: 
	<div style="width:150px;height:150px">
	<image id="logotype" src="visitor_pictures/Angry_Marine.jpg" style="max-width:100%;max-height:100%"></image>
	</div>
	<input type="submit" name="Submit">
</form>
	
<div class="container">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Logo
    <span class="caret"></span></button>
    <ul id="ddmID" class="dropdown-menu">
      <li><a href="#">Angry_Marine</a></li>
      <li><a href="#">Waagh</a></li>
      <li><a href="#">wereBusy</a></li>
			<li><a href="#">GodEmperor</a></li>
			<li><a href="#">Tau</a></li
    </ul>
  </div>
</div>



<form action="printallcard.php">
    <input type="submit" name="print" value="Show all visitors" />
</form>

<form action="printsinglecard.php">
	<input type="submit" name="printsingle" value="print latest card">
</form>

<script>
	$('#ddmID li').on('click', function(){
		$('#companyText').val($(this).text());
		$('#logotype').attr('src','visitor_pictures/'+$('#companyText').val()+'.jpg');
	});
</script>
</body>
</html>


