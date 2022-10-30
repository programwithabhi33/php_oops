<!-- polymorphism means one thing is used for many purposes.Lets see in the below php object oriented example -->
<?php
    interface Shape{
        public function calcarea($l,$w);
    }
    class rectangle implements Shape{
        public function calcarea($l,$w){ //calcarea function in the rectangle class
            echo $l*$w;
        }
    }

    class circle implements Shape{
        public function calcarea($pie,$r){ //calcarea function in the circle class
            // The area of circle is pie*R*R;
            echo $pie*$r*r;
        }
    }
    $a = new rectangle();
    $a->calcarea(2,4);
    echo "<br>";
    $b = new circle();
    $a->calcarea(3.14,2);

?>
