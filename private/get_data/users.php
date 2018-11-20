<?php

require_once('../conn.php');

// echo "users data here";

$array_data = [];
$query = $conn->query("SELECT * from design_users");
while ($a = $query->fetch_assoc()) {
    array_push($array_data, $a);
}

echo json_encode($array_data);