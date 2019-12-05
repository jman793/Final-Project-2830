<?php
$db=include('db.php');
$mysqli=new mysqli($db['host'],$db['user'],$db['pass'],$db['db']);

$query='Select itemid,item_name,item_desc,price from items';

$result=$mysqli->query($query);

$data_array = array();

while($row = mysqli_fetch_assoc($result)){
    $data_array[] = array('item_name' => $row['item_name'], 'item_desc' => $row['item_desc'],'price'=>$row['price'],'id'=>$row['itemid']);
}

echo json_encode($data_array);
$result->close();
?>