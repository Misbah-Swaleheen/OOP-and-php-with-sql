
<?php   
  $server = "mysql:host=localhost;dbname=online shopping center";
  $user = 'root';
  $password = '';
  
  //database say connect karaney kay liye
  $pdo = new PDO($server, $user, $password);
  
  //pdo settngs for exposing errors
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  session_start();
  


   if (isset($_POST['btn1'])) {
       # code...
      
        $email = $_POST['email'];
        $password = $_POST['password'];
       

        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email and password = :password");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        // var_dump($result);

       
       
      
   
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container p-4">
        <h1>Signin</h1>

        <?php 
            if (isset($_POST['btn1'])) {
                # code...
                if (!$user) {
                    # code...
                    ?>
                <span>Invalid email and Password</span>
                    <?php 
                }
                else {
                    //hum user ko pehchan kr yaad kr lete hn
                  
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                 
                    //humm ussko  uski user type/role ke mutabiq uske desired page pr redirect krdete hn
                    header('location:user.php');
                
                }
        
            } 
        ?>

        <form method="post" action="" class="form">
       

        <div class="form-group p-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
        </div>

        <div class="form-group p-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        </div>

      
        <input type="submit" name="btn1" id="" class="btn btn-info p-2 mx-4" value="Signin">
    </form>

    
    </div>

   
</body>
</html>