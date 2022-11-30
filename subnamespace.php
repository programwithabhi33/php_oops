<?php
    // You can make the subnamespace with the \ syntax 
    namespace Demo\abhi{
        class Abhishek{
            public function __construct(){
                echo "This is the Abhi class constructor";
            }
        }
    }
    namespace Demo2{
        // And you can use the subnamespace class with its path, with the \ slash 
        use Demo\abhi\abhishek as abhi;
        $obj = new abhi();
    }


?>