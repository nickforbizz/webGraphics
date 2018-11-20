<?php

require_once('../conn.php');
require_once('../functions.php');


// print_r($_GET);
// $_GET[index]
$query = $conn->query("SELECT blogs.content from blogs where blogs.`status` = 1 order by blog_id desc  limit 9;");

$big_container_array = [];

while ($a = $query->fetch_assoc()) {
    array_push($big_container_array, $a);
}


echo json_encode($big_container_array);

echo $conn->error;
