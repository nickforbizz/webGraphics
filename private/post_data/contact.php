
<?php

print_r($_POST);

require_once '../conn.php';

if (isset($_POST['messageInfo'])) {

    function validateData($name){
        $name = htmlspecialchars($name);
        $name = stripslashes($name);
        return $name;
    }

    $messageInfo = validateData($_POST['messageInfo']);
    $clientEmail = validateData($_POST['clientEmail']);
    $clientName = validateData($_POST['clientName']);
    if (!isset($_POST['newsletters'])) {
        $newsletters = settype($newsletters, 'integer');
        $newsletters = 0;
    }else {
        # code...
        $newsletters = validateData($_POST['newsletters']);
        $newsletters = 1;
        
    }


    $query = $conn->query("INSERT INTO `contact` (guest_message, email, guest_name, newsletters) 
             VALUES('$messageInfo', '$clientEmail', '$clientName', '$newsletters')");


   echo $conn->error;

    if ($query == true) {
        echo "posted";
    }else {
        echo "query issues";
    }
    
}