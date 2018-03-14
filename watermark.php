<?php

function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) { 
   list($width, $height) = getimagesize($SourceFile);
   $image_p = imagecreatetruecolor($width, $height);
   $image = imagecreatefromjpeg($SourceFile);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
   $black = imagecolorallocate($image_p, 0, 0, 0);
   $font = 'arial.ttf';
   $font_size = 10; 
   imagettftext($image_p, $font_size, 0, 10, 20, $black, $font, $WaterMarkText);
   if ($DestinationFile<>'') {
      imagejpeg ($image_p, $DestinationFile, 100); 
   } else {
      header('Content-Type: image/jpeg');
      imagejpeg($image_p, null, 100);
   };
   imagedestroy($image); 
   imagedestroy($image_p); 
};

$SourceFile = '/home/user/www/images/image1.jpg';
$DestinationFile = '/home/user/www/images/image1-watermark.jpg'; 
$WaterMarkText = 'Copyright phpJabbers.com';
watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);


?>