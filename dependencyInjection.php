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
        public function __construct(Test $logger){
            $this->logger = $logger;
        }
    }
    $log = new Test();
    $abhi = new User($log);
    $abhi->CreateUser();


?>