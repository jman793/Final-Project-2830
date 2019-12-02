<?php
$db=include('db.php');
$mysqli=new mysqli($db['host'],$db['user'],$db['pass'],$db['db']);

if($mysqli->connect_error){
    echo $mysqli->connect_errno;
}

$username = trim($_POST["username"]);
$password=sha1(trim($_POST['password']));

$username= $mysqli->real_escape_string($username);
$password= $mysqli->real_escape_string($password);

$query="SELECT COUNT('*') FROM users WHERE username='$username' AND pswrd='$password'";
$result=$mysqli->query($query);
if($result>0){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['loggedin']=True;
    echo True;
    exit;
}
else{
    echo False;
    exit;
}
?>
