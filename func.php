<?php
	include "conn.php";
    session_start();
	switch ($_GET["method"]) {
		case "create":
			create();
			break;
		case "update":
			update();
			break;
		case "delete":
			delete();
			break;
		default:
			break;
	}

    function create(){
        include 'conn.php';

        $user = $con -> real_escape_string($_POST['user']);
        $title = $con -> real_escape_string($_POST['title']);
        $content = $con -> real_escape_string($_POST['content']);
        date_default_timezone_set("Asia/Taipei");
        $create_at = date("Y:M:D H:i:s");
        
    
        $sql = "INSERT INTO message_board (id,user,title,content,create_at) 
        VALUES ('','$user','$title','$content','$create_at')";
        
        mysqli_query($con,$sql);
    
        header("location:index.php");
    }


    function update(){
        include 'conn.php';
        $id = $_GET["id"];
        $title = $con -> real_escape_string($_POST["title"]);
        $content = $con -> real_escape_string($_POST["content"]);
        $sql = "UPDATE `message_board` SET title = '$title', content = '$content' WHERE id = $id";
        $result = mysqli_query($con , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "alert('編輯留言成功');";
        echo "location.href='index.php';";
        echo "</script>";
    }

    function delete(){
        $id = $_GET["id"];
        $sql = "DELETE FROM `message_board` WHERE id = $id";
        global $con;
        $result = mysqli_query($con , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "alert('刪除留言成功');";
        echo "location.href='index.php';";
        echo "</script>";
    }