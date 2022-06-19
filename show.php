<?php
	include_once "conn.php";
	$id = $_GET["id"];
    $sql="SELECT * FROM `message_board` WHERE id = '$id'";
	$result = mysqli_query($con , $sql) or die('MySQL query error');
   	$row = mysqli_fetch_array($result);
?>

<table>
    <tr>
        <td>標題&nbsp;&nbsp;&nbsp;</td>
        <td><?php echo htmlspecialchars($row["title"], ENT_COMPAT);?></td>
    </tr>
    <tr>
        <td>文章內容&nbsp;&nbsp;</td>
        <td><?php echo htmlspecialchars($row["content"], ENT_COMPAT);?></td>
    </tr>
</table>
