<?php
    class Abhi{
        // static is the class variable that that it the common variable for all the objects 
        public static $count = 0;
        public $name;
        public static function main2(){
            echo self::$count;
        }
        public function main(){
            // echo self::$count . "\n";
            self::main2();
            echo $this->name . "\n";
        }
        public function __construct($name){
            $this->name = $name;
            self::$count++;
        }
    }
    // $abhi = new Abhi('Abhishek');
    // $abhi->main();
    // $abhi2 = new Abhi('Abhishek2');
    // $abhi2->main();

    class sample extends Abhi{
        // You cannot overide non-staic method from the base class methods to static in this class and static to non-static
        public  function main(){
            parent::main2();
        }
    }
    $abhi = new sample('sample');
    $abhi->main2();
    
    // class Abhi2{
    //     public static $count = 0;
    //     public function __construct(){
    //         echo 'Hello World';
    //     }
    // }
    // echo Abhi2::$count;
    // $abhi = new Abhi2();


?>