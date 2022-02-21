<?php

$pdo=new PDO("mysql:host=localhost;dbname=php_course","root","password");
$order_id=$_GET['order_id'];
$sql="select * from orders where id=?";
$res=$pdo->prepare($sql);
$res->execute([$order_id]);
$data=$res->fetch(PDO::FETCH_ASSOC);


if($data){
    echo $data['OrderName'];
}else{
    echo "data not found";
}


