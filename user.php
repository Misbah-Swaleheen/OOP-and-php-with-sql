<?php 
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style (3).css"> -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Document</title>

   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container-fluid  bar">
        <div class="row">
                <div class="col-lg-6 col-md-6  col-sm-12">
                    <ul class="d-flex">
                        <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" d-flex justify-content-end" id="signuplinkdiv">
                       
                        <div class="btn link" id="name"><i class="fa fa-user-circle pr-2" aria-hidden="true"></i><span
                                id="namesec"><?php 
                                    //  if (isset($_POST['btn1'])) {
                                    //      # code...\
                                    //      echo $user['name'];
                                    //  }
                                    echo $_SESSION['name'];
                                ?></span></div> 
                                <form method="post"  action="">
                        <button type="submit" class="btn link signout " aria-hidden="true" id="signout" name="btn1"><i
                                class="fa fa-sign-out pr-2"> </i>Sign out</button>
                                </form>
                    </div>

                    <?php 
                        if (isset($_POST['btn1'])) {
                            # code...
                            // session_unset();
                          
//                             unset($_SESSION["id"]);
//    unset($_SESSION["name"]);
                            session_destroy();
                            header("location:signin.php");
                         
                        }
                    ?>
                </div>

                
        </div>
    
    </div>
</body>
</html>