<?php
    abstract class Base{
        // abstract methods and the properties cannot be private because it can be used in the child class 
        abstract protected function main();
        private  function main2(){
            echo "main";
        }
    }
    class Abhi extends Base{
        // When you inherite a abstract class you must be overide or implement the function or properties or methods that abstract class provide all abstract methods 
        public function main(){

        }
    }
    // You cannot instantiate an abstract class object 
    $obj = new Base(); //This will throw an error




?>