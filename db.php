<?php
try{
$db = new PDO("mysql: host= localhost; dbname=numberji; charset=utf8", 'root', '');
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo'Error';
}
?>