<?php
// trim delete space , filter symbols kotoriy pered v database
$login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."dwq12e1290");

$mysql=new mysqli('db','asror','asror2003','team6-web');
if ($mysql->connect_error)
{
    die("connection failed:" . $mysql->connect_error);
}
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login','$pass','$name')");

$mysql->close();

header("Location: index.php");
// exit();
?>