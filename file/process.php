<pre>
<?php

// $files = $_FILES;
print_r($_FILES);

// check if user selected a file
// check if file is of valid type
// check if file is of valid size
// check if file has any error
//  rename file to avoid conflicts
// upload file

// check if user selected a file
if ($_FILES["upload"]["name"] == "") {
    echo "no file uploaded";
} else {
    // check if file is of valid type
    $supportedFiles = ["image/jpg", "image/png", "image/jpeg"];
    if (in_array($_FILES["upload"]["type"], $supportedFiles)) {

        // check if file is of valid size
        $supported_size = 200000;
        if ($_FILES["upload"]["size"] <= $supported_size) {

            // check if file has any error
            if ($_FILES["upload"]["error"] == 0) {

                //  rename file to avoid conflicts
                $stamp = time();
                $extension = explode("/", $_FILES["upload"]["type"]);
                $name = explode(".", $_FILES["upload"]["name"]);
                $location = "uploads/$name[0]$stamp.$extension[1]";

                // upload file
                if (move_uploaded_file($_FILES["upload"]["tmp_name"], $location)) {
                    echo "file uploaded succesfully";
                }
            } else {
                echo "error uploading your files";
            }
        } else {
            echo "file too large";
        }
    } else {
        echo "invalid file type";
    }
}
