<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbom";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

// find the number of record return
$num = mysqli_num_rows($result);
echo $num;
echo " record found in database<br>";

// display the rows returned by the sql query
//mysqli_fetch_assoc = display(fetch) the record, return assotiative array

//if($num> 0){
   // $row = mysqli_fetch_assoc($result);
   // echo var_dump($row);
   // echo "<br>";
   // $row = mysqli_fetch_assoc($result);
   // echo var_dump($row);
   // echo "<br>";
   // $row = mysqli_fetch_assoc($result);
   // echo var_dump($row);
   // echo "<br>";
   // $row = mysqli_fetch_assoc($result);
   // echo var_dump($row);
    //echo "<br>"; }

 // fetch use while loop
 while($row = mysqli_fetch_assoc($result)){
   //echo var_dump($row);
   echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
   echo "<br>";
}
?>