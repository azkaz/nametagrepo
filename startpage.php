
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
  <script src="webcam.js"></script>
	
</head>
<body onload="loadWebcam()">
	<div id="videoMask">
	<video id="player"  width="400" height="320" class="videoStream"  controls autoplay></video>
	</div>
<button id="capture">Capture</button>
<!--  -->
<a id="dlbtn" class="btn btn-success">Download Canvas</a>
<!-- gets the data from the input fields and sends it to DBconnection for insertion into database --> 
<form action="DBconnection.php" method="post" target="_self" enctype="multiform/form-data">
	<input type="text" name="first_name">- First Name<br>
	<input type="text" name="last_name">- Last Name:<br>
	<input type="text" name="course_name">- Course: <br>
	<input type="date" name="start_date" placeholder="yyyy-mm-dd">- Start Date: <br>
	<input type="date" name="end_date" placeholder="yyyy-mm-dd">- End Date: <br>
	<input id="companyText" type="text" name="visitor_picture" > 
	<input id="logotype" type="text" name="logotype"> - Logotype
	<!-- creates a canvas that gets a fills from a snapshot picture taken from the videostream.
	this can then be downloaded as a jpg file and used as a potraitpicture of the visitor on the visitor nametag  -->
	<div style="min-width:150px;max-height:182px">
		<canvas id="snapshot" width="150px"height="182px"></canvas>
	</div>
	<input type="submit" name="Submit">
</form>
	
	<div class="container">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Logo
    <span class="caret"></span></button>
    <ul id="ddmID" class="dropdown-menu">
      <li><a href="#">Angry_Marine</a></li>
      <li><a href="#">We're Filthy Rich</a></li>
      <li><a href="#">wereBusy</a></li>
	  <li><a href="#">GodEmperor</a></li>
	  <li><a href="#">Tau</a></li>
	  <li><a href="#">Photo</a></li>
    </ul>
  </div>
</div>
<!-- wondering if this is the best solution to changing URL but it works so far -->
<form action="printallcard.php">
    <input type="submit" name="print" value="Show all visitors" />
</form>

<form action="printsinglecard.php">
	<input type="submit" name="printsingle" value="print latest card">
</form>

<script>
	$("#companyText").hide();
		$('#ddmID li').on('click', function(){
			$("#logotype").val($(this).text());
		});
</script>
</body>
</html>


