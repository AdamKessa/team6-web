<?php
$title = "reportBug";
include "header.php" ?>
<style>
.form-control{
        color : white;
}
</style>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
	<h2> Bug report page </h2>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS_files/style.css">
</head>
<body>
	<div class="container">
		<h1>Describe the bug you encountered</h1>
		<form action="" method="post">
			<div class="form-group">
				<label style="color : white;" for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label style="color : white;" for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label style="color : white;" for="message">Message:</label>
				<textarea class="form-control" id="message" name="message"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit">Submit</button>

			<?php

        if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];

          include 'reportBug-db.php';
          $sql1 = "insert into reportBug (name, email, message) values('$name',
              '$email', '$message')";
			$sql2 = "SELECT message_id FROM reportBug ORDER BY message_id DESC LIMIT 1";
			$result2 = mysqli_query($conn, $sql2);

          if ($conn->query($sql1) == True) {
            echo "<br><br>" . " <div style ='font:25px Arial,tahoma,sans-serif;color:#F05C25';padding-left: 30px> Your bug report was successfully received</div>";
          } else {
            echo "Error : please check your information" . $conn->error;
          }

		  if (mysqli_num_rows($result2) > 0) {
			// Loop through the results and output  data
			while($row = mysqli_fetch_assoc($result2)) {
				echo "<h3 style= 'color:#FFFFFF' > The ID of your report is {$row['message_id']} . </h3>";
		  
        }
	}
}

		
			
        ?>

		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	



<?php include "footer.php" ?>
