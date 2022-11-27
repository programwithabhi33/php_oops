<?php
    // namespace without name is a global namespace 
    namespace {
        class Abhi2{
            public function __construct(){
                echo "Abhi2 class constructor";
            }
        }
        // $obj = new Abhi2();
        // $obj = new abc\Abhi();
    }
    namespace abc{
        class Abhi{
            public function __construct(){
                echo "Abhi class constructor in the abc namespace";
            }
        }
        // $obj = new Abhi();
    }
    namespace xyz{
        class Abhi{
            public function __construct(){
                echo "Abhi class constructor in the xyz namespace";
            }
        }
        $obj = new Abhi();
        // You can use another namespace function or classes to create their objects you can use the use keyword and if the class or the function name is same then use 'as' to give another name 
        use abc\Abhi as dummy;
        $obj2 = new dummy();
    }
?>
