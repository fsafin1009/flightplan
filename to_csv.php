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

///Выгружаем данные из базы данных в csv
$fp = fopen('file/file.csv', 'w');

$result = $db->query('SELECT * FROM mydb');
while($row = $result->fetchArray(SQLITE3_ASSOC)) {
    fputcsv($fp, $row); 
}
print_r("Данные были успешно записаны");
fclose($fp);




