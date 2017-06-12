<html>

<head>
	<meta charset="utf-8" />
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
	<link rel="stylesheet" href="csssheet.css">
	<script src="webcam.js"></script>

</head>

<body onload="loadWebcam()">
	<div id="startpageContainer">
		<div id="videoMask">
			<video id="player" style="width:400; height:320" class="videoStream" controls autoplay></video>
		</div>
		<!--  -->
		<!-- gets the data from the input fields and sends it to DBconnection for insertion into database -->
		<div id="formContainer" class="form-group">
			<button id="capture" class="btn btn-success" >Ta Bild</button>
			<form action="DBconnection.php" method="post" target="_self" enctype="multiform/form-data">
				<label for="usr">Förnamn:</label>
				<input type="text" name="first_name" class="inputTextfield form-control input-lg">
				<label for="usr">Efternamn:</label>
				<input type="text" name="last_name" class="inputTextfield form-control input-lg">
				<label for="usr">Ärende / Kursnamn:</label>
				<input type="text" name="course_name" class="inputTextfield form-control input-lg">
				<input id="companyText" type="text" name="visitor_picture">
				<input id="logotype" type="text" name="logotype" class="inputTextfield form-control input-lg"><br>
				<!-- creates a canvas that gets a fills from a snapshot picture taken from the videostream.
					this can then be downloaded as a jpg file and used as a potraitpicture of the visitor on the visitor nametag  -->
				<div id="canvasDateContainer">
					<div style="float:left;">
						<canvas id="snapshot" width="150px" height="182px" style="float:left;border:solid 3px;border-color:red;"></canvas>
						<br>
						<a id="dlbtn" class="btn btn-success">Download Canvas</a>
					</div>
					<div style="float:right;">
						<label for="usr">Start Date:</label>

						<input type="date" name="start_date" placeholder="yyyy-mm-dd" class="inputTextfield form-control input-lg" style="float:right;"><br>
						<label for="usr">Start Date:</label>
						<input type="date" name="end_date" placeholder="yyyy-mm-dd" class="inputTextfield form-control input-lg" style="float:right;"><br>
						<div class="form-group">
							<label for="sel1">Select list:</label>
							<select class="form-control input-lg" id="sel1">
   						 <option>Games Workshop</option>
   						 <option>Gothic</option>
  	 	    		 <option>Infinity</option>
 					     <option>Malifaux</option>
				  </select>
						</div>
					</div>
				</div>
				<div>
				<div class=bottomButtons>
					<input id="submitAndDownload" type="submit" name="Submit" value="Skicka In" class="btn btn-success">
				</div>
			</form>
				<div class=bottomButtons>
					<form action="printallcard.php">
						<input type="submit" name="print" value="Show all visitors" class="btn btn-success" />
					</form>
				</div>
				<div class=bottomButtons>
					<form action="printsinglecard.php">
						<input type="submit" name="printsingle" value="print latest card" class="btn btn-success" />
					</form>
				</div>
		</div>
		</div>
		<script>
			$("#companyText").hide();
			$("#logotype").hide();
			$('#sel1').on('click', function () {
				$("#logotype").val($(this).val());
			});
		</script>

	</div>
</body>

</html>