<?php 
 $server = "localhost";
 $database = "online shopping center";
 $user = "root";
 $password = "";

 $conn = new mysqli($server, $user, $password, $database);

 if ($conn->connect_error ) {
     # code...
     echo "stop <br>";
 }
 else {
     
    echo "run <br>";
 }

 $query = "SELECT * FROM categories";

 $result = $conn->query($query);



while($row = $result->fetch_assoc()){
    echo $row['Id']. "  ";
    echo $row['Category_name']. "<br>";
}
 
?>