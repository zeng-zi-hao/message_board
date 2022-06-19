<?php

$host = 'localhost';
$dbName = 'message_board';
$user = 'root';
$password = '';


$con = mysqli_connect($host,$user,$password);
if(!$con){
    die('資料庫連接失敗').mysqli_error();
} else{
    mysqli_select_db($con, 'message_board');
}
 ?>