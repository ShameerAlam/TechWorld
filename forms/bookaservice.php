<?php
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$date= $_POST['date'];
$time= $_POST['time'];
$serviceneeded= $_POST['serviceneeded'];
$message= $_POST['message'];



//database connection
$conn= new mysqli('localhost' , 'root', '' ,'techworld');
if($conn->connect_error){
    die('connection failed :.$conn->connect_error');
}
else{
    $stmt= $conn->prepare("insert into bookaservice(name,email,phone,date,time,serviceneeded,message) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss", $name,$email,$phone,$date,$time,$serviceneeded,$message);
    $stmt->execute();
    echo"";
    $stmt->close();
    $conn->close();
}




?>