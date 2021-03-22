<?php 
    
    class bottle{
        public $capacity;
        public $fill;

        public function __construct(int $capacity ,int  $fill)
        {
            $this -> capacity = $capacity;
            $this -> fill = $fill;
        }
    }

    $b =[ new bottle(8,4), new bottle(3,1),
    new bottle(6,3)];

    // for ($i=0; $i <3 ; $i++) { 
    //     # code...
    //     echo "bottle capacity is ". $b[$i] -> capacity . " and and fill is " . $b[$i] -> fill . "<br>";
    // }
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
     <div class="container">
     <div class="my-4">
     <h1 class="mx-4">Bottle Information</h1>
    
    <form method="post" action="">
    <div class="form-group p-4">
            <label for="bottle">No of bottle</label>
            <input type="number" name="bottle" id="bottle" class="form-control">
        </div>
        

        
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Form Go!">
    </form>
     </div>
     
     <div class="my-4">
     <form method="post" action="">
        <?php 
            if (isset($_POST['bottle']) && $_POST['bottle'] != '') {
                # code...
                for ($i=0; $i < $_POST['bottle']; $i++) { 
                    # code... ?>
                    <div class="form-group p-4">
            <label for="name">Capacity</label>
            <input type="number" name="capacity<?php $i ?>" id="name" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="fill">Fill</label>
            <input type="number" name="fill<?php $i ?>" id="fill" class="form-control">
        </div>
                <?php
                }
          
        ?>
     
       
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Form Go!">

<?php } ?>
</form>
     </div>
 <div class="my-4">
 <?php 
    if (isset($_POST['capacity']) && $_POST['capacity'] != '' && isset($_POST['fill']) && $_POST['fill'] != '') {
        # code...
        for ($i=0; $i < $_POST['bottle']; $i++) { 
            # code...
            array_push($b, new bottle($_POST["capacity $i"], $_POST["fill $i"]));
    
        }
       
 ?>
 <ul>
    <?php 
        foreach ($b as $value) {
            # code...?>
    <li>bottle capacity is <?php echo $value-> capacity  ?>  and and fill is <?php echo $value->fill  ?></li>

        <?php }
    }
    ?>
 </ul>
 </div>
     </div>
</body>
</html>