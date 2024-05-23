<?php
//open file
$file = fopen("db.txt", "r");


//read file
$data = fread($file, filesize("db.txt"));

//echo $data ;
//echo "===========================================";
var_dump($data);




?>