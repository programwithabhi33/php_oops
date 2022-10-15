<?php
    class Abhi{
        protected function main(){
            echo "main function\n";
        }
    }
    class Abhi2 extends Abhi{
        public function main(){
            parent::main();
            echo "Main function in the Abhi2 class";
        }
    }
    $abhi = new Abhi2();
    $abhi->main();



?>