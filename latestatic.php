<?php
    class Abhi{
        public static $name = "Abhi";
        public function main(){
            echo static::$name;//This is the late static binding which can be called at runtime
            echo self::$name; //This is the early static binding 
        }
        // public function __construct($name){
        //     self::$name = $name;
        // }
    }
    class Abhi2 extends Abhi{
        public static $name = "Abhi2";
    }

    $abhi = new Abhi2();
    $abhi->main();


?>