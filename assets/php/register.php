<?php

$db=include('db.php');
$mysqli=new mysqli($db['host'],$db['user'],$db['pass'],$db['db']);

if($mysqli->connect_error){
    echo False;
    exit;
}
$username=trim($_POST['username']);

$query="SELECT COUNT('*') FROM users WHERE username='$username'";
$result=$mysqli->query($query);

if($result<0){
    echo False;
    exit;
}
else{
    $password = sha1(trim($_POST["password"]));
    $password= $mysqli->real_escape_string($password);
    $username= $mysqli->real_escape_string($username);
    $query="INSERT INTO users (pswrd,username) values ('$password','$username')";
    $result=$mysqli->query($query);
    echo True;        
    exit;
}
?>
