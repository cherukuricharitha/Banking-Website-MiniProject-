<?php
$servername="localhost";
$username="root";
$password="";
$database="save";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
die("Error".mysqli_error($conn));
else{
    echo "<script>alert('connected')</script>";
}
?>