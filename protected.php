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

        public function atmpin()
        {
            # code...
            return $this->atmpin;
        }

        // public function FunctionName(Type $var = null)
        // {
        //     # code...
        // }
     
    }
    class child extends father{
        public function __construct()
        {
            echo  $this->name;
            br();
            echo $this->email;
            br();
            echo $this->atmpin();
            br();
        
        }

        public function getemail()
        {
            # code...
            return $this->email;
        }
        public function __destruct()
        {
            hr();
            echo "<pre>                 The End</pre>";
        }
        
    }
   
  

    echo ". . . .  .mazhar<br>";
    // hr();

    

    $c = new child;
    echo $c->name;
    br();
    echo $c->getemail();
    br();
    echo $c->atmpin();
?>