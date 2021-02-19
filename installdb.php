<?php 
// открываем  или же ее создаем, базу данных

class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('my.db');
   }
}

// проверка базы данных на ошибки
$db = new MyDB();

if(!$db){
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}

//записываем данные в базу данных 
/*
$db->exec('CREATE TABLE mydb ( id integer, fnum string, orign string, dest sttring, type string)');

$db->exec("INSERT INTO mydb (id, fnum, orign, dest, type) 
VALUES ('70098', 'AHY175', 'UBBB', 'B752', 'LTFM')");

$db->exec("INSERT INTO mydb (id, fnum, orign, dest, type) 
VALUES ('70098', 'AHY185', 'UBBB', 'B754', 'LTFM')");


$db->exec("INSERT INTO mydb (id, fnum, orign, dest, type) 
VALUES ('70098', 'AHY195', 'UBBB', 'B756', 'LTFM')");
*/












