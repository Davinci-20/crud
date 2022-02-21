<?php
$pdo=new PDO("mysql:host=localhost;dbname=php_course","root","password");

$sql="insert into orders (OrderId,OrderName) values (5,'Milk')";

$res=$pdo->prepare($sql);
$res->execute();
echo "success";