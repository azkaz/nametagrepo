
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="webcam.js"></script>
	
</head>
<body onload="loadWebcam()">
	<div id="videoMask">
	<video id="player" controls autoplay></video>
	</div>
<button id="capture">Capture</button>
<a id="dl" download="picture.jpg" href="#">Download Canvas</a>

<form action="DBconnection.php" method="post" target="_self" enctype="multiform/form-data">
	<input type="text" name="first_name">- First Name<br>
	 <input type="text" name="last_name">- Last Name:<br>
	<input type="text" name="course_name">- Course: <br>
	<input type="date" name="start_date" placeholder="yyyy-mm-dd">- Start Date: <br>
	<input type="date" name="end_date" placeholder="yyyy-mm-dd">- End Date: <br>
<input id="companyText" type="text" name="visitor_picture" > 
	<div style="min-width:220px;max-height:277px">
		<canvas id="snapshot" width="220px"height="277px"></canvas>
	</div>
	<input type="submit" name="Submit">
</form>
	

<form action="printallcard.php">
    <input type="submit" name="print" value="Show all visitors" />
</form>

<form action="printsinglecard.php">
	<input type="submit" name="printsingle" value="print latest card">
</form>

<script>

	
var json = getJson();
function getJson(){
		var json = null;
	$.ajax({
		'async': false,
		'global': false,
		'url': 'general.json',
		'dataType': "json",
		'success': function (data) {
			json = data;
		}
	});
	return json;
}

	function addPhotoName(){
			
			var obj={photoIncrement:++json.photoIncrement};
			console.log(obj);
		$.ajax
    ({
        type: "GET",
        dataType : 'json',
        async: false,
        url: 'createJson.php',
        data: { data: JSON.stringify(obj) },
     // success: function() {console.log("Thanks!"); },
     // failure: function() {console.log("Error!");}
    });

		if(json.photoIncrement === 0){
			$("#companyText").val("picture");
		}
		else{
			$("#companyText").val("picture ("+json.photoIncrement+")");
		}
	}
</script>
</body>
</html>


