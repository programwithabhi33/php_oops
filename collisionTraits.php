<?php
    trait t1{
        function Test(){
            echo "This is the function of the trait t1";
        }
    }
    trait t2{
        function Test(){
            echo "This is the function of the trait t2";
        }
    }
    class Abhi{
        // You can handle the traits collision with writing an object like insteadof and as keyword
        use t1,t2{
            // You must write this line to handle the traits collision,this can call trait t1 Test function instead of t2 Test function.
            t1::Test insteadof t2;
            // after,to call t2 Test function you use the as keyword to mention the t2 Test function as another variable 
            t2::Test as abhishek;
        }
    }
    $obj = new Abhi();
    $obj->Test();
    $obj->abhishek();

?>