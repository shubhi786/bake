<?php

require_once('dbconfig.php');

session_start();

$user = $_SESSION['user'];

$sql = "SELECT * from users WHERE uname='$user' ";
$run = $conn->query($sql);

if($run->num_rows > 0)
{
  while($row = $run->fetch_assoc())
  {
    $_SESSION['user_address'] = $row['address'];
    $_SESSION['mobile'] = $row['mobile'];
    $fname = $row['fname'];

    if($_GET['q'] && $_GET['id'])
{
  $q = $_GET['q'];
  $id = $_GET['id'];

  $mobile = $_SESSION['mobile'];
  $user_addr = $_SESSION['user_address'];
  $_SESSION['token'] = rand(1000000,10000000);
  $order_id = $_SESSION['token'];
  $cookname = "tokens";
  setcookie($cookname,$order_id,time()+86400);

  $get = "SELECT * FROM items WHERE item_id='$id' ";
  $get_all = $conn->query($get);

  if($get_all->num_rows > 0)
  {
    while ($row = $get_all->fetch_assoc())
    {
      $item_name = $row['item_name'];
      $item_price = $row['item_price'];

      $total = $q*$item_price;

      $ins = "INSERT INTO orders VALUES('0','$order_id','$fname','$mobile','$user_addr','$id','$item_name','$q','$total',now(),'pending')";
      $run = $conn->query($ins);

    }
  }  
  
  header('Location:../index.php?');
}
else
{
  $_SESSION['error'] = "Something Went Wrong...Please try again";
}




  }
}



?>