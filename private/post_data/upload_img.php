<?php

require_once '../conn.php';

$time=time();




// if (isset($_POST['upload_img']) ){

    if (isset($_FILES['img_upload']) ) {

        $location = "../uploads/images/";
        $locationDb = "uploads/images/";
        $file_ext = strtolower(end(explode('.', $_FILES['img_upload']['name']) ));
        $upload_name =$_FILES['img_upload']['name'];
        $target = $upload_name;
        $file_tmp = $_FILES['img_upload']['tmp_name'];
        $img_upload_size = $_FILES['img_upload']['size'];
        $img_upload_type = $_FILES['img_upload']['type'];
        $error = $_FILES['img_upload']['error'];
        $name = $_POST['img_name'];
        $category = $_POST['img_categories'];
        $ratings = $_POST['points1'];
        $ok = 1;

        $filetype = strtolower(end(explode('/', $_FILES['img_upload']["type"])));

        // code to post current user
        $current_user = "Wainaina Nicholas";


            // place some value if $about is empty
        if (empty($name)) {
            $link = $_FILES['img_upload']['name'];
        }
        $expensions = array("gif", "jpeg", "jpg", "png");
            // check the file type and set $ok var
        if (in_array($file_ext, $expensions) === false ){
            echo "please Upload images Only".'<br>';
            $ok = 0;
        }
            //check the size of file and set $ok var
        if ($img_upload_size < 10 ){
            echo "The file is too small.".'<br>';
            echo "img_upload size is : ".$img_upload_size.'<br>';
            $ok = 0;
        }

        if (file_exists($target)){
            echo "Sorry, file already exists".'<br>';
            $ok = 0;
        }else {

            //use $ok var to submit data
            if (!empty($upload_name) ) {
                if ($ok == 0 ){
                    echo "The file couldn't be img_upload ".'<br>';

                }
                    //store the file to server

                else if(move_uploaded_file($file_tmp,$location.$time.'.'.$filetype)){


                    $uploadnamex2 = $locationDb.$time.'.'.$filetype;
                    //store the filename and about to the database

                            $query = $conn->query("INSERT INTO `gallery` (link, img_name, posted_by, img_type, category, ratings)
                                                 VALUES ('$uploadnamex2', '$name', '$current_user', '$filetype', '$category', '$ratings')")
                                                  or die($db_error);

                                // unset($_POST['upload']);
                                // header("Location: images.php");
                                
                // Downloading file
                    }
            }else {
                    $ok = 0;
                    echo "This file couldn't be img_upload ".'<br>';
                    echo $error;
                    }
            }
        } else {
        echo "Nothing To Post".'<br>';
    }
// } else {
//     echo "check submit btn";
// }
