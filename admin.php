<!DOCTYPE html>
<html>
<head>
	<title>ADMIN BLOCK</title>

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


   <style type="text/css">
     
     .nav-pills {
      margin-left:10%;
      margin-top:5%;
     }
     
     .nav-pills .nav-link.active {
      background-color:black;
     }
     
     .nav-pills .nav-item a {
      color:black;
      font-style:italic;
      font-weight:bold;
     }

     input[type="text"] {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .btn {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }



   </style>


</head>

<body>

    <div class="admin-heading">
        <h1 class="text-center bg-success">BAKERY ADMIN PANEL</h1>
    </div>

<?php include('php/dbconfig.php') ?>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-reserve-tab" data-toggle="pill" href="#pills-reserve" role="tab" aria-controls="pills-reserve" aria-selected="true">ORDERS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-foodorder-tab" data-toggle="pill" href="#pills-foodorder" role="tab" aria-controls="pills-foodorder" aria-selected="false">ITEMS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="pills-users-tab" data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="false">USERS</a>
  </li>
</ul>


<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-reserve" role="tabpanel" aria-labelledby="pills-reserve-tab">
  	
    <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">ORDER BOOKS</h1>
        </div>
    	 <div class="orderbooks-tab ">
             <table class="container table table-striped text-capitalize">
             	 <tr class="thead-dark">
             	 	<th>
             	 		id
             	 	</th>
             	 	<th>
             	 		order id
             	 	</th>
             	 	<th>
             	 		full name
             	 	</th>
                <th>
             	 		Mobile
             	 	</th>
             	 	<th>
             	 		address
             	 	</th>
                    <th>
             	 		item id
             	 	</th>
                    <th>
             	 		item name
             	 	</th>
                    <th>
             	 		item quantity
             	 	</th>
                    <th>
             	 		total price
             	 	</th>
                    <th>
             	 		date of order
             	 	</th>
                    <th>
             	 		status
             	 	</th>
                      <th>
             	 		edit
             	 	</th>
                      <th>
             	 		delete
             	 	</th>
             	 </tr>
             	 <?php

                 session_start();
             	  
                    $res="SELECT * FROM orders";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                    	while($rows=mysqli_fetch_assoc($result))
                    	{?>

             	 <tr>
             	 	<td>
             	 		<?php echo($rows['id']) ?>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['order_id']) ?>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['fname']) ?>
             	 	</td>
                <td>
             	 		<a class="text-dark" href="tel:<?php echo($rows['mobile']) ?>"><?php echo($rows['mobile']) ?></a>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['address']) ?>
             	 	</td>
                      <td>
             	 		<?php echo($rows['item_id']) ?>
             	 	</td>
                      <td>
             	 		<?php echo($rows['item_name']) ?>
             	 	</td>
                      <td>
             	 		<?php echo($rows['item_q']) ?>
             	 	</td>
                      <td>
             	 		<?php echo($rows['total_price']) ?>
             	 	</td>
                      <td>
             	 		<?php echo($rows['date_']) ?>
             	 	</td id="status">
                      <?php

                      if($rows['status'] == 'pending')
                      {?>

                <td class="bg-warning">
                      <a class="text-white" href="update_status.php?id=<?php echo($rows['id']) ?>&status=<?php echo($rows['status']) ?>" class=""><?php echo($rows['status']) ?></a>
             	 	</td>

                    <?php
                      }
                      else
                      {?>

                    <td class="bg-success">
             	 		<a class="text-white" href="update_status.php?id=<?php echo($rows['id']) ?>&status=<?php echo($rows['status']) ?>" class=""><?php echo($rows['status']) ?></a>
             	 	</td>
                        
                    <?php
                      }
                      
                      ?>
                      <td>
             	 		<a href="update.php?id=<?php echo $rows['order_id']; ?>" class="btn btn-primary">edit</a>
             	 	</td>
                      <td>
                      <a href="delete.php?id=<?php echo $rows['order_id']; ?>" class="btn btn-danger">delete</a>
             	 	</td>
             	 </tr>
             	 <?php	} ?>
                    
             <?php } ?>
             
             </table>

    	 </div>
    </section>

  </div>
  <div class="tab-pane fade" id="pills-foodorder" role="tabpanel" aria-labelledby="pills-foodorder-tab">
      
   <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info"> ADD ITEMS</h1>
        </div>
         <div class="orderbooks-tab ">
             <form action="" method="post" class="container" enctype="multipart/form-data">

             <?php
             
             require_once('php/dbconfig.php');

             if(isset($_POST['submit']))
             {
                 $item_id = $_POST['item_id'];
                 $item_name = $_POST['item_name'];
                 $item_price = $_POST['item_price'];
                 
                 $filename = $_FILES['img']['name'];
                 $tmpname = $_FILES['img']['tmp_name'];

                 $folder = 'img/items/'.$filename;

                 $arr = array('jpg','png','jpeg','gif');
                $diff = explode('.',$filename);
                $check = strtolower(end($diff));

                if(in_array($check,$arr))
                {
                    move_uploaded_file($tmpname,$folder);

                    $sql = "INSERT INTO items VALUES('0','$item_id','$item_name','$folder','$item_price',now()) ";
                    $run = $conn->query($sql);
                    
                    if($run)
                    {
                        echo "ok";
                    }
                    else
                    {
                        echo "not ok";
                    }
                }
             }
             
             ?>
                <div class="parent mt-3">
                      <label for="">
                        Item ID
                      </label>
                      <input class="form-control" type="text" name="item_id" />
                </div>

                <div class="parent mt-3">
                      <label for="">
                        Item name
                      </label>
                      <input class="form-control" type="text" name="item_name" />
                </div>

                <div class="parent mt-3">
                     
                      <input class="" type="file" name="img" />
                </div>

                <div class="parent mt-3">
                      <label for="">
                        Item price
                      </label>
                      <input class="form-control" type="text" name="item_price" />
                </div>

                <input type="submit" class="mt-3 btn btn-success" name="submit" value="submit"/>
             </form>
         </div>

         <div class="container">
             
             <div class="bg-primary">
                <h1 class="text-center text-white p-4 mt-5 mb-3">All Items</h1>
             </div>

             <table class="table table-striped table-hover table-bordered">
                  <tr>
                    <th>S No.</th>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Image</th>
                    <th>Item Price</th>
                    <th>Date</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                  </tr>
                  <?php
                  require_once('php/dbconfig.php');

                  $sql = "SELECT * FROM items";

                  $run = $conn->query($sql);

                  if($run->num_rows > 0)
                  {
                    while($row = $run->fetch_assoc())
                    {?>
                    
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['item_id']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td> <?php $diff = explode('../',$row['item_img']); $final_img = strtolower(end($diff)); ?> <img width="100px" height="100px" src="<?php echo $final_img; ?>" alt="Item Image"/> </td>
                    <td><?php echo $row['item_price']; ?></td>
                    <td><?php echo $row['date_']; ?></td>
                    <td><a class="btn btn-success" href="update_item.php?id=<?php echo $row['id']; ?>">Edit </a></td>
                    <td><a class="btn btn-danger" href="delete_item.php?id=<?php echo $row['id']; ?>">Delete </a></td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
             </table>
         </div>
    </section>

  </div>
  

<div class="tab-pane fade" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
    <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">USERS BLOCK</h1>
        </div>
         <div class="orderbooks-tab ">
             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;"  >
                 <tr class="thead-dark">
                    <th>
                        FNAME
                    </th>
                    <th>
                        UNAME
                    </th>
                    <th>
                        PASSWORDS
                    </th>
                    <th>
                        MOBILE
                    </th>
                    <th>
                        EMAIL
                    </th>
                 </tr>
                 <?php
                  
                    $res="SELECT * FROM users";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>

                 <tr>
                    <td>
                        <?php echo($rows['fname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['uname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['pass']) ?>
                    </td>
                    <td>
                        <?php echo($rows['mobile']) ?>
                    </td>
                    <td>
                        <?php echo($rows['email']) ?>
                    </td>
                 </tr>
                 <?php  } ?>
                    
             <?php } ?>
             
             </table>
         </div>
    </section>
</div>


</div>


 <script src="js/bootstrap.min.js" type="text/javascript"></script>
 <script src="js/util.js" type="text/javascript"></script>

</body>
</html>