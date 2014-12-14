<?php 
phpinfo();

$myurl = 'filename.pdf[0]';
$image = new Imagick($myurl);
$image->setResolution( 300, 300 );
$image->setImageFormat( "png" );
$image->writeImage('newfilename.png'); 



?> 