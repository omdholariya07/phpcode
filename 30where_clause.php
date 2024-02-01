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

$sql = "SELECT * FROM `phptrip` WHERE `dest`='bihar'";
$result = mysqli_query($conn,$sql);

// usage of WHERE Clause to fetch the data from database
$num = mysqli_num_rows($result);
echo $num;
echo " record found in database<br>";
$no =1;
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
        $no = $no +1;
  }
}

// usage of WHERE Clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'aman6' WHERE `dest` = 'bihar'"; 
//$sql = "UPDATE `phptrip` SET `name` = 'FromBihar' WHERE `dest` = 'Bihar'";
$result = mysqli_query($conn,$sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "we updated record successfully";
}
else{
    echo "we can't updated";
}
?>