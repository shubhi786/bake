<?php

require_once('php/dbconfig.php');

$id = $_GET['id'];
$status = $_GET['status'];

if($status == 'pending')
{
    $sql = "UPDATE orders SET `status`='success' WHERE id='$id' ";
    $run = $conn->query($sql);

}
else
{
    $sql = "UPDATE orders SET `status`='pending' WHERE id='$id' ";
    $run = $conn->query($sql);
}

header('location:admin.php');

?>