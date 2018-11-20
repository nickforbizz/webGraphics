<?php


print_r($_POST);
print_r($_FILES);

if ($_FILES['img_upload']['size'] == 0) {
    echo "no image to post";
}else {
    echo "image is here";
}