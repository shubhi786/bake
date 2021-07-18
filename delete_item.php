<?php
session_start();

require_once('php/dbconfig.php');

$id = $_GET['id'];

$sql = "DELETE FROM items WHERE id='$id' ";
$run = $conn->query($sql);

if($run)
{
    header('location:admin.php');
}

?>