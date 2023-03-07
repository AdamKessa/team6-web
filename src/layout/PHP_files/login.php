<?php
session_start();
$title = "Log in";
include "header.php"; ?>

<?php
if(isset($_SESSION['user'])==''):
?>
<div class="log_sign">

    <form action="auth.php" onsubmit="return crud_sign()" name="form2" method="post">

        <label for="Email1">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required><br>

        <label for="Password1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required><br>
        <button class="btn btn-success" type="submit">Log in</button>
        <!-- <p class="btn btn-success"><input class="button" name="login"type= "submit" value="Log In"></p> -->
        <p class="text" style="color: white ;">Not registered yet?<a href="sign_up.php">Registration</a>!</p>
    </form>

</div>
<?php else:?>
<h3 class="well"style="background-color: #00000">Wellcome <?=$_SESSION['user']['nick']?>. Press <a href="exit.php">log out</a> to exit. </h3>
<?php endif;?>
<?php include "footer.php" ?>