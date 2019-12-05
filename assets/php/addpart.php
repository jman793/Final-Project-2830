<?php
$db=include('db.php');
$mysqli=new mysqli($db['host'],$db['user'],$db['pass'],$db['db']);

if($mysqli->connect_error){
    echo $mysqli->connect_errno;
}

$partName = $_GET["partName"];
$partPrice = $_GET["partPrice"];
$partDesc = $_GET["partDesc"];



$partName= $mysqli->real_escape_string($partName);
$partPrice= $mysqli->real_escape_string($partPrice);
$partDesc= $mysqli->real_escape_string($partDesc);


$query="INSERT INTO items (item_name,price,item_desc) values ('$partName','$partPrice','$partDesc')";
$result=$mysqli->query($query);
header("location: ../../index.html")
?>
