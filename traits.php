<?php

 trait t1 {
    function Test1(){
        echo "Im the function of the train t1";
    }
 }
 class Abhi{
    // Here you can use the trait using the use statement and the trait name
    use t1;
 }
 $obj = new Abhi();
 $obj->Test1();

?>