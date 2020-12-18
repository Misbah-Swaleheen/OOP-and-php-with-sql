<?php
    class writer{
        public const prefix = "wp";
        public static $post =" posted";
        // static
        public static function writetext($text)
        {
            # code...
            echo $text;
        }
    }

   writer::writetext("layani lamani");
    
    echo writer::prefix."<br>";
   writer::writetext("mazhar karimi");
   echo writer::$post = "post";
    
?>