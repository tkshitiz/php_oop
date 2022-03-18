<?php require_once('./config/operation.php');
  $operation= new operation();
  $operation->update();
   
  $id= $_GET['id'];
  $result= $operation->single_data($id);
//   $singleData=mysqli_fetch_assoc($result);
$singleData=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD IN OOP</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Update</h2>
                    </div>
                  
                        <div class="card-body">
                            <form method="POST" action="">
                                <input type="text" name="first" placeholder=" First Name" class="form-control mb-2" value="<?php echo $singleData['first'];?>" required>
                                <input type="text" name="last" placeholder=" Last Name" class="form-control mb-2"  value="<?php echo $singleData['last'];?>" required>
                                <input type="text" name="username" placeholder=" User Name" class="form-control mb-2"  value="<?php echo $singleData['username'];?>" required>
                                <input type="Email" name="email" placeholder=" email" class="form-control mb-2"  value="<?php echo $singleData['useremail'];?>"  required>
                        </div>
                        <button class="btn btn-success" name="btn_update">Update</button> <div class="card-footer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>