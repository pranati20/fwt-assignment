<?php
if(isset($_FILES['image'])){

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    if(move_uploaded_file($file_tmp,"uploads/" . $file_name)){
        echo "successfully uploaded";
    } else{
        echo"could not upload file";

    }
    }
    
?>
     