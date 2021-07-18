<?php 
session_start();
?>
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
<link rel="stylesheet" href="css/font-awesome.min.css">

<script src="js/jquery-3.4.1.js"></script> 

<style>
input {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.btn {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
</style>


</head>
<body>


<section class="container" >

    <h1 class="text-center text-capitalize font-weight-bold p-5">Update Order</h1>

    <form action="" method="post" class="form" enctype="multipart/form-data">

    <?php

    require_once('php/dbconfig.php');

    $id = $_GET['id'];

    if(isset($_POST['update']))
    {
        $item_id = $_POST['item_id'];
        $item_name = $_POST['item_name'];
        $item_price = $_POST['item_price'];

        $ins = "UPDATE items SET `item_id`='$item_id',`item_name`='$item_name',`item_price`='$item_price',`date_`=now() WHERE `id`='$id' ";
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

    $sql = "SELECT * from items WHERE id='$id' ";
    $run = $conn->query($sql);

    if($run->num_rows > 0)
    {
        while($rows = $run->fetch_assoc())
        {
            $_SESSION['old_image'] = $rows['item_img'];
            ?>
        
        <div class="parent">
            <label for="" class="form-label">Item ID</label>
            <input type="text" class="form-control" name="item_id" value="<?php echo $rows['item_id'] ?>" />
        </div>

        <div class="parent">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control" name="item_name" value="<?php echo $rows['item_name'] ?>" />
        </div>

        <div class="parent">
            <label for="" class="form-label">Item Price</label>
            <input type="text" class="form-control" name="item_price" value="<?php echo $rows['item_price'] ?>" />
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