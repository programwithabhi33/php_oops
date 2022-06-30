<?php

    class AC{
         public $speed;
         public $model;

         function __construct($model,$speed){
            echo $this->speed = $speed;
            echo $this->model = $model;
         }

    }

    $abhi = new AC("Voltas","17");

?>