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

 $query = "UPDATE categories SET Category_name = 'Perfumes' WHERE Category_name LIKE 'perfumes' ";

 $result = $conn->query($query);

 if ($result) {
     # code...
     echo "done";
 }
 else {
     echo "error";
 }

?>