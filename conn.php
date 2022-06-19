<?php

$host = 'localhost';
$dbName = 'message_board';
$user = 'root';
$pass = '';


$con = mysqli_connect($host,$user,$pass);
if(!$con){
    die('資料庫連接失敗').mysqli_error();
} else{
    mysqli_select_db($con, 'message_board');
}
 ?>