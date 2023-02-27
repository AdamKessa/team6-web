<?php
$login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."dwq12e1290");

$mysql=new mysqli('db','asror','asror2003','team6-web');

$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass' ");
$user = $result->fetch_assoc();
if(is_countable($user)==0)
{
    echo"no such user found";
    exit();
}

 setcookie('user',$user['name'],time()+3600,"/");

$mysql->close();

header("Location : home.php");
// exit();
?>

