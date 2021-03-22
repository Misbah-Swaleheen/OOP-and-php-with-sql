<?php 
    class human{
        public $name;
        public $email;
        public $literate = false;

        public function speak()
        {
            # code...
            echo "<br>bla bla";
        }

        public function read($content)
        {
            # code...
            if ($this -> literate == true) {
                # code...
                echo $content;
            }
            else
            {
                echo "Sorry, I cannot read";
            }
        }

        public function write()
        {
            # code...
        }
    }

    class student extends human{
        public $enrollmentno;
        public function __construct(string $name , string $email, int $enrollmentno)
        {
            //echo time(). "<br>";
            $this -> name = $name;
            $this -> email = $email;
            $this -> enrollmentno = $enrollmentno; 
            $this -> literate = true;
        }

        public function speak()
        {
            # code...
            echo "<br>I am s student, Ispeak very well";
        }


        public function __destruct()
        {
            echo "<br> Page execution completed<br>";  
            //echo time() . "<br>";
        }
    }

    $h1 = new student("ali", "ali@gmail.com", 456778 );
  
    $h1 -> read("Hamlet: Novel of shakesphears");
    $h1->speak() 
?>