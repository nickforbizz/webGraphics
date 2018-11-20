<?php

function uploadImg(Type $var = null)
{
   
}

// Avoid Exploit Of DB
function validateData($name){
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    return $name;
  }

  function insertQuery(){
    "INSERT INTO $table_name (column1, column2, column3, ...)
      VALUES (value1, value2, value3, ...)";
  }

  function stringLines($data){
    $data = str_replace("\r", " ", $data);
    $data = str_replace("\n", " ", $data); 
    return $data;
  }