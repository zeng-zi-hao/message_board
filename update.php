<?php
	include_once "conn.php";
	$id = $_GET["id"];
    $sql="SELECT * FROM `message_board` WHERE id = '$id'";
	$result = mysqli_query($con , $sql) or die('MySQL query error');
   	$row = mysqli_fetch_array($result);
?>

<form role="form" action="func.php?method=update&id=<?php echo $row["id"]?>" method="post">

    <table>
        <tr>
            <td>標題</td>
            <td><input type="text" name="title" maxlength="50" value="<?php echo htmlspecialchars($row["title"], ENT_COMPAT);?>"></td>
        </tr>
        <tr>
            <td>文章內容</td>
            <td><textarea type="text" rows="5" cols="22" name="content" maxlength="100"><?php echo htmlspecialchars($row["content"], ENT_COMPAT);?></textarea></td>
        </tr>

    </table>
    <button type="submit">修改</button>
</form>