<?php
    class Abhi{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
    }
    $abhishek = new Abhi('Abhishek');
    echo $abhishek->name;



?>