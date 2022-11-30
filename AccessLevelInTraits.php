<?php
    trait t1{
        public function show(){
            echo "This is the show function in the t1 trait";
        }
        private function MainThing(){
            echo "This is the private function in the trait t1";
        }
    }
    class Abhi{
        use t1{
            // t1::show as private;
            // You can access the private methods in the traits using the as keyword to make them first public and give them another name for accessing 
            t1::MainThing as public abhi;
        }
    }
    $obj = new Abhi();
    $obj->abhi();



?>