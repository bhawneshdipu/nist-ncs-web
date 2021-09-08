<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$user = 'dipu';
$host = 'localhost';
$pass = 'dipu';
$database = 'dipu';
$port='5432';
$serError = "Unable to connect to the Server.";
$conn =pg_connect('host=localhost port=5432 dbname=dipu user=dipu password=dipu');
if(!$conn){
    // echo 'Error connect to pgsql Database';

 }else{
     //echo 'connected to pgsql database '.$database;
 }

?>
