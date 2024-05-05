<?php
header("Content-type: image/png");

include_once('functions.php');
include_once('variables.php');



// function createStringImg($fontsize, $string)
// {
//     $font = "./arial.ttf";
//     $lineHeight = $fontsize * 0.2;
//     $lines = explode("\n", $string);
//     $maxWith = 0;

//     foreach ($lines as $line) {
//         $lineWith = imagefontwidth($fontsize)*strlen($line);
//         if ($lineWith > $maxWith) {
//             $maxWith = $lineWith;
//         }
//     }

//     foreach ($lines as $line) {
//         $arLinesWidths[] = ($maxWith-imagefontwidth($fontsize)*strlen($line))/2;
//     }

//     $im = imageCreateTrueColor($maxWith, ($fontsize * count( $arLinesWidths)) + ($lineHeight * count( $arLinesWidths)));

//     imagesavealpha($im, true);
//     imagefill($im, 0, 0, imagecolorallocatealpha($im,0, 0, 0, 127));

//     $color = imageColorAllocate($im, 0, 0, 255);

//     $shiftString = 0;
//     foreach ($lines as $key => $line) {
//         if ($key == 0) {
//             imageString($im, $fontsize, $arLinesWidths[$key], 0, $line, $color);
//         } else {
//             imageString($im, $fontsize, $arLinesWidths[$key], ($fontsize + $lineHeight / 2)*$shiftString, $line, $color);
//         }
//         ++$shiftString;
//     }

//     imagePng($im);
//     imageDestroy($im);
// }

// createStringImg(12, $text);

// function createStringImg($fontSize, $string)
// {
//     $font = './times.ttf';
//     $lineHeight = $fontSize * 0.2;
//     $lines = explode("\n", $string);
   
//     foreach ($lines as $line) {
//         $arBbox[] = imagettfbbox($fontSize, 0, $font, $line);
//     }

//     $maxWith = 0;
//     foreach ($arBbox as $bbox) {
//         $lineWith = $bbox[2];
//         if ($lineWith > $maxWith) {
//             $maxWith = $lineWith;
//         }
//     }

//     $im = imagecreatetruecolor($maxWith, ($fontSize + $lineHeight)*count($lines) + $lineHeight);
//     imagesavealpha($im, true);
//     imagefill($im, 0, 0, imagecolorallocatealpha($im,0, 0, 0, 127));
//     $color = imageColorAllocate($im, 0, 0, 255);

//     $lineShift = 1;
//     foreach ($lines as $key => $line) {
//         $x = $arBbox[$key][0] + (imagesx($im) / 2) - ($arBbox[$key][4] / 2);
//         $arBbox[] = imagettfbbox($fontSize, 0, $font, $line);
//         if ($key == 0) {
//             imagettftext($im, $fontSize, 0, $x, $fontSize + $lineHeight, $color, $font, $line);
//         } else {
//             $shift = ($fontSize)*$lineShift + $lineHeight*$lineShift;
//             imagettftext($im, $fontSize, 0, $x, $shift, $color, $font, $line);
//         }
//         ++$lineShift;
//     }
    
//     imagepng($im);
//     imagedestroy($im);
// }
createStringImg(12, getMimeType(getimagesize($img1)), $font);
