<?php
include("connection.php");

$query = $mysqli->prepare("SELECT user_id, full_name, username from users");

$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
 
} 
echo json_encode($response);

?>