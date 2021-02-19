<?php 

$filename = 'file/test.txt';

if (file_exists($filename)) {
    $newfile = 'upload/test.txt';
    if(!copy($filename,$newfile)){
        echo "failed to copy $file";
    }
    else{
        echo "copied $filename into $newfile\n";
    }   
} else {
    echo "Файл $filename не существует";
}
?>