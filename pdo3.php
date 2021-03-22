<?php 
    
class shopping_db{

    public function pdo1()
    {
        # code...
        $con = new pdo('mysql:host=localhost;dbname=online shopping center', 'root','') ;
        return $con;
    }

    public function insert()
    {
        # code...
        if (isset($_POST['btn1']) ) {
            # code...
            $file = $_FILES['file'];
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploading/'.$_FILES['file']['name'] );
        $photo = $file['name'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $photo1 =  $photo;
       
            $query = $this->pdo1()->prepare('insert into users (name, email, password, user_type_id, photo) values (:name, :email, :password, 2, :photo)');
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->bindParam("photo", $photo1, PDO::PARAM_STR);
            $query->execute();

            header('location:signin.php');


        }
    }


}

$obj = new shopping_db;

$obj->pdo1()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$obj->insert();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container p-4">
        <h1>Signup</h1>

        <form method="post" action="" class="form" enctype="multipart/form-data">
        <div class="form-group p-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
        </div>

        <div class="form-group p-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
        </div>

        
        <div class="form-group p-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        </div>

        <div class="form-group p-4">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Enter your confirm password">
        </div>

        <div class="form-group p-4">
            <label for="file">Select your photo</label>
            <input type="file" name="file" id="file" class="form-control" placeholder="Enter your confirm password">
        </div>
        
        
        <input type="submit" name="btn1" id="" class="btn btn-info p-2 mx-4" value="Signup">
    </form>

    
    </div>
</body>
</html>