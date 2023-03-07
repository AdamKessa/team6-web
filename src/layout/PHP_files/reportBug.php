<?php
$title = "reportBug";
include "header.php" ?>
<style>
	.form-control {
		color: white;
	}
</style>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
	<h2> Bug report page </h2>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS_files/reportBug.css">

</head>

<body>
	<div class="container" style="text-align: left;">
		<h1>Describe the bug you encountered</h1>
		<!--Form to type bug message-->
		<form action="" method="post" name="reportBug" onsubmit="return validateform()">
			<div class="form-group">
				<p class=" text-left" style="color : white; font-size: 25px" for="name">Name:</label>
					<input type="text" class="form-control w-50 p-3" id="name" name="name">
			</div>
			<div class="form-group">
				<p class=" text-left" style="color : white; font-size: 25px" for="email">Email:</label>
					<input type="email" class="form-control w-50 p-3" id="email" name="email">
			</div>
			<div class="form-group">
				<p class=" text-left" style="color : white; font-size: 25px" for="message">Message:</label>
					<textarea class="form-control w-50 p-3" id="message" name="message"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit">Submit</button>

			<?php

			//declaring form input data to variables 
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				//calling for reportBug-db.php to connect to database
				include 'reportBug-db.php';

				//declaring sql queries to be executed
				$sql1 = "insert into reportBug (name, email, message) values('$name',
              '$email', '$message')";
				$sql2 = "SELECT message_id FROM reportBug ORDER BY message_id DESC LIMIT 1";
				$result2 = mysqli_query($conn, $sql2);

				//checking if sql1 statement is executed
				if ($conn->query($sql1) == True) {
					echo "<br><br>" . " <div style ='font:25px Arial,tahoma,sans-serif;color:#F05C25';padding-left: 30px> Your bug report was successfully received</div>";
				} else {
					echo "Error : please check your information" . $conn->error;
				}

				//checking if sql2 statement is executed
				if (mysqli_num_rows($result2) > 0) {
					// print latest added message_ID of user
					while ($row = mysqli_fetch_assoc($result2)) {
						// message_id is the id of the latest message that isnt yet input by the user so we fix that by adding 1 to it.
						$real_message_id = $row['message_id'] + 1;
						echo "<h3 style= 'color:#FFFFFF' > The ID of your report is {$real_message_id} . </h3>";

					}
				}
			}
			?>
	</div>
	<!-- <h2  style= 'color:#FFFFFF' ><b>Check your bug report</b></h2 >
<br><br>
	  <form action="" method="post">
		<input class="form-control w-50" type="text" name="message_ID" placeholder="Your report ID"><br>
	  
		<button type="submit" class="btn btn-primary btn-lg" value="check your reservation" name="check">Check</button>
		</form>
	</div> -->



	<?php include "footer.php" ?>