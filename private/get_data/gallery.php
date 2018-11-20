<?php

require_once('../conn.php');



$query = $conn->query("SELECT * from gallery");

$big_container_array = [];

while ($a = $query->fetch_assoc()) {

    $test = $a['content'];
    $test = str_replace("\r", "", $test);
    $test = str_replace("\n", "", $test);   
    $a['content'] = $test;

    array_push($big_container_array, $a);
}

echo json_encode($big_container_array);


