<?php
$title = "Login";
include "header.php" ?>
<?php
 setcookie('user',$user['name'],time()-3600,"/");
 header("Location : home.php");

?>

<?php include "footer.php" ?>