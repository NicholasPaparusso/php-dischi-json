<?php 

$string = file_get_contents('db.json');

$list = json_decode($string, true);

$result = [];


if(empty($_GET['cdIndex'])){
  $result = $list ;
}else{
  $result = $list[$_GET['cdIndex']];
}

header('Content-Type: application/json');

echo json_encode($result);

?>