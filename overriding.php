<?php
    class world{
        public function greeting(){
            echo "Hello";
        }
       
    }
    class pakistan extends world{
        public function greeting()
        {
            # code...
            echo "Assalm-o-alaikum";
        }
    }
    $pobj = new world;
    $pobj -> greeting();

    $obj = new pakistan;
    $obj->greeting();
?>