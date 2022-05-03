<?php
//for open file 
$file = fopen("text.txt",'w');
//to write
 fwrite($file,"hello world");
//to append
 $file=fopen("text.txt",'a');
fwrite($file,"how r u?" );
//to read
$file=fopen("text.txt",'r');
$filesize =filesize("text.txt");
// $data= fread($file,2);
$data= fread($file,$filesize) ;
echo $data;
//to close file
fclose($file);
?> 