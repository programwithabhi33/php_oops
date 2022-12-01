<?php
    // class Abhi{
    //     public $value = "This is the value variable in the Abhi class";
    // }

    // class Test{
    //     public $test;
    //     public function __construct(){
    //         $this->test = new Abhi();
    //     }
    // }
    // $obj = new Test();
    // // $obj is the super object and the test is the sub object 
    // echo $obj->test->value;


    class Abhi{
        public function fun1(){
            echo "This is the fun 1 in the Abhi class";
            // it returns the current object so you can call another function in this class
            return $this;
        }
        public function fun2(){
            echo "This is the fun 2 in the Abhi class";
            return $this;
        }
        public function fun3(){
            echo "This is the fun 3 in the Abhi class";
            return $this;
        }
    }

    $obj = new Abhi();
    // This is called method chaining
    $obj->fun1()->fun2()->fun3();


?>