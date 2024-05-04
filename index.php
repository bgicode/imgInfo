<?php
include_once('imgsData.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <img src="img1.php" alt="">
            <div><?=$img1[0] . 'x' . $img1[1]?></div>
            <div><?= $sizeImg1 . "kb"?><div>
            <img src="type.php" alt="">
        </div>
    </div>
</body>
</html>