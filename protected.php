<?php
    function br(){
        echo "<br>";
    }

    function hr(){
        echo "<hr>";
    }
    class father{
        private $atmpin = "12345";
        protected $email = "father@gmail.com";
        public $name = "ali";

        public function __construct()
        {
            echo  $this->name;
            br();
            echo $this->email;
            br();
            echo $this->atmpin;
        
        }
     
    }
    class child extends father{
        public function __construct()
        {
            echo  $this->name;
            br();
            echo $this->email;
            br();
            //echo $this->atmpin;
        
        }
        public function __destruct()
        {
            hr();
            echo "<pre>                 The End</pre>";
        }
        
    }
    $f = new child;
  

    echo ". . . .  .mazhar"
    // hr();

    // $c = new child;
    // echo $c->name;
    // br();
    // echo $c->email;
    // br();
    // echo $c->atmpin;
?>