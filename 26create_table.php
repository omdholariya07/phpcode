<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbom";

$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{

    echo "connection was successful";
}

$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);

if($result){
    echo "the db was created successfully<br>";
}
else{
    echo "the db was not created successfully beacause of this error -->". mysqli_error($conn);
}
?>