<?php   

  
$server = "mysql:host=localhost;dbname=online shopping center";
  $user = 'root';
  $password = '';
  
  //database say connect karaney kay liye
  $pdo = new PDO($server, $user, $password);
  
  //pdo settngs for exposing errors
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

   if (isset($_POST['btn1'])) {
       # code...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpasword = $_POST['confirmpassword'];

        

        // echo "$name <br>";
        // echo " $email <br>";
        // echo "$password <br>";
        // echo "$confirmpasword <br>";

        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
       
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        // var_dump($result);

      



        
            # code...
            // $pdo->exec("insert into users (name, email, password, user_type_id) values ('".$name."','".$email."', '".$password."', 2)");
            // echo "Thank You";

            //redirect user to signin page
            
        
      
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

   <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container p-4">
        <h1>Signup</h1>

        <?php 
            if (isset($_POST['btn1']) ) {
                # code...
                if ($user) {
                    # code... 
                    ?>

        <span >User account is already exist</span>
<?php 
                }
                else {
                    $file = $_FILES['file'];
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploading/'.$_FILES['file']['name'] );
        $photo = $file['name'];



                    $query = $pdo->prepare("insert into users (name, email, password, user_type_id, photo) values(:name, :email, :password, 2, :photo)");
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("photo", $photo, PDO::PARAM_STR);
        $query->execute();
        header("location:signin.php");
                }
            }
        ?>

        <form method="post" action="" class="form" enctype="multipart/form-data">
        <div class="form-group p-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            <span id="error" ></span>
        </div>

        <div class="form-group p-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
            <span id="error" ></span>
        </div>

        <div class="form-group p-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
            <span id="error" ></span>
        </div>

        <div class="form-group p-4">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control"  placeholder="Enter your confirm password" style="outline:none !important; ">
            <span id="error" ></span>
        </div>

        <div class="form-group p-4">
            <label for="file">Select your photo</label>
            <input type="file" name="file" id="file" class="form-control" placeholder="Enter your confirm password">
        </div>

        <input type="submit" name="btn1" id="btn1" class="btn btn-info p-2 mx-4" value="Signup">
    </form>

    
    </div>

    <script>
        $(document).ready(function () {
            var has_error = false;
            function emptyfield(id) {
                var val = $(id).val();
                if (val == '') {
                    has_error =true;
                    $(id).next().html('this field is required').css({'color':'red'});
                }
                else{
                    has_error = false
                }


            }

            $('#confirmpassword').keyup(function () {
                var password = $('#password').val();
                var cpassword = $('#confirmpassword').val();
                console.log(password)
                if(password != cpassword){
                    console.log(cpassword)
                    $(this).css({'border':'1px solid red'});
                    $(this).next().html('Your password is not matched').css({'color':'red'});
                }
                else{
                    $(this).next().hide();
                    $(this).css({'border':'1px solid green'});
                }
                
            })

           
             $('#btn1').click(function () {
                emptyfield('#name');
                 emptyfield('#email');
                 emptyfield('#password');
                 emptyfield('#confirmpassword');
                
                 if(has_error == true){
                     return false;
                 }
                 else{
                     return true
                 }
             })
        })
    </script>
</body>
</html>