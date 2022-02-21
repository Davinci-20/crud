<?php require('inc/header.php'); ?>
                            
<a href="create.php" class="btn btn-sm btn-success">Create</a>
<?php
if(isset($_GET['create'])){ ?>

<div class="alert alert-success">

Created Data!

</div>
<?php
}
?>
<?php
if(isset($_GET['delete'])){ ?>

<div class="alert alert-success">

Deleted Data!

</div>
<?php
}
?>
<?php
if(isset($_GET['update'])){ ?>

<div class="alert alert-success">

Updated Data!

</div>
<?php
}
?>
                             <table class="table table-striped">

                                <tr>
                                    <td>No</td>
                                    <td>Image</td>
                                    <td>Name</td>
                                    <td>Options</td>
                                </tr>
                                <?php
                                    $no=1;
                                    $sql="select * from crud";
                                    $data=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($data as $d){ ?>

                                        <tr>
                                        <td><?php echo $no;$no++; ?></td>
                                        <td><img src="image/<?php echo $d['image']; ?>" width="100px" style="boder-radius:30%"</td>
                                        <td><?= $d['name']; ?></td>
                                        <td>
                                            <a href="update.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-warning">Update</a>
                                            
                                            <a href="delete.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                ?>

                   

                            </table>

<?php require('inc/footer.php'); ?>