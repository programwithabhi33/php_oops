<?php
    class Abhi{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
    }
    // $abhishek = new Abhi('Abhishek');
    // echo $abhishek->name;


    class Abhi2 extends Abhi{
        // when you enherite another class when you dont call this class contructor the parent class contructor automatically called and when you explicitily called this class contructor you have to call the parnet class contructor using the parnt::__constructor() systax
        public function __construct($name){
            // parent::__construct($name);
            // $this->name = $name;
        }
    }
    $abhi = new Abhi2('abhi2');
    echo $abhi->name;



    
?>