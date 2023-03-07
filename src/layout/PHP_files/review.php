<?php
$title = "REVIEWS";
$css = "../CSS_files/review.css";

include "header.php" ?>



<head>

  <link rel="stylesheet" href="../CSS_files/review.css">
</head>

<script src="../js/review.js"></script>

	<h2>Add a Review</h2>
		<div id="add_reviews">
			<form id="review-form" method="post" enctype="multipart/form-data" action = "add_review.php"  name = "form">
				<label for="custom-name">Your Name:</label>
				<input type="text" name="customerName" placeholder="Customer Name" id="customer-name" maxlength="20" required><br>
				
				<label for="rating">Rating:</label>
				<select name="rating" id = "rating">
					<option value="1">&#9733;</option>
					<option value="2"> &#9733; &#9733;</option>
					<option value="3"> &#9733; &#9733; &#9733;</option>
					<option value="4"> &#9733; &#9733; &#9733;&#9733;</option>
					<option value="5"> &#9733; &#9733; &#9733; &#9733; &#9733;</option>
				</select><br>

				<!-- <label for="review-text">Review:</label> -->
				<textarea name="reviewText" placeholder="Write your review here Please. Maximum 1000 words" maxlength="1000"required></textarea><br>

				<label for="imageUpload">Image:</label>
				<input type="file" id="imageUpload" name="image" onchange="checkFileSize()" required><br>	
                
				<button type="submit" id ="addreviewbutton" name="submit">SubmitReview</button>
				
			</form>

			
		</div>

	<h1>Customer Reviews</h1>
	<div class="container">
		<div id="reviews">
		<?php
			// Connect to the database
			
			include '../../crud/db.php';
			// Retrieve reviews data
			$sql = 'SELECT * FROM reviews';
			$result = mysqli_query($conn, $sql);
             
			// Display reviews on the webpage
			while ($row = mysqli_fetch_assoc($result)) {

			    echo '<div class="review">';
				$upload_path = $row['review_image'];

				echo "<img src=\"$upload_path\" alt=\"Uploaded image\" >";
			    echo '<h3>' . $row['customerName'] . '</h3>';
			    echo '<p>' . $row['review_text'] . '</p>';
				for($i=1; $i <=$row['rating']; $i++){
			    echo '<span>' . ' &#9733;</span>';
				}
			    echo '</div>';
			}
		
		?>
	  </div>
	</div>





	

<?php include "footer.php" ?>