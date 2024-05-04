<?php
include_once('imgsData.php');
$string = $img1['mime'];
$im = imageCreateTrueColor(100, 100);
$color = imageColorAllocate($im, 0, 0, 255);
$px = (imageSX($im)-6.5*strlen($string))/2;
imageString($im, 3, $px, 1, $string, $color);
header("Content-type: image/png");
imagePng($im);
imageDestroy($im);
