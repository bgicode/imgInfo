<?php
$img1 = getimagesize("img/практика_gif.gif");
$sizeImg1 = filesize("img/практика_gif.gif") / 1000;
echo '<pre>';
print_r($img1);
echo '</pre>';