<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>佈告欄</title>
</head>

<body>
    <a href='./create.html'>分享文章</a><br><br>
</body>
</html>


<?php
    include 'conn.php';
    $request = $con -> query("SELECT * FROM message_board ORDER BY id desc");
    if (!$request){
        die('ERROR: ' . $con -> error);
    }   
?>

<?php
    while($row = mysqli_fetch_array($request)){
?>
    <div>
        
        <hr>
        <div>
            <a href="show.php?id=<?php echo $row["id"]?>">標題：<?php echo htmlspecialchars($row['title'], ENT_COMPAT);?></a> &nbsp;&nbsp;&nbsp;            
            <a href="update.php?id=<?php echo $row["id"]?>" class="btn btn-primary mybtn">編輯</a>
            <a href="func.php?method=delete&id=<?php echo $row["id"]?>" class="btn btn-danger mybtn">刪除</a>
        <div>


        <p>
            <?php echo htmlspecialchars($row["create_at"], ENT_COMPAT);?>&nbsp;由&nbsp;<?php echo htmlspecialchars($row["user"], ENT_COMPAT);?>&nbsp;發布
        </p>

    </div>
<?php
    }
?>
