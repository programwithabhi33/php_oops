<?php
    class Abhi{
        // static is the class variable that that it the common variable for all the objects 
        public static $count = 0;
        public $name;
        public function main(){
            echo self::$count . "\n";
            echo $this->name . "\n";
        }
        public function __construct($name){
            $this->name = $name;
            self::$count++;
        }
    }
    $abhi = new Abhi('Abhishek');
    $abhi->main();
    $abhi2 = new Abhi('Abhishek2');
    $abhi2->main();



?>