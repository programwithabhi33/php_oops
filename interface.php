<?php
    // With the help of the interface you can inherit two interfaces in child class 
    interface A{
        // In the interface you only declare function or methods you cannot define or declare the variables 
        // In the interface the methods you define that needs to be public 
        public function main();
    }
    interface B{
        public function main2();
    }
    class Abhi implements A,B{
        // When you inherit the interfaces you must implement methods that interface has been provide 
        public function main(){
            echo 'main';
        }
        public function main2(){
            echo 'main2';
        }
    }
    $obj  = new Abhi();
    $obj->main();

?>