<?php
declare(strict_types = 1);

header("Content-type: image/png");

include_once('functions.php');
include_once('variables.php');

createStringImg($fontSize, getMimeType(getimagesize($img2)), $font);
