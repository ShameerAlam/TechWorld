<?php
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$address= $_POST['address'];
$city= $_POST['city'];
$zip= $_POST['zip'];
$payment= $_POST['payment'];
$instruction= $_POST['instruction'];

//database connection
$conn= new mysqli('localhost' , 'root', '' ,'techworld');
if($conn->connect_error){
    die('connection failed :.$conn->connect_error');
}
else{
    $stmt= $conn->prepare("insert into checkout(name,email,number,address,city,zip,payment,instruction) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $name,$email,$number,$address,$city,$zip,$payment,$instruction);
    $stmt->execute();
    echo"successful";
    $stmt->close();
    $conn->close();
}




?>
