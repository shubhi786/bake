<?php 

try {
    
$hostname = "localhost";
$username = "root";
$pass = "";
$dbname = "bake";

$conn = mysqli_connect($hostname, $username, $pass);

if($conn)
{
    echo "";
}
else
{
    mysqli_error($conn);

}

mysqli_select_db($conn,$dbname);

}
catch(Exception $e)
{
    echo $e;
}

?>