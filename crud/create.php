<?php require('inc/header.php'); ?>
               
        
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Choose Image</label><br>
                                    <input type="file" name="image" >
                                </div>
                                    <a href="index.php" class="btn btn-sm btn-blue">Back</a>
                                    <input type="submit" name="create" value="Create" class="btn btn-sm btn-success">
                                

                            </form>

                            <?php
                                if($_SERVER['REQUEST_METHOD']=="POST"){
                                  echo "<pre>";
                                  print_r($_FILES);
                                  
                                  //upload files
                                $name=$_POST['name'];
                                $image_name=$_FILES['image']['name'];
                                $tmp_name=$_FILES['image']['tmp_name'];
                                $target_file="image/".$image_name;
                                move_uploaded_file($tmp_name,$target_file);

                                  //insert into database
                                $sql="insert into crud (name,image) values (?,?)";
                                $res=$pdo->prepare($sql);
                                $res->execute([$name,$image_name]);

                               
                               
                                //direct index
                                  header("Location:index.php?create=success");
                              
                                }
                            ?>
        <?php require('inc/footer.php'); ?>