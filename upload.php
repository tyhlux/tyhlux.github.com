<?php
if(isset($_FILES["fileToUpload"]["name"])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<a href='$target_file' target='_blank'>" . basename($_FILES["fileToUpload"]["name"]) . "</a> has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
