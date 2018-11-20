<?php

require_once('../conn.php');
require_once('../functions.php');


// print_r($_POST);                                                                                                    

if (isset($_POST['search_blog'])) {
    $search_val = validateData($_POST['search_blog']);
    $query = $conn->query("SELECT * from blogs where title like '%$search_val%' ");

    $array_search = [];
    while ($a = $query->fetch_assoc()) {
        $test = $a['content'];
        $test = stringLines($test); 
        $a['content'] = $test;

        array_push($array_search, $a);
    }

    echo json_encode($array_search);
}   

