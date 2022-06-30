<?php

    class AC{
         public $speed = 16;

        public function speedUp(){
            $this->speed++;
            print_r($this->speed);
            // $this->speedUp();
        }
        public function speedDown(){
            $this->speed--;
        }
    }

    $abhi = new AC();
    $abhi->speedUp();

    $main = new AC();
    echo "This is main speed variable\n";
    print_r($main->speed);

?>