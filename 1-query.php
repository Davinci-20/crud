<?php

$pdo=new PDO("mysql:host=localhost;dbname=php_course","root","password");

$sql="select * from user";


$data=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($data);
