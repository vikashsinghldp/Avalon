<?php
include('php-includes/check-login.php');
require('php-includes/connect.php');
$userid=$_GET['userid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $query = mysqli_query($con,"select * from user where email='$userid'");
    if(mysqli_num_rows($query)>0){
        $i=1;
        while($row=mysqli_fetch_array($query)){
           
            $password= $row['password'];
            $account=$row['account'];
            $mobile=$row['mobile'];
            $address=$row['address'];
            $id=$row['id'];
            
        }
    }
   
    ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update Member</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                	<div class="col-lg-4">
                    	<form method="get" action="edit.php">
                        <div class="form-group">
                                <label>Userid</label>
                                <input type="text" name="userid" value="<?php echo $id ?>"class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="account" value="<?php echo $account ?>"class="form-control" required>
                            </div>
                            
                           
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" value="<?php echo $mobile ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="<?php echo $address ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="<?php echo $password ?>" class="form-control" required>
                            </div>
                            
                            
                            <div class="form-group">
                        	<input type="submit" name="join_user" class="btn btn-primary" value="Update">
                        </div>
                        </form>
                    </div>
                </div><!--/.row-->
            </div>
</div>

    
</body>
</html>