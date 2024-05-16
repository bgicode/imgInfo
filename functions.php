<?php
function fileSizeVar(string $file): string
{
    $size = filesize($file);
    if ($size < 1024) {
        return $size . ' байт';
    } else {
        return round(($size / 1024)) . " КБ";
    }
}

function getMimeType(array $arImage): string
{
    return "MIME-тип:\n" . $arImage['mime'];
}

function createStringImg(int $fontSize, string $string, string $font): void
{
    $lineHeight = $fontSize * 0.2;
    $lines = explode("\n", $string);

    foreach ($lines as $line) {
        $arBbox[] = imagettfbbox($fontSize, 0, $font, $line);
    }

    $maxWith = 0;
    foreach ($arBbox as $bbox) {
        $lineWith = $bbox[2];
        if ($lineWith > $maxWith) {
            $maxWith = $lineWith;
        }
    }

    $im = imagecreatetruecolor($maxWith, ($fontSize + $lineHeight) * count($lines) + $lineHeight);
    imagesavealpha($im, true);
    imagefill($im, 0, 0, imagecolorallocatealpha($im, 0, 0, 0, 127));
    $color = imageColorAllocate($im, 0, 0, 255);

    $lineShift = 1;
    foreach ($lines as $key => $line) {
        $x = $arBbox[$key][0] + (imagesx($im) / 2) - ($arBbox[$key][4] / 2);
        $arBbox[] = imagettfbbox($fontSize, 0, $font, $line);
        if ($key == 0) {
            imagettftext($im, $fontSize, 0, $x, $fontSize + $lineHeight, $color, $font, $line);
        } else {
            $shift = ($fontSize) * $lineShift + $lineHeight * $lineShift;
            imagettftext($im, $fontSize, 0, $x, $shift, $color, $font, $line);
        }
        ++$lineShift;
    }

    imagepng($im);
    imagedestroy($im);
}

function imgViev(string $file): void
{
    $type = getimagesize($file)['mime'];
    $contentType = "Content-type: " . $type;
    header($contentType);
    switch ($type) {
        case 'image/gif':
            $im = imageCreateFromGif($file);
            imagegif($im);
            break;
        case 'image/png':
            $im = imageCreateFrompng($file);
            imagepng($im);
            break;
        case 'image/jpeg':
            $im = imageCreateFromjpeg($file);
            imagejpeg($im);
            break;
    }
}
