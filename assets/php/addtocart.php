<?php
$db=include('db.php');
$mysqli=new mysqli($db['host'],$db['user'],$db['pass'],$db['db']);

session_start();
// $query='Select itemid,item_name,item_desc,price from items';

// $result=$mysqli->query($query);
$username=$mysqli->real_escape_string($_SESSION['username']);
$arr=json_decode($_GET['parts'],true);
$result="";

foreach ($arr as $obj){
    $result=$obj;
    // $itemid=$mysqli->real_escape_string($obj['id']);
    $itemid=$obj['id'];
    $query="INSERT INTO users_cart(username,itemid) values('$username',$itemid)";
    $result=$mysqli->query($query);
}
// $result->close();
echo $query;
?>