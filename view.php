<?php require_once('./config/operation.php');
 $obj= new operation();
 $view=$obj->view_record();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <?php echo $obj->display_message();?>
                        <h2>Student Record</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>FIRSTNAME</td>
                                <td>LASTNAME</td>
                                <td>USERNAME</td>
                                <td>EMAIL</td>
                                <td colspan="2">ACTION</td>
                            </tr>
                            <tr>
                                <?php 
                                
                                while($data=mysqli_fetch_assoc($view))
                                {?>
                                 <td><?php echo $data['id']?></td>
                                 <td><?php echo $data['first'];?></td>
                                 <td><?php echo $data['last'];?></td>
                                 <td><?php echo $data['username'];?></td>
                                 <td><?php echo $data['useremail'];?></td>
                                 <td><a href="edit.php?id=<?php echo $data['id']?>"class="btn btn-primary">Edit</a></td>
                                 <td><a href="delete.php?id=<?php echo $data['id']?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php  }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>