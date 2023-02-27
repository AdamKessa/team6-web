<?php 
$title = "Sign up";
include "header.php" ?>
  <?php
  if($_COOKIE['user']==''):
  ?>
<form action="check.php" method="post" onsubmit="return crud()" name="form2">    

<label for="exampleInputEmail1">Login</label>
<input type="text" class="form-control" name ="login" id="login" placeholder="Enter login"><br>

<label for="exampleInputPassword1">Name</label>
<input type="text" class="form-control" name ="name" id="name" placeholder="Enter name"><br>

<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name ="pass" id="pass" placeholder="Password"><br>
<button class="btn btn-success"
type="submit">Register</button>


</form>
<?php endif;?>

</body>
<?php include "footer.php" ?>