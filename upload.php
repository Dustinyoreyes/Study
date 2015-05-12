<?php


// //In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES. 
//Create a folder named Userfile in the Study folder and you can the upload all files to go in here. 

$uploaddir = '/wamp/www/Study/Userfile/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded!!\n";
} else {
    echo "There was an error uploading the file\n";
}
echo "<br>";
echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";




?>