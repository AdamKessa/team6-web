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
		<form action="submit.php" method="post">
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
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	



<?php include "footer.php" ?>
