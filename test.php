<?php
    class Abhi {
        protected $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function show(){
            echo $this->name;
        }
    }
    class Abhi2 extends Abhi {

    }
    class Abhi3 extends Abhi2 {

    }

// $abhishek = new Abhi('Abhishek');
// echo $abhishek->show();

$abhishek= new Abhi3('Abhishek');
echo $abhishek->show();



?>