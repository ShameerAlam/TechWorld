<?php
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];




//database connection
$conn= new mysqli('localhost' , 'root', '' ,'techworld');
if($conn->connect_error){
    die('connection failed :.$conn->connect_error');
}
else{
    $stmt= $conn->prepare("insert into service(name,email,subject,message) values(?,?,?,?)");
    $stmt->bind_param("ssss", $name,$email,$subject,$message);
    $stmt->execute();
    echo"";
    $stmt->close();
    $conn->close();
}




?>