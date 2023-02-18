<?php
$title = "checkreservation";
include "header.php";
include 'bookatable-db.php';
$sql="select * from reservation";
$result=$conn->query($sql);
if($result->num_rows > 0){    //to check if there is any record in the table or not
    echo "";    
  
}


?>





<?php include "footer.php" ?>