<?php
    class Test{
        public function log($msg){
            echo "Test clas ".$msg;
        }
    }
    class logger{
        public function log($msg){
            echo $msg;
        }
    }
    class User{
        private $logger;
        public function CreateUser(){
            $this->logger->log('User Created');
        }
        public function __construct(logger $logger){ //logger means you can only pass the logger class object otherwise this will give you error
            $this->logger = $logger;
        }
    }
    $log = new Test();
    $abhi = new User($log); //Passing the $log object to the User class,this is how User class dependet on the logger class and dependency injection works
    $abhi->CreateUser();
 

?>