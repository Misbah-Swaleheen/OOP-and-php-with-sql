<?php
    // Model Class which has only attributes not methods
    class student{
        public $id;
        public $name;
        public $email;
        private $password;

    }

    $s1 = new student();
    $s1 -> id = 1;
    $s1 -> name = "ali"; 
    $s1 -> email =  $s1 -> name . '@gmail.com';

    $s2 = new student();
    $s2 -> id = 2;
    $s2 -> name = "Faizan"; 
    $s2 -> email =  $s2 -> name . '@gmail.com';

    $students = [$s1, $s2]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($students as $items){
            ?>

            <tr>
                    <td><?php echo $items -> id ?></td>
                    <td><?php echo $items -> name ?></td>
                    <td><?php echo $items -> email ?></td>
            </tr>

        <?php
                }
                ?>
        </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>