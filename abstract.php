<?php
    abstract class tag{
        public $_tagname;
        function __construct(string $tagname)
        {
            $this->_tagname = $tagname;
        }
        public function writetext(string $text){
            echo "<$this->_tagname>$text</$this->_tagname>";
        }
    }
    class h1 extends tag{
        
        public function __construct()
        {
            parent::__construct('h1');
        }
    }

    $h = new h1();
    $h->writetext("Mazhar Karimi");
?>