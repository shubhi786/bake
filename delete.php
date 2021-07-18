<?php

session_start();

require_once('php/dbconfig.php');

$order_id = $_GET['id'];

$sql = "DELETE FROM orders WHERE order_id=$order_id ";
$run = $conn->query($sql);

if($run)
{
    session_unset();
    session_destroy();
    header('Location:admin.php');
}
else
{
    echo "something went wrong";
}

?>