<?php

 trait t1 {
    function Test1(){
        echo "Im the function of the train t1";
    }
 }
 trait t2 {
    function Test1(){
        echo "Im the function of the train t2";
    }
 }
 class Abhi{
    // Here you can use the trait using the use statement and the trait name
    // use t1;

    //You can use the multiple traits using the , 
    use t1,t2;
 }
 $obj = new Abhi();
 $obj->Test1();

?>