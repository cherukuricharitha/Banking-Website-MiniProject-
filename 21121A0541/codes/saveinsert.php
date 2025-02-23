<?php
$servername="localhost";
$username="root";
$password="";
$database="save";
$con=new mysqli($servername,$username,$password,$database);
if($con->connect_error){
    echo "connection failed".$con->connect_error;
}
$stmt=$con->prepare("INSERT INTO createaccount(firstname,lastname,email,phoneno,address,accounttype) VALUES(?,?,?,?,?,?)");
$stmt->bind_param("sssiss",$firstname,$lastname,$email,$phoneno,$address,$accounttype);
$firstname=$_POST['firstName1'];
$lastname=$_POST['lastName1'];
$email=$_POST['email1'];
$phoneno=$_POST['phoneNumber1'];
$address=$_POST['address1'];
$accounttype=$_POST['accountType1'];
$stmt->execute();
echo "NEW records inserted sucessfully";
$stmt->close();
$con->close();
?>