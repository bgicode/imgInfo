<?php
declare(strict_types = 1);

include_once('functions.php');
include_once('variables.php');

$img1Data = getimagesize($img1);
$img2Data = getimagesize($img2);
$img3Data = getimagesize($img3);
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="wrap">
            <div class="imgWrap">
                <img class="image" src="img1.php" alt="img1">
                <div><?=$img1Data[0] . 'x' . $img1Data[1] . ' px'?></div>
                <div><?= fileSizeVar($img1) ?></div>
                <div class="wrapMimeType"><img src="type1.php" alt="img1_type"></div>
            </div>

            <div class="imgWrap">
                <img class="image" src="img2.php" alt="img2">
                <div><?=$img2Data[0] . 'x' . $img2Data[1] . ' px'?></div>
                <div><?= fileSizeVar($img2) ?></div>
                <div class="wrapMimeType"><img src="type2.php" alt="img2_type"></div>
            </div>

            <div class="imgWrap">
                <img class="image" src="img3.php" alt="img3">
                <div><?=$img3Data[0] . 'x' . $img3Data[1] . ' px'?></div>
                <div><?= fileSizeVar($img3) ?></div>
                <div class="wrapMimeType"><img src="type3.php" alt="img3_type"></div>
            </div>
        </div>
    </body>
</html>
