<?php
header("Content-type: image/png");

include_once('functions.php');
include_once('variables.php');

createStringImg(12, getMimeType(getimagesize($img1)), $font);
