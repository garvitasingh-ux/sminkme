<?php
include "db.php";
session_start();

if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST['password'];

$res=$conn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
if($res->num_rows>0){
$_SESSION['user']=$email;
setcookie("user",$email,time()+3600);
header("Location: index.php");
}else{
$msg="Invalid Login";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{background:black;color:white;text-align:center;font-family:Arial}
input{padding:10px;margin:5px}
button{padding:10px;background:hotpink;border:none}
</style>
</head>
<body>

<h1>Login 💄</h1>
<form method="post">
<input type="email" name="email" placeholder="Email" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button name="login">Login</button>
</form>
<p style="color:red"><?= $msg ?? "" ?></p>

</body>
</html>
