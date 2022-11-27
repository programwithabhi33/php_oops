<?php
    class Abhi{
        public function Test(){
            echo "Im the test function in the Abhi class";
        }
    }
    trait t1{
        function Test(){
            echo "Im the test function in the Trait t1";
        }
    }

    class Abhi2 extends Abhi{
        function Test(){
            echo "Im the test function in the Abhi2 class";
        }
        use t1;
        
    }

    $obj = new Abhi2();
    $obj->Test();

?>