<?php
    $target_dir = "uploades/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]);
    $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if(move_uploaded_file($_FILES["fileToUpload"], $target_file)){
        echo "The file " . basename($_FILES["fileToUpload"]) . " has been uploaded";
    }
    else{
        echo "Sorry there was problem uploading your picture";
    }
    
    $_FILES[""]
?>