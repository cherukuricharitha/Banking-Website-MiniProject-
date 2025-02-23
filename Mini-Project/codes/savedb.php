<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed: ".mysqli_error($conn));
}
$sql="CREATE DATABASE save";
if($conn->query($sql)==TRUE){
    echo "Database created sucessfully";
}
else{
    echo "Error creating database:".$conn->error;
}
$conn->close();
?>