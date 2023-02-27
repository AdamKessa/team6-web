<?php
$title = "Login";
include "header.php" ?>
  <?php
  if(!$_COOKIE['user']==''):
  ?>
<form action="auth.php" method="post" onsubmit="return crud()" name="form2">

    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Enter login"><br>

    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
    <button class="btn btn-success" type="submit">Login</button>


</form>
<?php else:?>
<p>Wellcome <?=$_COOKIE['user']?>. Press <a href="exit.php">log out</a> to exit. </p>
<?php endif;?>
<?php include "footer.php" ?>