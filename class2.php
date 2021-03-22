<?php 
    class shape{
        public function draw()
        {
            # code...
            echo "";
        }
    }

    class circle extends shape{
        public function draw()
        {
            # code...
            echo "A curve is drawn with 360 angle";
        }
    }

    class rectangle extends shape{
        public $width;
        public $height;
        public function __construct(int $width, int $height)
        {
            $this -> height = $height;
            $this -> width = $width;
            echo "rectangle width is $width and height is $height";
        }
        public function draw()
        {
            # code...
           // echo "<br>A quadrilateral with four right angles";
             echo "<br>";
        //    for ($i=0; $i < $this -> width ; $i++) { 
        //         # code...
        //         echo "_";
        //     }

        //     for ($i=0; $i < $this -> height; $i++) { 
        //         # code...
        //         echo "<br>";
        //         echo "|";
        //         for($j=0; $j < $this-> width ; $j++) { 
        //             # code...
        //             echo " ";
        //         }
        //         echo "|";
        //     }

            for ($i=0; $i < $this -> height ; $i++) { 
                # code...
                echo "&boxv;";
                for ($j=0; $j < $this -> width ; $j++) { 
                    # code...
                   // echo "&nbsp&nbsp";
                   if ($i == 0 || $i == ( $this -> height - 1)) {
                       # code...
                       echo "&mdash;";
                   }
                   else {
                       # code...
                       echo "&nbsp&nbsp&nbsp&nbsp";
                   }
                }
                echo "&boxv;";
                echo "<br>";
            }
        }
    }

    class square extends rectangle{
        public $side;
        public function __construct(int $side)
        {
           
           parent::__construct($side, $side);
            
        }
        
    }

    $r1 = new rectangle(10,17);
    $r1-> draw();

    $s1 = new square(5);
    $s1-> draw();


    
?>



