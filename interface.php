<?php
    interface IWriter{
        function write($text);
    }

    class pen implements IWriter{
        private $_color;
        function __construct(string $color){
            $this->_color = $color;
        }

        function write($text){
            echo "<span style='color: $this->_color;'> $text</span>";
        }
    }

    $sp = new pen('blue');
    $sp -> write('layani lamani');

?>