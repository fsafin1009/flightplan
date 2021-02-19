<?php

class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('my.db');
   }
}

$db = new MyDB();

if(!$db){
    echo $db->lastErrorMsg();
 } else {
    echo "Opened database successfully\n";
 }

$fp = fopen('file/file.json', 'w');

$result = $db->query('SELECT * FROM mydb');
while($row = $result->fetchArray()) {
    $json_file = json_encode($row);
    fwrite($fp,  $json_file);
}
print_r("Данные выгруженны в json .\n");

