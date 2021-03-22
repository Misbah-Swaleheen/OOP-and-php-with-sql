<?php 
    
class shopping_db{

    public function pdo1()
    {
        # code...
        $con = new pdo('mysql:host=localhost;dbname=online shopping center', 'root','') ;
        return $con;
    }

    public function select()
    {
        # code...
      
            # code...
            
        $query = $this->pdo1()->prepare("SELECT * FROM users");
        $query->execute();
        return $query;
      
    }
    function del_info($a){
        $query = $this->pdo1()->prepare("delete from users where id = :id");
        $query->bindParam("id", $a, PDO::PARAM_INT);
        $query->execute();
        header("location:pdo4.php");
        return $query;
        }
        
}
$obj = new shopping_db;

if(isset($_GET['pid'])){
    $b = $_GET['pid'];
     $obj->del_info($b);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">


    <?php 
       
            # code...?>
            <table class="table">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>  

                <?php 
                    foreach ($obj->select() as $index => $row) {
                        # code...?>
                        <tr>
                            <td><?php 
                                echo $index+1 
                            ?></td>
                            <td><?php 
                               echo $row['name'] 
                            ?></td>
                            <td><?php 
                               echo $row['email'] 
                            ?></td>
                            <td><?php 
                                for ($i=0; $i < strlen($row['password']); $i++) { 
                                    # code...
                                    echo '*';
                                }
                            ?></td>
                            <td><a href="pdo4.php?pid=<?php echo $row['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            
                        </tr>
                   <?php
                    }
                ?>          
            </table>
     
    </div>
</body>
</html>