<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


</head>
<body>
    <div class="container-fluid mt-5">
        <div class="="row">
            <div class="col-md-6 offset-md-3">
               <div class="card">
                   <div class="card-header bg-dark text-white" ><h2>Login</h2></div>
                        <div class="card-body">
<form action="" method="POST">
    <p>
        Name<br>
        <input type="text" name="name" required>
    </p>

    <p>
        Email<br>
        <input type="email" name="email" required>
    </p>
    
    <p>
        Password<br>
        <input type="password" name="password" required>
    </p>

    <p>
        <input type="submit" name="submit" value="Create">
    </p> 
</form>

<?php

$pdo=new PDO("mysql:host=localhost;dbname=php_course","root","password");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $sql="insert into user (Name,Email,Password) values(?,?,?)";
    
    $res=$pdo->prepare($sql);
    $res->execute([$name,$email,$password]);
   
    echo "Saved your Data!";
 
}
?>
          </div>
               </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>
</html>
