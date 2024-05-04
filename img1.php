<?php
$im = imageCreateFromGif("img/практика_gif.gif");
header("Content-type: image/gif");
imagegif($im);