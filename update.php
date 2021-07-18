<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE ITEMS</title>

    
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/index.css" type="text/css" rel="stylesheet">
    

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<script src="js/jquery-3.4.1.js"></script> 
</head>
<body>


<section class="container">

    <h1 class="text-center text-capitalize font-weight-bold p-5">Update Order</h1>

    <form action="" method="post" class="form">

    <?php

    require_once('php/dbconfig.php');

    $order_id = $_GET['id'];

    if(isset($_POST['update']))
    {
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $item_q = $_POST['item_q'];

        $ins = "UPDATE orders SET `fname`='$fname',`mobile`='$mobile',`address`='$address',`item_q`='$item_q',`date_`=now() WHERE `order_id`='$order_id' ";
        $run_this = $conn->query($ins);

        if($run_this)
        {
            echo "updated";
            header("Location:admin.php");
        }
        else
        {
            echo "not updated";
        }
    }

    $sql = "SELECT * from orders WHERE order_id='$order_id' ";
    $run = $conn->query($sql);

    if($run->num_rows > 0)
    {
        while($rows = $run->fetch_assoc())
        {   
            ?>
        
        <div class="parent">
            <label for="" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $rows['fname'] ?>" />
        </div>

        <div class="parent">
            <label for="" class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $rows['mobile'] ?>" />
        </div>

        <div class="parent">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $rows['address'] ?>" />
        </div>

        <div class="parent">
            <label for="" class="form-label">Item Quantity</label>
            <input type="text" class="form-control" name="item_q" value="<?php echo $rows['item_q'] ?>" />
        </div>

        <input type="submit" class="btn btn-primary mt-4" name="update" value="Update Order" />

        <?php 
        }   
    }
    ?>

    </form>
</section>

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/util.js" type="text/javascript"></script>
    
</body>
</html>