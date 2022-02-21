<?php require('inc/header.php'); 
            
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $sql="select name,image  from crud where id=?";
                            $res=$pdo->prepare($sql);
                            $res->execute([$id]);
                            $data=$res->fetch(PDO::FETCH_ASSOC);
                            // print_r($data);
;                        }




                ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input value="<?php echo $data['name']; ?>"type="text" name="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Choose Image</label><br>
                                    <input type="file" name="image" >
                                    <img src="image/<?php echo $data['image'] ?>" width="100px" style="border-radius:20%" alt="image">
                                </div>
                                    <a href="index.php" class="btn btn-sm btn-blue">Back</a>
                                    <input type="submit" name="update" value="Update" class="btn btn-sm btn-success">
                                

                            </form>

        <?php 
        require('inc/footer.php'); 
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['name'];

            if($_FILES['image']['tmp_name']!=""){
                //upload image file
                $img_name=$_FILES['image']['name'];
                $tmp_name=$_FILES['image']['tmp_name'];
                $path="image/".$img_name;
                move_uploaded_file($tmp_name,$path);
               

            }else{
                $img_name=$data['image'];
            }
             //update query
        $sql="update crud set image=?,name=? where id=?";
        $res=$pdo->prepare($sql);
        $res->execute([$img_name,$name,$id]);
        

        //redirect
        header("Location:index.php?update=success");
        }
       
        ?>