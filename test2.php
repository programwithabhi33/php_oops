<?php
    abstract class Base{
        // abstract methods and the properties cannot be private because it can be used in the child class 
        abstract protected function main();
        private  function main2(){
            echo "main";
        }
    }
    // You cannot instantiate an abstract class object 
    $obj = new Base(); //This will throw an error




?>