<?php

    //one thing many implementation is also called polymorphism
    interface IShape{
        function draw();
    }


    class rectangle implements IShape
    {
        function __construct(){
            echo "constructor is called";
        }

        function draw(){
            echo "rectangle is drawn";
        }
    }

    class circle implements IShape{
        function draw(){
            echo  "circle is drawn";
        }
    }

    $r1 = new rectangle();
    $r1 -> draw();
?>