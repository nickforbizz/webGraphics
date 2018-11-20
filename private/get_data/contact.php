<?php

require_once('../conn.php');

// echo "contact data here";

$array_data = [];
$query = $conn->query("SELECT * from contact");
while ($a = $query->fetch_assoc()) {
    array_push($array_data, $a);
}

echo json_encode($array_data);