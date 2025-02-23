<?php
$servername="localhost";
$username="root";
$password="";
$database="save";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$sql="CREATE TABLE createaccount(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phoneno INT(10) NOT NULL,
address VARCHAR(150) NOT NULL,
accounttype VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if($conn->query($sql)===TRUE){
    echo "Table createaccount successfully created";
}
else{
echo "error creating table".$conn->error;
}
$conn->close();
?>