<?php

    // class AC{
    //      public $speed;
    //      public $model;

    //      function __construct($model,$speed){
    //         echo $this->speed = $speed;
    //         echo $this->model = $model;
    //      }

    // }

    // $abhi = new AC("Voltas","17");
        class Abhi{
            public $abhishek = 1;
            public static $abhi = 1;

            public function plus (){
                echo $this->abhishek+1;
                echo $this->abhishek;
            }
            public function minus (){
                echo $this->abhishek-1;
                // echo $this->abhishek;
            }
            public function  show(){
                // echo $this->abhishek;
                echo Abhi::$abhi;
                echo "<br>";
                echo Abhi::mainThing();
            }
            public static function mainThing(){
                print_r('abhi class');

            }
        }
        $abhi = new Abhi();
        // $abhi->plus();
        // $abhi->minus();
        $abhi->show();
        // Abhi::mainThing();
        // echo Abhi::$abhi;
?>